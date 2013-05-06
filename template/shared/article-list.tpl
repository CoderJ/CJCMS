<ul class="article-list">
{foreach from=$articles key=k item=v}
  <li><a href="/?act=article&id={$v.a_id}">{$v.a_title}</a><span class="date">{$v.a_date}</span></li>
{/foreach}
</ul>
<div class='page-nav'>
{include file='shared/pagenav.tpl'}
</div><!-- / -->
