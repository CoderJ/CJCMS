  <div class="second-nav clearfix">
    <ul>
      {foreach from=$nav key=k item=v}
          {if $v.cg_show_in_nav == 1 && $v.cg_nav == 1}
            <li><a href="?act={$v.cg_type}&c={$v.cg_id}">{$v.cg_name}</a> </li>     
          {/if}
      {/foreach}
    </ul>
  </div>
