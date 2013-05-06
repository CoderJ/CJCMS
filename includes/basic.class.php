<?php

/**
 * @author Coder J
 * @copyright 2011
 */

class basic
{

	public function get($var, $type)
	{
		$error = 0;
		$var = (isset($_GET[$var]))?$_GET[$var]:Null;
		switch($type) {
			case 'num':
				if(empty($var) or !is_numeric($var) or ($var < 0)) {
					$error = 1;
				}
				break;
			case 'word':
				if(empty($var)) {
					$error = 1;
				}
				break;
		}
		if($error > 0) {
			return false;
		}
		else {
			return $var;
		}

	}

  public function get_real_ip(){
     $ip=false;
     if(!empty($_SERVER["HTTP_CLIENT_IP"]))
     {
          $ip = $_SERVER["HTTP_CLIENT_IP"];
     }
     if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
     {
          $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
          if ($ip)
          {
                   array_unshift($ips, $ip); $ip = FALSE;
          }
          for ($i = 0; $i < count($ips); $i++)
          {
                   if (!eregi ("^(10|172\.16|192\.168)\.", $ips[$i]))
                   {
                             $ip = $ips[$i];
                             break;
                   }
          }
     }
     return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
  }




}

?>