<?php
  $web_action = "个性化首页";
  if($_POST){
    $res = $content->updateIndexConfig($_POST);
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }
  }

  $smarty->assign("indexConfig",$content->getIndexConfig());
  $smarty->assign("category",$content->addCategoryTypeAndName($content->getCategory('all',0)));

?>