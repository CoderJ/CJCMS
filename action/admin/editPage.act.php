<?php
  $web_action = '自定义模版';
  $basedir = ROOT_PATH.'template';
  if($_POST && $file = $basic->get("file","word")){
      $smarty->assign('file',$file);
      $fullPath = $basedir.$file;
      $fileContent = $_POST['content'];
      $f=fopen($fullPath, "wb"); 
      fputs($f, $fileContent); 
      fclose($f); 
      $smarty->assign('fileContent',$fileContent);
      $smarty->assign('msg',array('msg'=>'文件修改成功！','type'=>'tips'));
  }else{
    if($file = $basic->get("file","word")){
      $smarty->assign('file',$file);
      $fullPath = $basedir.$file;
      $handle = fopen($fullPath, "r");
      $fileContent = fread($handle, filesize($fullPath));
      fclose($handle);       
      $smarty->assign('fileContent',$fileContent);
    }
  }
  $allFiles = array();
  $allFiles = checkdir($basedir,$allFiles);  
  function checkdir($basedir,$allFiles){ 
    if ($dh = opendir($basedir)) {  
      while (($file = readdir($dh)) !== false) {
       if ($file != '.' && $file != '..'){ 
        if (!is_dir($basedir."/".$file)){
          $allowedFile = array('html','js','css','tpl');
          $file_name = $basedir."/".$file;
          $temp_arr = explode(".", $file_name);
          $file_ext = array_pop($temp_arr);
          $file_ext = trim($file_ext);
          $file_ext = strtolower($file_ext);          
          if(in_array($file_ext, $allowedFile)){
            array_push($allFiles,str_replace(ROOT_PATH.'template', '', $basedir."/".$file));
          }
        }else{  
         $dirname = $basedir."/".$file;
         if($file != 'admin'){
          $allFiles = checkdir($dirname,$allFiles);  
         } 
        }  
       }  
      }  
    closedir($dh);  
    }
    return $allFiles;  
  } 
  $smarty->assign('allFiles',$allFiles);
?>