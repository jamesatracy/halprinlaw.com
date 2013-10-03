<footer>
	<div class="row container">
		<div class="col-xs-6 col-md-4">
			<p><strong>HalprinLaw</strong></p>
			<p>1806 South Broad Street<br/>
			Philadelphia, Pennsylvania 19145<br/>
			Phone: <a href="tel:+12153896913">215-389-6913</a><br/>
			Fax: 215-389-3373<br/>
			</p>
			<p>We are a debt relief agency and help people file for bankruptcy relief under the U.S. Bankruptcy Code.</p>
		</div>
		<div class="col-xs-6 col-md-4">
			<p>
				<a href="http://www.naca.net/about-consumer-advocates/" rel="nofollow" target="_blank"><img class="member-org-long" src="<?php $this->url("/images/naca.jpg"); ?>" alt="National Association of Consumer Advocates" title="National Association of Consumer Advocates" style="margin:6px;" /></a>&nbsp;
				<a href="http://www.philadelphiabar.org/page/HomePage?appNum=2" rel="nofollow" target="_blank"><img class="member-org-long" src="<?php $this->url("/images/pba.jpg"); ?>" alt="Philadelphia Bar Assocation" title="Philadelphia Bar Assocation" style="margin:6px;" /></a>
				<img class="member-org-long" src="<?php $this->url("/images/pabankruptcy.jpg"); ?>" alt="Eastern District of Pennsylvania Banktruptcy Conference" title="Eastern District of Pennsylvania Banktruptcy Conference" style="margin:6px;" /><br />
				
			</p>
		</div>
		<div class="col-xs-6 col-md-4">
			<p><a href="http://www.nacba.org/" rel="nofollow" target="_blank"><img class="member-org-long" src="<?php $this->url("/images/nacba.jpg"); ?>" alt="National Association of Consumer Bankruptcy Attorneys" title="National Association of Consumer Bankruptcy Attorneys" style="margin:6px;" /></a></p>
		</div>
	</div>
	
	<div class="row container">
		<div class="col-md-4"><p>Copyright <?php echo date("Y"); ?>. All Rights Reserved.</p></div>
		<div class="col-md-8">
			<p>
				<a class="<?php echo ($this->get("menu") == "home" ? "selected" : ""); ?>" href="<?php $this->url(""); ?>">Home</a> | <a class="<?php echo ($this->get("menu") == "overview" ? "selected" : ""); ?>" href="<?php $this->url("/firm-overview/"); ?>">Overview</a> | <a class="<?php echo ($this->get("menu") == "services" ? "selected" : ""); ?>" href="<?php $this->url("/services/"); ?>">Services</a> | <a class="<?php echo ($this->get("menu") == "team" ? "selected" : ""); ?>" href="<?php $this->url("/michael-halprin/"); ?>">Team</a> | <a class="<?php echo ($this->get("menu") == "testimonials" ? "selected" : ""); ?>" href="<?php $this->url("/testimonials/"); ?>">Testimonials</a> | <a class="<?php echo ($this->get("menu") == "contact" ? "selected" : ""); ?>" href="<?php $this->url("/contact/"); ?>">Contact</a>
			</p>
		</div>
	</div>
</footer>