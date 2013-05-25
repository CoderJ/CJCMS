<ul class="index-list-3">
{foreach from=$v.articles key=key item=val}
  {if $key<10}
  <li><a href="?act=article&id={$val.a_id}" class="img"><img src="{$val.cover}" /></a><a href="/?act=article&id={$val.a_id}">{$val.a_title}</a>
  </li>
  {/if}
{/foreach}
</ul>
