<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "404 Not Found");
$this->set("active", "");

// css
$this->prepend("css");
$this->end();
?>

<?php $this->define("content"); ?>
	<p>Sorry, but the page located at <?php echo Backbone::$request->here(); ?> could not be found.</p>
	<p>Instead, how about checking out all of <a href="<?php $this->url("/services/"); ?>">HalprinLaw's services</a>?</p>
<?php $this->end(); ?>