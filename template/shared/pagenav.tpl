<!--$pagenav(count,page,nowpage,param,basehref) -->
            <span class="count">共{$pagenav.count}条。</span>
            {if $pagenav.page<=1}
            {elseif $pagenav.page<=5 && $pagenav.page>1}
              {section name=loop loop=$pagenav.page} 
              <a href="{$ROOT_PATH}{$pagenav.basehref}{$smarty.section.loop.index+1}" class="{if $smarty.section.loop.index+1 == $pagenav.nowpage}on{/if}">{$smarty.section.loop.index+1}</a>
              {/section}
            {else} 
              {if $page <=3}
                {section name=loop loop=5} 
                <a href="{$ROOT_PATH}{$pagenav.basehref}{$smarty.section.loop.index+1}" class="{if $smarty.section.loop.index+1 == $pagenav.nowpage}on{/if}">{$smarty.section.loop.index+1}</a>
                {/section}
                ...
                <a href="{$ROOT_PATH}{$pagenav.basehref}{$pagenav.page}">{$pagenav.page}</a>
              {elseif $pagenav.page-$page<=3}
                <a href="{$pagenav.basehref}1">1</a>
                ...
                {section name=loop loop=5} 
                <a href="{$ROOT_PATH}{$pagenav.basehref}{$pagenav.page-5+$smarty.section.loop.index+1}" class="{if $pagenav.page-5+$smarty.section.loop.index+1 == $pagenav.nowpage}on{/if}">{$pagenav.page-5+$smarty.section.loop.index+1}</a>
                {/section}
              {else}
                <a href="{$ROOT_PATH}{$pagenav.basehref}1" >1</a>
                ...
                {section name=loop loop=5} 
                <a href="{$ROOT_PATH}{$pagenav.basehref}{$pagenav.nowpage+$smarty.section.loop.index-2}" class="{if $pagenav.nowpage+$smarty.section.loop.index-2 == $pagenav.nowpage}on{/if}">{$pagenav.nowpage+$smarty.section.loop.index-2}</a>
                {/section}
                ...
                <a href="{$ROOT_PATH}{$pagenav.basehref}{$pagenav.page}" >{$pagenav.page}</a>
              {/if}

            {/if}