<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "Contact");
$this->set("active", "");

// css
$this->prepend("css");
$this->end();
?>

<?php $this->define("content"); ?>
	<p class="center"><h2>Thank your for your inquiry! We will get back to you shortly.</h2></p>
	<br/>
	<p align="center"><?php echo $this->html->image("/images/post-it.jpg"); ?></p>
<?php $this->end(); ?>