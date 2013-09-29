<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "Welcome to a New Beginning!");
$this->set("active", "");

// css
$this->prepend("css");
$this->end();
?>

<?php $this->define("content"); ?>
	<div class="row">
		<div class="col-md-8">
			<p>Thank You! We will contact you shortly...or you may call us at the number listed on the right for a faster response.</p>
			<p>When you have loads of unpaid debt, financial woes, and possibly bill collector harassment, every day is the same old, bad news.</p>
			<p class="quote-box"><em>Instead, you could wake up every day and feel good knowing your financial worries are behind you</em>.</p>
			<p>The phone will no longer be an instrument of torture. And that mountain of bills that you keep avoiding will be a memory. This joyous picture isn't just a daydream. It's a very real possibility - with a little help, guidance and encouragement from the Philadelphia bankruptcy lawyers at the offices of HalprinLaw.</p>
			<p>Read our <a href="<?php echo Backbone::$request->link("/testimonials/"); ?>">Testimonials</a> from satisfied clients just like you!</p>
		</div>
		<div class="col-md-4" align="center">
			<?php echo $this->html->image("/images/staff.jpg", array("alt" => "HalprinLaw Staff", "style" => "margin: 5px")); ?>
		</div>
	</div>
<?php $this->end(); ?>