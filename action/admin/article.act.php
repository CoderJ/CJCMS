<?php
  $web_action = '添加文章';
  if($_POST){
    $article = $_POST;
    if($id = $basic->get("id","num")){
      $web_action = '编辑文章';
      $res = $content->updateArticle($article,$id);
    }else{
      $res = $content->addArticle($article);
    }
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }
    if($res['article']){
      $smarty->assign('article',$res['article']);
    }
  }else{
    if($id = $basic->get("id","num")){
      $web_action = '编辑文章';
      $article = $content->getArticle($id);
      if(!$article){
        header('Location: '.path_pre.'/admin/');
      }
      $smarty->assign('article',$article);
    }
  }
  $smarty->assign('allCategory',$content->getAllCategory('all','article'));
?>