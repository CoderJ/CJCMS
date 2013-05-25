<?php
  $indexConfig = $content->getIndexConfig();
  foreach ($indexConfig as $key => $value) {
    $categoryInfo = $content->getCategoryInfo($value['ic_category']);
    $indexConfig[$key]['categoryInfo'] = $categoryInfo;
    switch ($categoryInfo['cg_type']) {
      case 'page':
        switch ($categoryInfo['cg_show']) {
          case '0':
            $children = $content->getCategory('public',$categoryInfo['cg_id'],0,$categoryInfo['cg_type']);
            $page = $content->getPage($categoryInfo['cg_id']);
            $page['children'] = array();
            foreach ($children as $sk => $sv) {
              array_push($page['children'], $content->getPage($sv['cg_id']));
            }
            break;
          case '1':
          default:
            $page = $content->getPage($categoryInfo['cg_id']);
            break;
        }    
        $indexConfig[$key]['page'] = $page;
        $cover = $content->getImages($page['a_id']);
        $indexConfig[$key]['page']['img'] = $cover[0]['i_url'];
        break;
      default:
        switch ($categoryInfo['cg_show']){
          case '0':
            $children = $content->getCategory('public',$categoryInfo['cg_id'],0,$categoryInfo['cg_type']);
            if($children[0]['cg_id']){
            }else{
              $articles = $content->getArticles(1,$categoryInfo['cg_type'],$categoryInfo['cg_id'],'published');
            }
            break;
          case '2':
            $articles = $content->getArticles(1,$categoryInfo['cg_type'],$categoryInfo['cg_id'],'published','',true);
            break;
          case '1':
          default:
            $articles = $content->getArticles(1,$categoryInfo['cg_type'],$categoryInfo['cg_id'],'published','',false);
            break;
        }
        $indexConfig[$key]['articles'] = $articles;
        break;
    }
  }
  $smarty->assign('index',$indexConfig);
?>