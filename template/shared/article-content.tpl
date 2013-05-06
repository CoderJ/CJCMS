<div class='article-title'>{$article.a_title}</div>
<div class='article-info'>
  {if $article.a_author}作者：{$article.author_name}&emsp;{/if}
  {if $article.a_source}来源：{$article.a_source}&emsp;{/if}
  {if $article.a_date}时间：{$article.a_date}&emsp;{/if}
</div>
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

{$article.a_content}