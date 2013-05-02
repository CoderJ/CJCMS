<?php
        $web_action = "登录";
        $display = "login.html";
        if($_POST['username']){
            $username = $_POST['username'];
            $userpwd = $_POST['userpwd'];
            $login = $user->login($username,$userpwd,'admin');
        }
?>