<?php
  if($c = $basic->get("c","num")){
    $page = $basic->get("page",'num')?$basic->get("page",'num'):1;
    $categoryInfo = $content->getCategoryInfo($c);
    if($categoryInfo['cg_type'] != 'article'){
      header('Location: '.path_pre.'/');
    }
    switch ($categoryInfo['cg_show']) {
      case '0':
        $children = $content->getCategory('public',$c,0,'page');
        if($children[0]['cg_id']){
          header('Location: '.path_pre.'/?act=page&c='.$children[0]['cg_id']);
        }else{
          $articles = $content->getArticles($page,'article',$c,'published');
          $count = $content->getArticlesCount($page,'article',$c,'published');
        }
        break;
      case '2':
        $articles = $content->getArticles($page,'article',$c,'published','',true);
        $count = $content->getArticlesCount($page,'article',$c,'published','',true);
        break;
      case '1':
      default:
        $articles = $content->getArticles($page,'article',$c,'published','',false);
        $count = $content->getArticlesCount($page,'article',$c,'published','',false);
        break;
    }    
    $web_action = $categoryInfo['cg_name'];


    $smarty->assign('pagenav',array('count'=>$count['count'],page=>$count['page'],nowpage=>$page,basehref=>'/?act=article&c='.$c.'&page='));
    $smarty->assign('articles',$articles);
    $smarty->assign('categoryInfo',$categoryInfo);
  }elseif ($id = $basic->get("id","num")) {
    $article = $content->getArticle($id);
    if(!$article){
      header('Location: '.path_pre.'/');
    }
    $categoryInfo = $content->getCategoryInfo($article['a_category']);
    if($categoryInfo['cg_type'] != 'article'){
      header('Location: '.path_pre.'/');
    } 
    $res = $content->getAuthorName($article);
    $smarty->assign('categoryInfo',$categoryInfo);
    $web_action = $res['a_title'];
    $smarty->assign('article',$res);
  }else{
    header('Location: '.path_pre.'/');
  }
?>