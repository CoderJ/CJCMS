<?php

/**
 * @author Coder J
 * @copyright 2013
 */

define('IN_CJ', true);
require_once ("../includes/include.php");
$act = $basic->get("act","word");
//check user is login?
if($act != 'login' && !$_SESSION['user']){
    header("Location: ".path_pre."/admin/?act=login");
}

//check rights
$admin->checkRights($act);
switch($act){
	case "logout":
		$user->logout();
    default://首页
		if(file_exists(ROOT_PATH."action/admin/".$act.".act.php")){
			include_once(ROOT_PATH."action/admin/".$act.".act.php");
			$display = $act.".html";
		}else{
			$web_action = "首页";
			require_once(ROOT_PATH."action/admin/index.act.php");
			$display = "index.html";
		}
        break;
    }
$smarty->assign("web_action",$web_action);
$smarty->assign("menu",$admin->getMenu());
$smarty->assign("action",$act);
$smarty->display("admin/".$display);
?>