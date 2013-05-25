<div class='article-info'>
  {if $article.a_author}{$article.author_name}/{/if}
  {if $article.a_source}来自{$article.a_source}/{/if}
  {if $article.a_date}{$article.a_date}{/if}
</div>
<div class='article-title'>{$article.a_title}</div>
<div class="c"></div>
{if $article.image}
  <div class='article-slider slider'>
    <ul>
      {foreach from=$article.image key=k item=v}
        {if $v.i_show_as_slider}
        <li><img src='{$v.i_url}' /></li>
        {/if}
      {/foreach}
    </ul>
  </div>
{/if}
<div class="article-content">
  {$article.a_content}
</div>
{if $article.file}
  <div class="article-file-list">
    附件下载：
    <ul class="">
      {foreach from=$article.file key=k item=v}
        {if $v.f_show_as_list}
        <li><a href='{$v.f_url}'>{$v.f_name}</a></li>
        {/if}
      {/foreach}
    </ul>    
  </div>
{/if}
