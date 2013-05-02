<?php
  $web_action = '类别管理';
  if($basic->get('do','num')){
    $res = $admin->delModule($basic->get('do','num'));
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }

  }
  $smarty->assign('category',$content->getCategory());
  if($_POST){
    if($_POST['type'] == 'update'){
      $res = $admin->updateModule($_POST);
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }elseif ($_POST['type'] == 'add') {
      $res = $admin->addModule($_POST);
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
      $smarty->assign('moduleInfo',$res['module']);
    }
  }
?>