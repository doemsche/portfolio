<section class="wrap" role="main">
	<h1 id="sayit">
		{$project.subtitle}
	</h1>
</section> 
<!-- IMPORTANT TO ADD class single to section!! -->
<section class="wrap single" role="main">
	<article class="content">
		<div>
			<h3 id="project-detail-title">{$project.name}</h3>
			<p id="project-detail-description">
				{$project.description}
			</p>
		</div>
			<aside id="col-right">
				{foreach from=$project.pics item=pic }
  					<img src="{$image_path}{$project.name}/{$pic}.png"/><br/><br/>
				{/foreach}	
			</aside>
			<aside id="col-left">
				<div id="skills">
					<div id="skills-stuff">
						{foreach from=$project.tags item=tag}
							{if $tag != ""}
								<h3 class="tag" id="tag{$tag}" class="anim"><span>{$tag|@ucfirst}</span></h3>
							{/if}
						{/foreach}
                    </div>
				</div>

				<div id="date">
					<p id="the_date" class="object-single">
						<span>
							<strong>{$project.date}</strong> 
						</span>
					</p>
				</div>
				<div id="type">
					<p id="the_type" class="object-single"><span>{$project.author}</span></p>
				</div>
				<div id="cups">
					<p id="the_cups" class="object-single"><span>{$project.coffee}</span></p>
				</div>
				<div class="link-project">
					{foreach from=$project.media key=k item=medium}
						{if $k == "pdf" && $medium != ""}<a class="cta anim" target="_blank" href="_resources/media/{$project.media.pdf}">Documentation</a>{/if}
						{if $k == "movie" && $medium != ""}<a class="cta anim" target="_blank" href="{$project.media.movie}">Movie</a>{/if}
						{if $k == "swf" && $medium != ""}<a class="cta anim" target="_blank" href="_resources/media/{$project.media.swf}">SWF</a>{/if}
						{if $k == "www" && $medium != ""}<a class="cta anim" target="_blank" href="{$project.media.www}">Website</a>{/if}
					{/foreach}
				
				</div>
			</aside>
			
	</article>
</section>