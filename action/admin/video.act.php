<?php
  $web_action = '添加视频';
  if($_POST){
    $article = $_POST;
    if($id = $basic->get("id","num")){
      $web_action = '编辑视频';
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
      $web_action = '编辑视频';
      $smarty->assign('article',$content->getArticle($id));
    }
  }
  $smarty->assign('allCategory',$content->getAllCategory('all','video'));
?>