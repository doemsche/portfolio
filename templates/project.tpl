{include file="header.tpl" title=foo}
	{assign var="id" value= $smarty.server.QUERY_STRING}

	{foreach from=$projects item=project}
		{if $id == $project.id}
			{include file="project_detail.tpl" project = $project}
		{/if}
	{/foreach}
	
{include file="footer.tpl" title=foo}


