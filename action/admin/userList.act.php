<?php
  $web_action = '用户列表';
  $smarty->assign("userGroup",$admin->getUserGroup());
  if($basic->get('do','num')){
    $res = $admin->delUser($basic->get('do','num'));
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }

  }
  if($_POST){
    $smarty->assign("userList",$admin->getUserList($_POST));
  }else{
    $smarty->assign("userList",$admin->getUserList());
  }
?>