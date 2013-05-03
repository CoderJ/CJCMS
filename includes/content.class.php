<?php

/**
 * @author Coder J
 * @copyright 2012
 */

class content{
    public $db = "";
    public $basic = "";
    public $uid = "";

    public function content($db,$basic){
        $this->db = $db;
        $this->basic = $basic;
        $this->uid = $_SESSION['user']['user_id'];

    }
    public function getAllCategory($show,$type){
        $show = $show?$show:'all';
        $category = $this->getCategory($show,Null,Null,$type);
        $c = array();
        foreach ($category as $key => $value) {
            $pre = '';
            for($i=0;$i<$value['level'];$i++){
                $pre .= ' -- ';
            }
            array_push($c, array('cg_name'=>$pre.$value['cg_name'],'cg_id'=>$value['cg_id']));
        }
        return $c;
    }

    public function getCategoryType(){
        return array('article'=>'文章',
                     'page'=>'单页',
                     'album'=>'相册',
                     'video'=>'视频'
                    );
    }
    public function getArticleStatus(){
        return array('locked'=>'被锁定',
                     'published'=>'已发布',
                     'draft'=>'草稿',
                     'trash'=>'回收站'
                    );
    }
    public function addCategory($c){
        if($c['name'] && $c['type']){
            $category = array('cg_name'=>$c['name'],'cg_type'=>$c['type'],'cg_parent'=>($c['parent']?$c['parent']:0),'cg_public'=>$c['public']);
            $this->db->insert(db_pre."category",$category);
            $insert_id = $this->db->insert_id();
            if($insert_id>0){
                if($category['cg_type'] == 'page'){
                    $page = array('title'=>$category['cg_name'],'content'=>'&nbsp;','date'=>date('Y-m-d'),'status'=>'published','category'=>$insert_id);
                    $addPageRes = $this->addArticle($page);
                    if($addPageRes['code']!=1){
                        return $addPageRes;
                    }
                }
                    return $res = array('code'=>1,'msg'=>'类别\''.$c['name'].'\'添加成功');
            }else{
                    return $res = array('code'=>0,'msg'=>'数据库操作失败','category'=>$category);
            }

        }else{
            return $res = array('code'=>0,'msg'=>'请检查类别名称/类型正确输入','category'=>$category);
        }
    }
    public function updateCategory($c,$id){
        if($c['name'] && $c['type']){
            $category = array('cg_name'=>$c['name'],'cg_type'=>$c['type'],'cg_parent'=>($c['parent']?$c['parent']:0),'cg_public'=>$c['public']);
            $this->db->update(db_pre."category",$category, 'cg_id = '.$id);

            $originTypeSql = 'SELECT cg_type FROM '.db_pre.'category WHERE cg_id = "'.$id.'" ';
            $originTypeRes = $this->db->getone($originTypeSql);
            $originType = $res['cg_type'];

            if($originType != $c['type']){
                $delArticleArr = array('a_status'=>'trash','a_category'=>0);
                $this->db->update(db_pre.'article',$delArticleArr,'a_category='.$id);
                if($c['type'] == 'page'){
                    $page = array('title'=>$category['cg_name'],'content'=>'&nbsp;','date'=>date('Y-m-d'),'status'=>'published','category'=>$id);
                    $addPageRes = $this->addArticle($page);
                    if($addPageRes['code']!=1){
                        return $addPageRes;
                    }
                }
            }
                return $res = array('code'=>1,'msg'=>'类别\''.$c['name'].'\'编辑成功','category'=>$category);

        }else{
            return $res = array('code'=>0,'msg'=>'请检查类别名称/类型正确输入','category'=>$category);
        }
    }
    public function updateCategoryOrder($c){
        foreach ($c['id'] as $key => $value) {
            $updateArr = array('cg_public'=>$c['public'][$key],'cg_order'=>$c['order'][$key]);
            $this->db->update(db_pre.'category',$updateArr,'cg_id = "'.$value.'" ');
        }
        return $res = array('code'=>1,'msg'=>'类别更新成功');
    }
    public function getCategoryInfo($id){
        $sql = 'SELECT * FROM '.db_pre.'category WHERE cg_id = "'.$id.'" ;';
        $res = $this->db->getone($sql);
        return $res;
    }
    public function getCategory($show,$parent,$level,$type){
        $show = $show?$show:'public';
        $parent = $parent?$parent:0;
        $level = $level?$level:0;
        $categorySql = 'SELECT * FROM '.db_pre.'category WHERE cg_parent = "'.$parent.'" ';
        if($show == 'public'){
            $categorySql .= 'AND cg_public = 1 ';
        }
        if($type){
            $categorySql .= 'AND cg_type = "'.$type.'" ';
        }
        $categorySql .= 'ORDER BY cg_order;';
        $category = $this->db->getall($categorySql);
        foreach ($category as $k => $v) {
            $category[$k]['level'] = $level;
        }
        $res = array();
        foreach($category AS $k=>$v){
            array_push($res, $category[$k]);
            $rs = $this->getCategory($show,$v['cg_id'],$level+1,$type);
            foreach ($rs as $key => $value) {
                array_push($res, $value);
            }
            //$category[$k]['children'] = $this->getCategory($show,$v['cg_id'],$level+1);

        }

        foreach ($res as $k => $v) {
            $level = $res[$k]['level'];
            $res[$k]['level_s'] = ($level==$res[$k-1]['level'])?'0':(($level>$res[$k-1]['level'])?'+':'-');
        }
        return $res;
    }

