<?php
  $web_action = '类别列表';
  if($basic->get('do','num')){
    $res = $content->delCategory($basic->get('do','num'));
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }

  }
  if($_POST){
    $content->updateCategoryOrder($_POST);
  }
    $smarty->assign("category",$content->addCategoryTypeAndName($content->getCategory('all',0)));
?>