<?php
  if($c = $basic->get("c","num")){
    $categoryInfo = $content->getCategoryInfo($c);
    if($categoryInfo['cg_type'] != 'page'){
      header('Location: /');
    }
    switch ($categoryInfo['cg_show']) {
      case '0':
        $children = $content->getCategory('public',$c,0,'page');
        if($children[0]['cg_id']){
          header('Location: /?act=page&c='.$children[0]['cg_id']);
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
    header('Location: /');
  }
?>