<div class="right-right">
   
   {if (!$module.IsHideTitle)&&($module.Name)}
   <div class="right-t"><span>{$module.Name}</span></div>
   {else}
   <div style="display:none;"></div>
   {/if}
   <div class="right_c">

{if $module.Type=='div'}
<div>{$module.Content}</div>
{/if}

{if $module.Type=='ul'}
<ul>{$module.Content}</ul>
{/if}
</div>
</div>