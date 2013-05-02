<?php
  $web_action = "服务信息";
  $serverInfo = array(
    '系统类型及版本号：'  =>       php_uname(),
    '服务器CPU数量：'     =>       $_SERVER['PROCESSOR_IDENTIFIER'],
    '服务器系统目录：'    =>       $_SERVER['SystemRoot'],
    '用户域名：'          =>       $_SERVER['USERDOMAIN'],
    '服务器语言：'        =>       $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    '服务器解译引擎：'    =>       $_SERVER['SERVER_SOFTWARE'],
    '前进程用户名：'      =>       iconv("GB2312","UTF-8",  Get_Current_User()),
    'PHP版本：'           =>       PHP_VERSION,
    'PHP安装路径：'       =>       DEFAULT_INCLUDE_PATH,
    'PHP运行方式：'       =>       php_sapi_name(), 

    '当前文件绝对路径：'  =>       __FILE__,
    '服务器域名：'        =>       $_SERVER['HTTP_HOST'], 
    '服务器IP：'          =>       $_SERVER["SERVER_ADDR"],
    '服务器Web端口： '    =>       $_SERVER['SERVER_PORT'],
    '最大上传限制：'      =>       get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件",
    '最大执行时间：'      =>       get_cfg_var("max_execution_time")."秒 ",
    '脚本运行占用最大内存：'=>     get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无",
    'MYSQL支持：'         =>       (function_exists (mysql_close)?"是":"否"),
    'MYSQL数据库版本： '  =>       mysql_get_server_info(),
    'MySQL持续连接：'     =>       @get_cfg_var("mysql.allow_persistent")?"是 ":"否",
    'MySQL最大连接数：'   =>       @get_cfg_var("mysql.max_links")==-1 ? "不限" : @get_cfg_var("mysql.max_links"),
    '服务器系统时间：'    =>       date("Y-m-d G:i:s"),
    '客户端IP：'          =>       $_SERVER['REMOTE_ADDR'],

  );
  $smarty->assign('serverInfo',$serverInfo);   
?>