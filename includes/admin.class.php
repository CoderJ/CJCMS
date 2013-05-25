<?php

/**
 * @author Coder J
 * @copyright 2011
 */

class admin{
    public $db = "";
    public $uid = "";
    public function admin($db){
        $this->db = $db;
        $this->uid = $_SESSION['user']['user_id'];
    }
    function formatMenu($sql){
        $res = $this->db->getall($sql);
        foreach($res as $k=>$v){
            if($v['md_parent'] != 0){
                foreach ($res as $key => $value) {
                    if($value['md_id'] == $v['md_parent']){
                        $parent = $key;
                    }
                }
                if(!$res[$parent]['children']){
                    $res[$parent]['children'] = array();
                }
                array_push($res[$parent]['children'],$v);
                unset($res[$k]);
            }
        } 
        return $res;           
    }
    function getUser($id){
        if(is_numeric($id)){
            $getUserInfoSql = 'SELECT * FROM '.db_pre.'user WHERE user_id = "'.$id.'" ;';
        }else{
            $getUserInfoSql = 'SELECT * FROM '.db_pre.'user WHERE user_id = "'.$this->uid.'" ;';
        }
        return $this->db->getone($getUserInfoSql);        
    }
    public function checkRights($act){
        $sql = 'SELECT count(*) AS num FROM '.db_pre.'module WHERE md_key = "'.$act.'";';
        $module = $this->db->getone($sql);
        $module = $module['num'];
        if($module<1){
            return false;
        }

        $userInfo = $this->getUser();
        if($userInfo['user_group'] == 0){
        }else{
            $sql = 'SELECT count(*) AS num FROM '.db_pre.'module_user AS mu JOIN '.db_pre.'module AS md WHERE md.md_id = mu.mu_module AND mu.mu_user = "'.$this->uid.'" AND md.md_key = "'.$act.'" ';
            $userRights = $this->db->getone($sql);
            $userRights = $userRights['num'];
            if($userRights<1){
                header("Location: ".path_pre."/admin/?act=index");
            }
        }        
    }
    public function getMenu(){

        $userInfo = $this->getUser();
        if($userInfo['user_group'] == 0){
            $sql = 'SELECT * FROM '.db_pre.'module ORDER BY md_order ASC ;';
        }else{
            $sql = 'SELECT * FROM '.db_pre.'module AS md JOIN '.db_pre.'module_user AS mu WHERE md.md_id = mu.mu_module AND mu.mu_user = "'.$this->uid.'" ORDER BY md.md_order ASC ;';
        }
        return $this->formatMenu($sql);

    }
    public function getAllMenu(){
        $sql = 'SELECT * FROM '.db_pre.'module ORDER BY md_order ASC ;';
        return $this->formatMenu($sql);
    }

    public function getUserGroup($user){
        $userGroup = array();
        $userGroup[0] = '超级管理员';
        $userGroup[1] = '系统管理员';
        $userGroup[2] = '内容管理员';
        $userGroup[3] = '编辑';

        $user = $user?$user:($_SESSION['user']['user_group']?$_SESSION['user']['user_group']:0);

        if($_GET['id'] == $this->uid){
            $user = $user-1;
        }

        return array_slice($userGroup,$user+1,10,true);
    }

