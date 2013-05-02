<?php

/**
 * @author Coder J
 * @copyright 2013
 */

define('IN_CJ', true);
require_once ("includes/include.php");

$act = $basic->get("act","word");
switch($act){
    case "login"://登录
        $web_action = "登录";
        $display = "login.html";
        if($_POST['username']){
            $username = $_POST['username'];
            $userpwd = $_POST['userpwd'];
            $login = $user->login($username,$userpwd);
        }
        break;
	case "logout":
		$user->logout();
    default://首页
		if(file_exists(ROOT_PATH."action/".$act.".act.php")){
			include_once(ROOT_PATH."action/".$act.".act.php");
			$display = $act.".html";
		}
        else{
			$web_action = "首页";
			require_once(ROOT_PATH."action/index.act.php");
			$display = "index.html";
		}
        break;
    }
$smarty->assign("web_action",$web_action);
$smarty->display($display);
?>