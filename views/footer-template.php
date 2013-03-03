<div id="footer">
	<div class="wrapper">
		<table class="comfortable" width="100%">
			<tr>
				<td class="top left" width="33%">
					<p><strong>HalprinLaw</strong></p>
					<p>1806 South Broad Street<br/>
					Philadelphia, Pennsylvania 19145<br/>
					Phone: 215-389-6913<br/>
					Fax: 215-389-3373<br/>
					</p>
					<p>We are a debt relief agency and help people file for bankruptcy relief under the U.S. Bankruptcy Code.</p>
					<p>Copyright <?php echo date("Y"); ?>. All Rights Reserved.</p>
				</td>
				<td class="top left" width="67%">
					<p>
						<a class="<?php echo ($this->get("menu") == "home" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link(""); ?>">Home</a> | <a class="<?php echo ($this->get("menu") == "overview" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/firm-overview/"); ?>">Overview</a> | <a class="<?php echo ($this->get("menu") == "services" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/services/"); ?>">Services</a> | <a class="<?php echo ($this->get("menu") == "team" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/team/"); ?>">Team</a> | <a class="<?php echo ($this->get("menu") == "testimonials" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/testimonials/"); ?>">Testimonials</a> | <a class="<?php echo ($this->get("menu") == "contact" ? "selected" : ""); ?>" href="<?php echo Backbone::$request->link("/contact/"); ?>">Contact</a>
					</p>
					<table width="100%">
						<tr>
							<td class="top left" width="50%">
								<p>
									<a href="http://www.naca.net/about-consumer-advocates/" rel="nofollow" target="_blank"><img src="<?php echo Backbone::$request->link("/images/naca.jpg"); ?>" alt="National Association of Consumer Advocates" title="National Association of Consumer Advocates" style="margin:6px;" /></a>&nbsp;
									<a href="http://www.philadelphiabar.org/page/HomePage?appNum=2" rel="nofollow" target="_blank"><img src="<?php echo Backbone::$request->link("/images/pba.jpg"); ?>" alt="Philadelphia Bar Assocation" title="Philadelphia Bar Assocation" style="margin:6px;" /></a>
									<img src="<?php echo Backbone::$request->link("/images/pabankruptcy.jpg"); ?>" alt="Eastern District of Pennsylvania Banktruptcy Conference" title="Eastern District of Pennsylvania Banktruptcy Conference" style="margin:6px;" /><br />
									
								</p>
							</td>
							<td class="top left" width="50%">
								<p><a href="http://www.nacba.org/" rel="nofollow" target="_blank"><img src="<?php echo Backbone::$request->link("/images/nacba.jpg"); ?>" alt="National Association of Consumer Bankruptcy Attorneys" title="National Association of Consumer Bankruptcy Attorneys" style="margin:6px;" /></a></p>
							</td>
						</tr>
					</table>
					
				</td>
				
			</tr>
		</table>
		<p class="center small" style="display:none">Powered by Backbone.php <?php echo Backbone::version(); ?></p>
	</div>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18878704-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>