    public function getUserInfo($id){
        $user = $this->getUser($id);
        $sql = "SELECT mu_module FROM ".db_pre."module_user WHERE mu_user = '".$id."' ; ";
        $res = $this->db->getall($sql);
        $userInfo = Array('username' => $user['user_name'],'usergroup' => $user['user_group'], 'userrights' => Array());
        foreach ($res as $key => $value) {
            array_push($userInfo['userrights'], $value['mu_module']);
        }
        return $userInfo;
    }
    public function addUser($user){
        if($user['username'] && $user['userpwd'] && $user['usergroup']){
            $checkUserNameSql = "SELECT count(*) as nums FROM ".db_pre."user WHERE user_name = '".$user['username']."' ";
            $checkUserName = $this->db->getone($checkUserNameSql);
            if($checkUserName['nums']>0){
                    return $res = array('code'=>0,'msg'=>'用户名已经存在','user'=>$user);
            }
            if(array_sum($user['userrights'])>0){
                $user_info = array('user_name'=>$user['username'],'user_pwd'=>$user['userpwd'],'user_reg_time'=>date("Y-m-d H:i:s",time()),'user_reg_ip'=>$user['ip'],'user_group'=>$user['usergroup']);
                $this->db->insert(db_pre."user",$user_info);
                $insert_id = $this->db->insert_id();

                foreach ($user['userrights'] as $key => $value) {
                    $sql .= "INSERT INTO ".db_pre."module_user (mu_module,mu_user) VALUES('".$value."','".$insert_id."');";
                }
                $this->db->query($sql);
                $ins_id = $this->db->insert_id();

                if($ins_id>0){
                    return $res = array('code'=>1,'msg'=>'用户'.$user['username'].'添加成功');
                }else{
                    return $res = array('code'=>0,'msg'=>'数据库操作失败'.$sql,'user'=>$user);
                }

            }else{
                return $res = array('code'=>0,'msg'=>'请为该帐号分配至少一个权限','user'=>$user);
            }
        }else{
            return $res = array('code'=>0,'msg'=>'请检查用户名/密码/用户组正确输入','user'=>$user);
        }
    }    
    public function updateUser($user,$id){
        if(!is_numeric($id)){
            return $res = array('code'=>0,'msg'=>'ID传入不正确','user'=>$user);
        }
        if($user['username'] && $user['usergroup'] >= 0){
            if(array_sum($user['userrights'])>0 || $user['usergroup'] == 0){
                $updateArr = array('user_name'=>$user['username'],'user_group'=>$user['usergroup']);
                if($user['userpwd']){
                    $updateArr['user_pwd'] = $user['userpwd'];
                }
                $this->db->update(db_pre.'user',$updateArr,'user_id = "'.$id.'"');
                $clearOlderRights = "DELETE FROM ".db_pre."module_user WHERE mu_user = '".$id."' ";
                $this->db->query($clearOlderRights);
                foreach ($user['userrights'] as $key => $value) {
                    $sql = "INSERT INTO ".db_pre."module_user (mu_module,mu_user) VALUES('".$value."','".$id."'); ";
                    $this->db->query($sql);
                    $ins_id = $this->db->insert_id();                
                }
                if($ins_id>0 || $user['usergroup'] == 0){
                    return $res = array('code'=>1,'msg'=>'用户'.$user['username'].'修改成功','user'=>$user);
                }else{
                    return $res = array('code'=>0,'msg'=>'数据库操作失败'.$ins_id,'user'=>$user);
                }

            }else{
                return $res = array('code'=>0,'msg'=>'请为该帐号分配至少一个权限','user'=>$user);
            }
        }else{
            return $res = array('code'=>0,'msg'=>'请检查用户名/用户组正确输入'.$user['usergroup'],'user'=>$user);
        }
    }
    public function delUser($id){
        $userInfoSql = 'SELECT user_group FROM '.db_pre.'user WHERE user_id = "'.$id.'";';
        $userInfo = $this->db->getone($userInfoSql);
        $userGroup = $userInfo['user_group'];
        if(!$userGroup){
            header('Location: '.path_pre.'/admin/?act=userList');
        }

        if($userGroup > $_SESSION['user']['user_group']){
            $delUserSql = 'DELETE FROM '.db_pre.'user WHERE user_id = "'.$id.'";';
            $delUser = $this->db->query($delUserSql);

            return $res = array('code'=>1,'msg'=>'删除用户成功');
        }else{
            return $res = array('code'=>0,'msg'=>'权限不足，删除用户失败');
        }
    }
    public function getUserList($search){
        $userListSql = "SELECT * FROM ".db_pre."user WHERE (user_group > ".$_SESSION['user']['user_group']." or user_id='".$this->uid."') ";
        if($search['username']){
            $userListSql .= "AND user_name LIKE '%".$search['username']."%' ";
        }
        if($search['usergroup']){
            $userListSql .= "AND user_group = '".$search['usergroup']."' ";
        }
        $userList = $this->db->getall($userListSql);
        foreach($userList as $k=>$v){
            $userList[$k]['user_group'] = array_slice($this->getUserGroup($v['user_group']-1),0);
            $userList[$k]['user_group'] = array($v['user_group'],$userList[$k]['user_group'][0]);
        }

        return $userList;
    }
    public function updateModule($module){
        foreach ($module['id'] as $key => $value) {
            $updateArr = array('md_key'=>$module['key'][$key],'md_name'=>$module['name'][$key],'md_order'=>$module['order'][$key]);
            $this->db->update(db_pre.'module',$updateArr,'md_id = "'.$value.'" ');
        }
        return $res = array('code'=>1,'msg'=>'模块更新成功');
    }
    public function addModule($module){
        $sql = 'SELECT count(*) AS num FROM '.db_pre.'module WHERE md_key = "'.$module['key'].'" ';
        $isExist = $this->db->getone($sql);
        $isExist = $isExist['num'];
        $insertArr = array('md_key'=>$module['key'],'md_name'=>$module['name'],'md_order'=>'0','md_parent'=>$module['parent']);
        if($isExist>0){
            return $res = array('code'=>0,'msg'=>'模块已经存在，添加失败','module'=>$insertArr);
        }
        $this->db->insert(db_pre.'module',$insertArr);
        $insert_id = $this->db->insert_id();
        if($insert_id>0){
            return $res = array('code'=>1,'msg'=>'模块添加成功');
        }else{
            return $res = array('code'=>0,'msg'=>'模块添加失败','module'=>$insertArr);
        }
    }
    public function delModule($id){
        $checkRightsSql = 'SELECT count(*) AS num FROM '.db_pre.'module_user WHERE mu_module="'.$id.'" AND mu_user = "'.$this->uid.'";';
        $checkRights = $this->db->getone($checkRightsSql);
        $checkRights = $checkRights['num'];


        if($checkRights > 0 || $_SESSION['user']['user_group']==0){
            $checkModuleSql = 'SELECT count(*) AS num FROM '.db_pre.'module WHERE md_id="'.$id.'";';
            $checkModule = $this->db->getone($checkModuleSql);
            $checkModule = $checkModule['num'];
            if($checkModule > 0){
                $delModuleSql = 'DELETE FROM '.db_pre.'module WHERE md_id = "'.$id.'";';
                $delModule = $this->db->query($delModuleSql);
                return $res = array('code'=>1,'msg'=>'删除模块成功');
            }else{
                header('Location: '.path_pre.'/admin/?act=moduleMag');
            }
            return $res = array('code'=>1,'msg'=>'删除模块成功');

        }else{
            return $res = array('code'=>0,'msg'=>'权限不足，删除模块失败');
        }
    }    
}
?>