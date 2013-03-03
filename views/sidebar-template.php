<?php $this->define("content"); ?>
<table width="100%">
	<tr>
		<td class="top left">
			<?php $this->render("content"); ?>
		</td>
		<td class="top left" width="325px">
			<h2>Connect With Us</h2>
			<p>
				<a href="http://www.facebook.com/pages/Halprin-Law/159269957437120"><?php echo $this->html->image("/images/facebook.png"); ?></a>
				<a href="http://www.linkedin.com/pub/michael-halprin/11/237/a04"><?php echo $this->html->image("/images/linkedin.png"); ?></a>
			</p>
			<p><strong>Email:</strong> <a href="mailto:halprin@halprinlaw.com">halprin@halprinlaw.com</a><br/>
			<strong>Phone:</strong> 215-389-6913<br/>
			<strong>Fax:</strong> 215-389-3373</p>
			<hr/>
			<h2>Is Bankruptcy the right choice?</h2>
			<p>Complete this quick and easy questionnaire to see if bankruptcy protection is the right choice for you.</p>
			<p><a href="<?php echo Backbone::$request->link("/do-you-qualify-for-bankruptcy/"); ?>">Get started now &gt;&gt;</a></p>
			<hr/>
			<h2>Have Questions?</h2>
			<p>Please take a moment to contact us today:</p>
			<form id="contact-sidebar" method="post" action="<?php echo Backbone::$request->link("/thank-you-contact/"); ?>">
				<p>
					<label>Name:</label><br/>
					<input type="text" id="contact-sidebar-name" name="name" style="width:100%" />
					<label>Email:</label><br/>
					<input type="text" id="contact-sidebar-email" name="email" style="width:100%" />
					<label>Phone:</label><br/>
					<input type="text" id="contact-sidebar-phone" name="phone" style="width:100%" />
					<label>Message:</label><br/>
					<textarea id="contact-sidebar-message" name="message" rows="10" style="width:100%"></textarea>
					<p id="contact-sidebar-error" class="red bold" style="display:none"></p>
					<div class="alignright">
						<input type="image" src="<?php echo Backbone::$request->link("/images/submit.png"); ?>" alt="Submit" onmouseover="this.src='<?php echo Backbone::$request->link("/images/submit-hover.png"); ?>'" onmouseout="this.src='<?php echo Backbone::$request->link("/images/submit.png"); ?>'" />
					</div>
				</p>
			</form>
			<div class="clear"></div>
		</td>
	</tr>
</table>
<?php $this->end(); ?>