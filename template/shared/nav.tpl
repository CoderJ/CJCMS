  <div class="nav clearfix">
    <ul><li><a href="/">首页</a>
      {foreach from=$nav key=k item=v}
      {if $nav[$k].level_s == '0'}
        </li><li><a href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
      {elseif $nav[$k].level_s == '+'}
        <ul><li><a href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
      {elseif $nav[$k].level_s == '-'}
        </li></ul><li><a href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
      {/if}
      {/foreach}
    </li></ul>
  </div>
