<?php
  $web_action = '内容列表';
  if($basic->get('do','num')){
    $res = $content->delArticle($basic->get('do','num'));
    if($res['msg']){
      $smarty->assign('msg',array('msg'=>$res['msg'],'type'=>($res['code'] == 1?'tips':'warning')));
    }
  }
  if($_POST){
    $content->updateArticleStatus($_POST);
  }
  $page = $basic->get('p','num')?$basic->get('p','num'):1;
  $type = $basic->get('type','word')?$basic->get('type','word'):Null;
  $category = $basic->get('c','num')?$basic->get('c','num'):Null;
  $status = $basic->get('s','word')?$basic->get('s','word'):Null;
  $keyword = $basic->get('k','word')?$basic->get('k','word'):Null;

  switch($status){
    case 'locked':
      break;
    case 'published':
      break;
    case 'trash':
      $web_action = '回收站';
      break;
    case 'draft':
      $web_action = '草稿箱';
      break;
    default:
      $status = Null;
      break;
  }
  if($category){
    $categoryInfo = $content->getCategoryInfo($category);
    $category = $categoryInfo['cg_id'];
    $smarty->assign("category",$category);
  }
  if($type){
    $categoryType = $content->getCategoryType();
    if($categoryType[$type]){
      $smarty->assign("type",$type);
    }else{
      $type = Null;
    }
  }
  if($status){
      $smarty->assign("status",$status);
  }
  if($keyword){
      $smarty->assign("keyword",$keyword);
  }
  $smarty->assign('categoryType', $content->getCategoryType());
  $smarty->assign('articleStatus', $content->getArticleStatus());
  $smarty->assign('categorys', $content->getAllCategory());
  $smarty->assign('page', $page);
  $smarty->assign("articles",$content->getArticles($page,$type,$category,$status,$keyword));
  $count = $content->getArticlesCount($page,$type,$category,$status,$keyword);
  $smarty->assign('pagenav',array('count'=>$count['count'],page=>$count['page'],nowpage=>$page,basehref=>'/admin/?act=contentList&type='.$type.'&c='.$category.'&s='.$status.'&k='.$keyword.'&p='));
?>