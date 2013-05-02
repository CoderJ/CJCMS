<?php
  $web_action = '添加类别';
  $smarty->assign('categoryType',$content->getCategoryType());
  if($_POST){
    $CategoryInfo = $_POST;

    if($id = $basic->get("id","num")){
      $res = $content->updateCategory($CategoryInfo,$id);
    }else{
      $res = $content->addCategory($CategoryInfo);
    }
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }
    if($res['category']){
      $smarty->assign('categoryInfo',$res['category']);
    }
  }else{
    if($id = $basic->get("id","num")){
      $web_action = '编辑类别';
      $smarty->assign('categoryInfo',$content->getCategoryInfo($id));
    }
  }
  $smarty->assign('allCategory',$content->getAllCategory());
?>