    public function addCategoryTypeAndName($category){
        $type = $this->getCategoryType();
        foreach ($category as $k => $v) {
            $category[$k]['cg_type_name'] = $type[$category[$k]['cg_type']];
            if ($category[$k]['cg_parent'] == 0) {
                $category[$k]['cg_parent_name'] = '无';
            }else{
                foreach ($category as $key => $value) {
                    if($value['cg_id'] == $category[$k]['cg_parent']){
                        $category[$k]['cg_parent_name'] = $value['cg_name'];
                        break;
                    }
                }
            }
        }

        return $category;

    }
    public function delCategory($id){
        $CategoryInfoSql = 'SELECT user_group FROM '.db_pre.'user WHERE user_id = "'.$id.'";';
        $CategoryInfo = $this->db->getone($CategoryInfoSql);
        if(!$CategoryInfo['cg_id']){
            header('Location: /admin/?act=categoryList');
        }
        $delSql = 'DELETE FROM '.db_pre.'category WHERE cg_id = '.$id.' ;';
        $del = $this->db->query($delSql);

        $delArticleArr = array('a_status'=>'trash','a_category'=>0);
        $this->db->update(db_pre.'article',$delArticleArr,'a_category='.$id);
        return $res = array('code'=>1,'msg'=>'删除类别成功');
    }

    public function addArticle($c){
        $article = array('a_title' => $c['title'],'a_author'=>$this->uid,'a_source' => $c['source'],'a_content'=>htmlspecialchars($c['content']),'a_date'=>$c['date'],'a_status'=>$c['status'],'a_category'=>$c['category'], a_creatTime=>date('Y-m-d H:i:s') );
        if(!$c['content']){
            return $res = array('code'=>0,'msg'=>'内容不能为空','article'=>$article);
        }
        $this->db->insert(db_pre."article",$article);
        $insert_id = $this->db->insert_id();


        $addImageRes = $this->addImages($c,$insert_id);
        if($addImageRes['code'] != 1){
            return $addImageRes;
        }else{
            $article['image'] = $addImageRes['image'];
        }
        
        $addFilesRes = $this->addFiles($c,$insert_id);
        if($addFilesRes['code'] != 1){
            return $addFilesRes;
        }else{
            $article['file'] = $addFilesRes['file'];
        }

        if($insert_id>0){
            return $res = array('code'=>1,'msg'=>'文章添加成功');
        }else{
            return $res = array('code'=>0,'msg'=>'数据库操作失败'.$sql,'article'=>$article);
        }
    }

    public function updateArticle($c,$id){
        if(!$c['content']){
            return $res = array('code'=>0,'msg'=>'内容不能为空','article'=>$article);
        }
        $article = array('a_title' => $c['title'],'a_author'=>$this->uid,'a_source' => $c['source'],'a_content'=>htmlspecialchars($c['content']),'a_date'=>$c['date'],'a_status'=>$c['status'],'a_category'=>$c['category'], a_updateTime=>date('Y-m-d H:i:s') );
        $this->db->update(db_pre."article",$article,'a_id='.$id);

        $addImageRes = $this->addImages($c,$id);
        if($addImageRes['code'] != 1){
            return $addImageRes;
        }else{
            $article['image'] = $addImageRes['image'];
        }
        
        $addFilesRes = $this->addFiles($c,$id);
        if($addFilesRes['code'] != 1){
            return $addFilesRes;
        }else{
            $article['file'] = $addFilesRes['file'];
        }
        
        return $res = array('code'=>1,'msg'=>'文章修改成功','article'=>$article);
    }

    public function addImages($c,$id){
        $delSql = 'DELETE FROM '.db_pre.'image WHERE i_article = '.$id.';';
        $this->db->query($delSql);
        $image = array();
        foreach ($c['image'] as $k => $v) {
            $insertArr = array('i_url'=>$v,'i_description'=>$c['description'],'i_article'=>$id,'i_show_as_slider'=>$c['show_as_slider'][$k],'i_show_as_cover'=>(($c['show_as_cover'] == $v)?1:0) );
            array_push($image, $insertArr);
            $this->db->insert(db_pre.'image',$insertArr);
            $insert_id = $this->db->insert_id();
            if($insert_id< 0){
                return $res = array('code'=>0,'msg'=>'图片数据库操作失败','image'=>$image);
            }
        }        
        return $res = array('code'=>1,'msg'=>'图片添加成功','image'=>$image);
    }

