  <div class="side-nav clearfix">
    <ul><li>
      {foreach from=$nav key=k item=v}
      {if $nav[$k].level_s == '0'}
        </li><li {if $v.cg_id == $categoryInfo.cg_id}class="show"{/if}{if $v.cg_id == $categoryInfo.cg_parent}class="show"{/if}><a {if $v.cg_id == $categoryInfo.cg_id}class="active"{/if} href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
      {elseif $nav[$k].level_s == '+'}
        <ul><li {if $v.cg_id == $categoryInfo.cg_id}class="show"{/if}{if $v.cg_id == $categoryInfo.cg_parent}class="show"{/if}><a {if $v.cg_id == $categoryInfo.cg_id}class="active"{/if} href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
      {elseif $nav[$k].level_s == '-'}
        </li></ul><li {if $v.cg_id == $categoryInfo.cg_id}class="show"{/if}{if $v.cg_id == $categoryInfo.cg_parent}class="show"{/if}><a {if $v.cg_id == $categoryInfo.cg_id}class="active"{/if} href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
      {/if}
      {/foreach}
    </li></ul>
    <div class="c"></div>
  </div>
