<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "contact");

// scripts
$this->prepend("scripts");
echo $this->html->script("/js/contact.min.js");
$this->end();
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<h1>Contact</h1>
</div>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<div class="column">
	<div class="center"><strong>HalprinLaw</strong></div>
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
	<p><b>NOTE:</b> An Asterisk (*) Indicates REQUIRED Information.</p>
	<form id="contact-form" method="post" action="<?php echo Backbone::$request->link("/thank-you-contact/"); ?>">
		<table class="comfortable" border="0" cellpadding="0" cellspacing="5">
			<tr>
				<td align="right" valign="top"><label>Your Name*:</label></td>
				<td><input id="contact-form-name" type="text" name="name" size="35" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>Home Address:</label></td>
				<td><input type="text" name="home" size="35" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>City:</label></td>
				<td><input type="text" name="city" size="35" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>State:</label></td>
				<td><input type="text" name="state" size="5" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>Zip:</label></td>
				<td><input type="text" name="zip" size="10" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>Phone:</label></td>
				<td><input type="text" name="phone" size="15" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>Fax:</label></td>
				<td><input type="text" name="fax" size="15" /></td>
			</tr>
			<tr>
				<td align="right" valign="top"><label>Your E-mail*:</label></td>
				<td><input id="contact-form-email" type="text" name="email" size="35" /></td>
			</tr>
			<tr>
				<td align="left" valign="top" colspan="2"><label><strong>Brief description of your legal issue*:</strong></label></td>
			</tr>
			<tr>
				<td colspan="2"><textarea id="contact-form-message" name="message" rows="12" cols="50"></textarea></td>
			</tr>
			<tr>
				<td align="right" colspan="2">
					<p id="contact-form-error" class="bold red" style="display:none"></p>
					<input type="image" src="<?php echo Backbone::$request->link("/images/submit.png"); ?>" alt="Submit" onmouseover="this.src='<?php echo Backbone::$request->link("/images/submit-hover.png"); ?>'" onmouseout="this.src='<?php echo Backbone::$request->link("/images/submit.png"); ?>'" />
				</td>
			</tr>
		</table>
	</form>
</div>
<?php $this->end(); ?>