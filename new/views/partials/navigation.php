<?php
$active = $this->get("active");
?>
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?php $this->url("/"); ?>">HalprinLaw</a>
	</div>
	<div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li class="<?php echo ($active == "home" ? "active" : ""); ?>"><a href="<?php $this->url("/"); ?>">Home</a></li>
		<li class="<?php echo ($active == "overview" ? "active" : ""); ?>"><a href="<?php $this->url("/firm-overview/"); ?>">Overview</a></li>
		<li class="<?php echo ($active == "services" ? "active" : ""); ?>"><a href="<?php $this->url("/services/"); ?>">Services</a></li>
		<li class="<?php echo ($active == "team" ? "active" : ""); ?>"><a href="<?php $this->url("/michael-halprin/"); ?>">Team</a></li>
		<li class="<?php echo ($active == "testimonials" ? "active" : ""); ?>"><a href="<?php $this->url("/testimonials/"); ?>">Testimonials</a></li>
		<li class="<?php echo ($active == "contact" ? "active" : ""); ?>"><a href="<?php $this->url("/contact/"); ?>">Contact</a></li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li class="active active-static"><a href="tel:+1866864257746"><strong>1-866-86-HALPRIN</strong></a></li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</div>