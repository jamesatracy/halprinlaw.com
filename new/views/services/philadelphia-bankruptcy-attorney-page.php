<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "Philadelphia Bankruptcy Attorney");
$this->set("active", "services");

// css
$this->prepend("css");
$this->end();
?>

<?php $this->define("content"); ?>
	<p>For over 30 years, HalprinLaw has been <strong>fighting to protect the rights of individuals and families</strong> in Southeastern Pennsylvania. HalprinLaw bankruptcy and debt relief attorneys take the time to really listen and understand your legal issues before we advise on an appropriate course of action.</p>
	<h3><a href="<?php echo Backbone::$request->link("/services/chapter-7-bankruptcy/"); ?>">Bankruptcy (Chapter 7)</a></h3>
	<p class="service-box">Deciding to declare bankruptcy can be a complex and difficult decision-making process. HalprinLaw attorneys are dedicated to providing quality and cost effective legal guidance.<br/><br/><a class="btn btn-default" href="<?php echo Backbone::$request->link("/services/chapter-7-bankruptcy/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h3><a href="<?php echo Backbone::$request->link("/services/chapter-13-bankruptcy/"); ?>">Bankruptcy (Chapter 13)</a></h3>
	<p class="service-box">With a combined 36+ years of experience in Chapter 13 bankruptcy petition fillings, HalprinLaw attorneys have an unmatched understanding of the nuances and requirements for effectively helping our clients re-structure their debt and financial obligations.<br/><br/><a class="btn btn-default" href="<?php echo Backbone::$request->link("/services/chapter-13-bankruptcy/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<p><?php echo $this->html->link("/testimonials/", "Read what our clients have to say..."); ?></p>
	<br/>
<?php $this->end(); ?>