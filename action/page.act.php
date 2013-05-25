<?php
  if($c = $basic->get("c","num")){
    $categoryInfo = $content->getCategoryInfo($c);
    if($categoryInfo['cg_type'] != 'page'){
      header('Location: '.path_pre.'/');
    }
    switch ($categoryInfo['cg_show']) {
      case '2':
        $children = $content->getCategory('public',$c,0,'page');
        $page = array();
        foreach ($children as $key => $value) {
          array_push($page, $content->getPage($value['cg_id']));
        }
        break;
      case '0':
        $children = $content->getCategory('public',$c,0,'page');
        if($children[0]['cg_id']){
          header('Location: '.path_pre.'/?act=page&c='.$children[0]['cg_id']);
        }else{
          $page = $content->getPage($c);
        }
        break;
      case '1':
      default:
        $page = $content->getPage($c);
        break;
    }
    $web_action = $categoryInfo['cg_name'];
    $smarty->assign('page',$page);
    $smarty->assign('categoryInfo',$categoryInfo);
  }else{
    header('Location: '.path_pre.'/');
  }
?>