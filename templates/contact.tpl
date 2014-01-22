{include file="header.tpl" title=foo}
<div id="wrap1">
	<div id="main1">
		<section class="wrap" role="main" id="subheader">
			<h1 id="sayit">
				Hello World! Get in touch!
			</h1>
		</section> 

		<section role="main">
			<article class="content">
				<div id="contact-content">
					<form id="contact-form" action="" method ="post">
						<input type="text" class="anim" name="name" placeholder="your name" id="contact-name">
						<input type="email" class="anim" name="mail" placeholder="your e-mail" id="contact-mail">
						<textarea placeholder="your message" class="anim" name="text" cols="15" rows="8" id="contact-text"></textarea>
						<button name="submit" class="anim" id="sendmail">Send message!</button>
					</form>
				</div>

				<div id="response">

				</div>
			</article>
		</section>
	</div>
</div>


{include file="footer.tpl" title=foo}