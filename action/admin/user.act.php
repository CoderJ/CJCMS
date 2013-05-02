<?php
  $web_action = '添加用户';
  $smarty->assign("userGroup",$admin->getUserGroup());
  $smarty->assign("allMenu",$admin->getMenu());

  if($_POST){
    $userInfo = $_POST;
    $userInfo['ip'] = $basic->get_real_ip();
    if($userInfo['userpwd']){
      $userInfo['userpwd'] = $user->pwd($userInfo['userpwd']);
    }
    if($id = $basic->get("id","num")){
      $res = $admin->updateUser($userInfo,$id);
    }else{
      $res = $admin->addUser($userInfo);
    }
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }
    if($res['user']){
      unset($res['user']['userpwd']);
      $smarty->assign('userInfo',$res['user']);
    }
  }else{
    if($id = $basic->get("id","num")){
      $web_action = '编辑用户';
      $smarty->assign('userInfo',$admin->getUserInfo($id));
      $smarty->assign('editUser',true);
    }
  }
?>