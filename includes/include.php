<?php

/**
 * @author Coder J
 * @copyright 2013
 * 
 * 文件初始化
 * 
 */
if (!defined('IN_CJ'))
{

    die('网站异常！');

}
error_reporting(2000);
session_start();

if (__FILE__ == '')
{
    die('Fatal error code: 0');
}
define('ROOT_PATH', str_replace('includes/include.php', '', str_replace('\\', '/', __FILE__)));

include_once (ROOT_PATH.'includes/config.php');
include_once (ROOT_PATH.'includes/db.class.php');
include_once (ROOT_PATH.'includes/basic.class.php');
include_once (ROOT_PATH.'includes/user.class.php');
include_once (ROOT_PATH.'includes/admin.class.php');
include_once (ROOT_PATH.'includes/content.class.php');

$db=new db($db_host,$db_user,$db_pwd,$db_name);
$basic = new basic();
$user = new user($db,$basic);
$admin = new admin($db);
$content = new content($db,$basic);


require(ROOT_PATH . 'includes/smarty/Smarty.class.php');   //包含smarty类文件
$smarty                  = new Smarty();         //创建一个smarty对象的实例
$smarty->config_dir      = ROOT_PATH . 'includes/smarty/Config_File.class.php';  //目录变量
$smarty->caching         = false;   //关闭缓存,项目在测试的过程中，建议关闭
$smarty->template_dir    = ROOT_PATH . 'template/'.$template;   //设置模板目录
$smarty->compile_dir     = ROOT_PATH . 'temp/compiled/template';   //设置编译目录
$smarty->cache_dir       = ROOT_PATH . 'temp/caches/template';  //缓存文件夹
$smarty->cache_lifetime  = $cache_time;  //指定缓存生存时间,单位为秒
$smarty->left_delimiter = '{';
$smarty->right_delimiter = '}';
$smarty->assign("web_name",$web_name);
$smarty->assign("ROOT_PATH",$www_path);
$smarty->assign("template",'/template/'.$template);

if($user->checkuser()){
  $smarty->assign("user_name",$_SESSION['user']['user_name']);
  $smarty->assign("user_id",$_SESSION['user']['user_id']);
}
?>