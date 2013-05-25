  <div class="main-nav clearfix">
    <ul><li><a href="/">首页</a>
      {foreach from=$nav key=k item=v}
        {if $nav[$k].level_s == '0'}
          {if $v.cg_show_in_nav == 1 && $v.cg_nav == 0}
            </li><li><a href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>
          {/if}
        {elseif $nav[$k].level_s == '+'}
          <ul>
          {if $v.cg_show_in_nav == 1 && $v.cg_nav == 0}
            <li><a href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>      
          {/if}

        {elseif $nav[$k].level_s == '-'}
          {if $v.cg_show_in_nav == 1 && $v.cg_nav == 0}
            </li>      
          {/if}
        </ul>
          {if $v.cg_show_in_nav == 1 && $v.cg_nav == 0}
            <li><a href="/?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a>      
          {/if}

        {/if}
      {/foreach}
    </li></ul>
  </div>
