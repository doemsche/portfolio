{include file="header.tpl" title=foo}
	{assign var="id" value= $smarty.server.QUERY_STRING}

	{foreach from=$projects item=project}
		{if $id == $project.id}
			{include file="project_detail.tpl" project = $projects[$project.id-1]}
		{/if}
	{/foreach}
	
{include file="footer.tpl" title=foo}


