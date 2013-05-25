<ul class="index-list-1">
{foreach from=$v.articles key=key item=val}
  {if $key<10}
  <li><a href="?act=article&id={$val.a_id}">{$val.a_title}</a><span class="date">{$val.a_date}</span></li>
  {/if}
{/foreach}
</ul>