<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "Contact");
$this->set("active", "contact");

// css
$this->prepend("css");
echo $this->html->stylesheet("/css/contact.css");
$this->end();

// scripts
$this->prepend("scripts");
echo $this->html->script("/js/contact.js");
$this->end();
?>

<?php $this->define("content"); ?>
	<p align="center"><strong>HalprinLaw</strong></p>
	<p align="center">1806 South Broad Street<br>
	Philadelphia, Pennsylvania 19145<br>
	Phone: 215-389-6913<br>
	Fax: 215-389-3373</p>
	<p align="center">[ <a href="https://maps.google.com/maps?q=1806+South+Broad+Street+Philadelphia,+Pennsylvania+19145&oe=utf-8&client=firefox-a&channel=rcs&hnear=1806+S+Broad+St,+Philadelphia,+Pennsylvania+19145&gl=us&t=h&z=16&iwloc=A" target="_blank">Map</a> ]</p>
	<p align="center">[ <a href="mailto:halprin@halprinlaw.com">Email</a> ]</p>
	<p>You may submit inquiries about HalprinLaw and its bankruptcy, personal injury or medical malpractice services 
	through this website though completion of this form.  Submission of an inquiry does not establish an attorneyclient or other relationship. You should not submit information of a confidential nature to HalprinLaw through this 
	means of communication.</p>
	<p>Unless you are a HalprinLaw client and have established a privileged relationship with the Firm, any submitted question/comment is not privileged and may be disclosed to other persons.  By completing this form and submitting your inquiry by clicking the "Submit" button below, you indicate your agreement to these terms.</p>

	<form id="contact-form" class="form-horizontal" method="post" action="<?php $this->url("/thank-you-contact/"); ?>" role="form">
		<div class="form-group">
			<label for="contact-form-name" class="col-lg-2">Your Name *:</label>
			<div class="col-lg-10">
				<input id="contact-form-name" type="text" name="name" size="35" class="form-control" placeholder="Required" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-home" class="col-lg-2">Address:</label>
			<div class="col-lg-10">
				<input id="contact-form-home" type="text" name="home" size="35" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-city" class="col-lg-2">City:</label>
			<div class="col-lg-10">
				<input id="contact-form-city" type="text" name="city" size="35" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-state" class="col-lg-2">State:</label>
			<div class="col-lg-10">
				<input id="contact-form-state" type="text" name="state" size="5" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-zip" class="col-lg-2">Zip:</label>
			<div class="col-lg-10">
				<input id="contact-form-zip" type="text" name="zip" size="10" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-phone" class="col-lg-2">Phone:</label>
			<div class="col-lg-10">
				<input id="contact-form-phone" type="text" name="phone" size="15" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-fax" class="col-lg-2">Fax:</label>
			<div class="col-lg-10">
				<input id="contact-form-fax" type="text" name="fax" size="15" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="contact-form-email" class="col-lg-2">Your E-mail *:</label>
			<div class="col-lg-10">
				<input id="contact-form-email" type="text" name="email" size="35" class="form-control" placeholder="Required" />
			</div>
		</div>
		<p>
			<label for="contact-form-message">Brief description of your legal issue *:</label>
			<textarea id="contact-form-message" name="message" rows="12" cols="50" class="form-control" placeholder="Required"></textarea>
		</p>
		<p id="contact-form-error" class="alert alert-danger" style="display:none"></p>
		<div class="form-group">
			<div class="col-lg-10">
				<input type="submit" class="btn btn-default" name="submit" value="Submit" />
			</div>
		</div>
	</form>
<?php $this->end(); ?>