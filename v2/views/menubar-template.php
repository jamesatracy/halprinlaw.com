<div id="menu">
	<div class="wrapper">
		<div id="menu-main-menu">
			<ul>
				<li><a class="<?php echo ($this->get("menu") == "home" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link(""); ?>">Home</a></li>
				<li><a class="<?php echo ($this->get("menu") == "overview" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/firm-overview/"); ?>">Overview</a></li>
				<li><a class="<?php echo ($this->get("menu") == "services" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/services/"); ?>">Services</a></li>
				<li><a class="<?php echo ($this->get("menu") == "team" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/team/"); ?>">Team</a></li>
				<li><a class="<?php echo ($this->get("menu") == "testimonials" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/testimonials/"); ?>">Testimonials</a></li>
				<li><a class="<?php echo ($this->get("menu") == "contact" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/contact/"); ?>">Contact</a></li>
			</ul>
			<span id="menu-contact"><?php echo $this->html->image("/images/phone.png"); ?>&nbsp;1-866-86-HALPRIN</span>
		</div>
	</div>
</div>