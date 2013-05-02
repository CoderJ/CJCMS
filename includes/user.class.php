<?php

/**
 * @author Coder J
 * @copyright 2012
 */

class user{
    public $db = "";
    public $basic = "";
    
    public function user($db,$basic){
        $this->db = $db;
        $this->basic = $basic;
    }
     
    function login($username,$userpwd,$type){
        if($username && $userpwd){
            $sql = "SELECT * FROM ".db_pre."user WHERE user_name = '".$username."';";
            $res = $this->db->getone($sql);
            if($this->pwd($userpwd) == $res['user_pwd']){
                $_SESSION['user'] = $res;
                $sql = "UPDATE ".db_pre."user SET user_last_login_time = '".date("Y-m-d H:i:s",time())."', user_last_login_ip = '".$this->basic->get_real_ip()."' WHERE user_id = ".$_SESSION['user']['user_id']." ;";                
                $this->db->query($sql);
                echo $type;
                if($type == 'admin'){
                    header('Location: /admin/');
                }else{
                    if(!$_SESSION['url']){
                        header('Location: /');
                    }else{
                        header('Location: '.$_SESSION['url']);
                    }
                }
                return $_SESSION['url'];
            }else{
                return "用户名或密码错误！".$this->pwd($userpwd);
            }
        }else{
            return "用户名和密码不能为空！";
            
        }
    }
    function reg($name,$pwd){
        $reg_info = array('user_name'=>$name,'user_pwd'=>$this->pwd($pwd),'user_last_login_time'=>date("Y-m-d H:i:s",time()),'user_group'=>'1');
        $this->db->insert(db_pre."user",$reg_info);
        $insert_id = $this->db->insert_id();
        if($insert_id){
                 $_SESSION['user']['user_id'] = $insert_id;                
                 $_SESSION['user']['user_name'] = $name;
                 header("Location: /");
        }else{
          return "0";  
        }
    }
	function logout(){
		$_SESSION['user'] = NULL;
        if($_SESSION['url']){
            header("Location: ".$_SESSION['url']);
        }else{
            header("Location: /");
        }
	} 
    public function pwd($pwd){
        $pwd = md5($pwd.pwd_str);
        $pwd = md5($pwd.pwd_str);
        return $pwd;
    }  
    function checkname($name){
        $sql = "SELECT count(user_id) AS num FROM ".db_pre."user WHERE user_name = '".$name."';";
        $res = $this->db->getone($sql);
        
        return !$res['num'];
        
    }
    function checkuser(){
        if($_SESSION['user'] != NULL){
            return true;
        }else{
            return false;
        }
    }
}

?>