    public function addFiles($c,$id){
        $delSql = 'DELETE FROM '.db_pre.'file WHERE f_article = '.$id.';';
        $this->db->query($delSql);
        $file = array();
        foreach ($c['file'] as $k => $v) {
            $insertArr = array('f_url'=>$v,'f_article'=>$id,'f_show_as_list'=>$c['show_as_list'][$k],'f_name'=>$c['filename'][$k] );
            array_push($file, $insertArr);
            $this->db->insert(db_pre.'file',$insertArr);
            $insert_id = $this->db->insert_id();
            if($insert_id< 0){
                return $res = array('code'=>0,'msg'=>'文件数据库操作失败','file'=>$file);
            }
        }        
        return $res = array('code'=>1,'msg'=>'文件添加成功','file'=>$file);
    }


    public function getArticle($id){
        $sql = 'SELECT * FROM '.db_pre.'article WHERE a_id = "'.$id.'"; ';
        $res = $this->db->getone($sql);
        if(!$res){
            header('Location: /admin/');
        }
        $res['image'] = $this->getImages($id);
        $res['file'] = $this->getFiles($id);
        return $res;
    }

    public function getImages($id){
        $sql = 'SELECT * FROM '.db_pre.'image ';
        if($id){
            $sql .= 'WHERE i_article = '.$id.' ';
        }
        $sql .= 'ORDER BY i_id DESC ;';
        $res = $this->db->getall($sql);

        return $res;
    }

    public function getFiles($id){
        $sql = 'SELECT * FROM '.db_pre.'file ';
        if($id){
            $sql .= 'WHERE f_article = '.$id.' ';
        }
        $sql .= 'ORDER BY f_id DESC ;';

        $res = $this->db->getall($sql);

        return $res;
    }
    function getArticleParam($type,$category,$status,$keyword){
        $param = '';
        if($type){
            $sql = 'SELECT cg_id FROM '.db_pre.'category WHERE cg_type = "'.$type.'" ';
            $res = $this->db->getall($sql);
            $cg = array();
            foreach($res as $k=>$v){
                array_push($cg, $v['cg_id']);
            }
            $cg = implode(',',$cg);
            $param .= 'AND a_category IN ('.$cg.') ';
        }

        if($category){
            $param .= 'AND a_category = "'.$category.'" ';
        }
        if($status){
            $param .= 'AND a_status = "'.$status.'" ';
        }else{
            $param .= 'AND a_status <> "trash" ';
        }
        if($keyword){
            $param .= 'AND a_title LIKE "%'.$keyword.'%" ';
        }

        $param = 'WHERE '.substr($param, 3).' ORDER BY a_creatTime DESC';

        return $param;

    }

    public function getAuthorName($article){
        $sql = 'SELECT user_name FROM '.db_pre.'user WHERE user_id = "'.$article['a_author'].'" ';
        $res = $this->db->getone($sql);
        $article['author_name'] = $res['user_name'];

        $sql = 'SELECT cg_name,cg_type FROM '.db_pre.'category WHERE cg_id = "'.$article['a_category'].'" ';
        $res = $this->db->getone($sql);
        $article['category_name'] = $res['cg_name'];
        $article['type'] = $res['cg_type']?$res['cg_type']:'article';
        $status = $this->getArticleStatus();
        $article['status'] = $status[$article['a_status']];
        return $article;
    }

    public function getArticles($page,$type,$category,$status,$keyword){
        $sql = 'SELECT * FROM '.db_pre.'article '.$this->getArticleParam($type,$category,$status,$keyword);
        if(!$page){
            $page = 1;
        }
        if($page){
            $sql .= ' LIMIT '.(($page-1)*20).',20 ;';
        }
        $res = $this->db->getall($sql);
        foreach ($res as $key => $value) {
            $res[$key] = $this->getAuthorName($value);
        }
        return $res;
    }

    public function getArticlesCount($page,$type,$category,$status,$keyword){
        $sql = 'SELECT count(*) as nums FROM '.db_pre.'article '.$this->getArticleParam($type,$category,$status,$keyword);
        $res = $this->db->getone($sql);
        $totalNum = $res['nums']?$res['nums']:0;
        $totalPage = ceil($totalNum/20);
        return array('count'=>$totalNum,'page'=>$totalPage);
    }

    public function delArticle($id){
        $sql = 'SELECT a_status FROM '.db_pre.'article WHERE a_id = '.$id.' ';
        $res = $this->db->getone($sql);
        if($res['a_status'] == 'trash'){
            $delSql = 'DELETE FROM '.db_pre.'article WHERE a_id = '.$id.'; ';
            $this->db->query($delSql);
            return $res = array('code'=>1,'msg'=>'文章已被彻底删除');
        }elseif (!$res['a_status']) {
            header('Location: /admin/?act=contentList');
        }else{
            $updateArr = array('a_status'=>'trash');
            $this->db->update(db_pre.'article',$updateArr,'a_id='.$id);
            return $res = array('code'=>1,'msg'=>'文章已被移入回收站');
        }
    }
}

?>