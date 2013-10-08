<?php $this->define("content"); ?>
<hr/>
<div class="container">
	<h1 class="page-title"><?php echo $this->get("title"); ?></h1>
	<div class="row">
		<div class="col-md-8">
			<?php $this->render("content"); ?>
			<p class="scroll"><?php echo $this->html->image("/images/scrolls.png"); ?></p>
			<p>For more information on your unique situation, call us for a <strong>FREE CONSULTATION</strong> at 215-389-6913 or 1-866-86-HALPRIN or via email at <a href="mailto:halprin@HalprinLaw.com">halprin@HalprinLaw.com</a>.</p>
			<p><a href="<?php $this->url("/michael-halprin/"); ?>">HalprinLaw attorneys</a> value each and every client.</p>
			<hr class="page-bottom"/>
		</div>
		<div class="col-md-4">
			<h3 class="top">Connect With Us</h3>
			<p><strong>Email:</strong> <a href="mailto:halprin@halprinlaw.com">halprin@halprinlaw.com</a><br/>
			<strong>Phone:</strong> <a href="tel:12153896913">215-389-6913</a><br/>
			<strong>Fax:</strong> 215-389-3373</p>
			<p>
				<a href="http://www.facebook.com/pages/Halprin-Law/159269957437120"><?php echo $this->html->image("/images/facebook.png"); ?></a>
				<a href="http://www.linkedin.com/pub/michael-halprin/11/237/a04"><?php echo $this->html->image("/images/linkedin.png"); ?></a>
			</p>
			<hr/>
			<h3>Is Bankruptcy the right choice?</h3>
			<p>Complete this quick and easy questionnaire to see if bankruptcy protection is the right choice for you.</p>
			<p><a class="btn btn-default" href="<?php $this->url("/do-you-qualify-for-bankruptcy/"); ?>">Get started now &gt;&gt;</a></p>
			<hr/>
			<div id="sidebar-questions-form">
				<h3>Have Questions?</h3>
				<p>Please take a moment to contact us today:</p>
				<form id="contact-sidebar" method="post" action="<?php $this->url("/thank-you-contact/"); ?>" role="form">
					<p>
						<label>Name:</label><br/>
						<input type="text" id="contact-sidebar-name" name="name" class="form-control" placeholder="Enter your name" />
						<label>Email:</label><br/>
						<input type="text" id="contact-sidebar-email" name="email" class="form-control" placeholder="Enter your email" />
						<label>Phone:</label><br/>
						<input type="text" id="contact-sidebar-phone" name="phone" class="form-control" placeholder="Enter your phone number" />
						<label>Message:</label><br/>
						<textarea id="contact-sidebar-message" name="message" rows="10" class="form-control"></textarea>
						<p id="contact-sidebar-error" class="red bold" style="display:none"></p>
						<div class="alignright">
							<input type="submit" class="btn btn-default" value="Submit" />
						</div>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->end(); ?>