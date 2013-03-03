<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "home");

// ****** SCRIPTS
$this->prepend("scripts");
echo $this->html->script("/js/home.min.js");
$this->end();
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<hr/>
	<div id="home-banner">
		<div id="home-banner-contents">
			<div id="home-banner-inner">
				<div id="home-banner1" class="home-banner-slide">
					<h1><a href="<?php echo Backbone::$request->link("/firm-overview/"); ?>">Welcome to HalprinLaw</a></h1>
					<p class="large" style="width:60%">For over 30 years, HalprinLaw has been fighting to protect the rights of individuals and families in Southeastern Pennsylvania.</p>
					<p><a href="<?php echo Backbone::$request->link("/firm-overview/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
				<div id="home-banner2" class="home-banner-slide" style="display:none">
					<h1><a href="<?php echo Backbone::$request->link("/services/philadelphia-bankruptcy-attorney/"); ?>">Bankruptcy Protection (Ch 7 & 13)</a></h1>
					<p class="large" style="width:70%">Deciding to declare bankruptcy can be a complex and difficult decision-making process. HalprinLaw attorneys are dedicated to providing quality and cost effective legal guidance.</p>
					<p><a href="<?php echo Backbone::$request->link("/services/philadelphia-bankruptcy-attorney/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
				<div id="home-banner3" class="home-banner-slide" style="display:none">
					<h1><a href="<?php echo Backbone::$request->link("/services/debt-collection-lawsuit-defense/"); ?>">Debt Collection Lawsuit Defense</a></h1>
					<p class="large" style="width:60%">We have been handling consumer harassment for more than 20 years and will act as an advocate on your behalf.</p>
					<p><a href="<?php echo Backbone::$request->link("/services/debt-collection-lawsuit-defense/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
				<div id="home-banner4" class="home-banner-slide" style="display:none">
					<h1><a href="<?php echo Backbone::$request->link("/services/pennsylvania-foreclosure-attorney/"); ?>">Foreclosure</a></h1>
					<p class="large" style="width:60%">Are you behind on your mortgage payments? Contact HalprinLaw and we will explore and advise you on all available options to assist in saving your home.</p>
					<p><a href="<?php echo Backbone::$request->link("/services/pennsylvania-foreclosure-attorney/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
				<div id="home-banner5" class="home-banner-slide" style="display:none">
					<h1><a href="<?php echo Backbone::$request->link("/services/medical-malpractice/"); ?>">Medical Malpractice</a></h1>
					<p class="large" style="width:60%">Our experience allows us to help clients determine whether or not malpractice has occurred and, when justified, help them recover compensation for their injuries.</p>
					<p><a href="<?php echo Backbone::$request->link("/services/medical-malpractice/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
				<div id="home-banner6" class="home-banner-slide" style="display:none">
					<h1><a href="<?php echo Backbone::$request->link("/services/predatory-lending/"); ?>">Predatory Lending</a></h1>
					<p class="large" style="width:60%">HalprinLaw attorneys are committed to protecting borrowers from predatory lending practices by unscrupulous lenders.</p>
					<p><a href="<?php echo Backbone::$request->link("/services/predatory-lending/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
				<div id="home-banner7" class="home-banner-slide" style="display:none">
					<h1><a href="<?php echo Backbone::$request->link("/services/personal-injury-wrongful-death/"); ?>">Personal Injury / Wrongful Death</a></h1>
					<p class="large" style="width:60%">HalprinLaw attorneys have been helping personal injury victims for more than two decades and have collected millions on their behalf.</p>
					<p><a href="<?php echo Backbone::$request->link("/services/personal-injury-wrongful-death/"); ?>"><?php echo $this->html->image("/images/startnow.png", array("alt" => "Start Now")); ?></a></p>
				</div>
			</div>
		</div>
		<div class="home-banner-links">
			<ul>
				<li><a id="home-banner-link1" class="home-banner-link" index="0" href="javascript:void();">Welcome</a> &bull;</li>
				<li><a id="home-banner-link2" class="home-banner-link" index="1" href="javascript:void();">Bankruptcy</a> &bull;</li>
				<li><a id="home-banner-link3" class="home-banner-link" index="2" href="javascript:void();">Debt Collection</a> &bull;</li>
				<li><a id="home-banner-link4" class="home-banner-link" index="3" href="javascript:void();">Foreclosure</a> &bull;</li>
				<li><a id="home-banner-link5" class="home-banner-link" index="4" href="javascript:void();">Medical Malpractice</a> &bull;</li>
				<li><a id="home-banner-link6" class="home-banner-link" index="5" href="javascript:void();">Predatory Lending</a> &bull;</li>
				<li><a id="home-banner-link7" class="home-banner-link" index="6" href="javascript:void();">Personal Injury</a></li>
			</ul>
		</div>
	</div>
</div>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<table width="100%">
	<tr>
		<td class="top left" width="50%">
			<div class="column">
				<h2>Philadelphia Bankruptcy Attorney</h2>
				<p>If you struggle with paying your debts or are at risk of the mortgage company foreclosing on your home, we are here to help you improve your credit and legal situation.</p>
				<p>Responding to our clients' needs, HalprinLaw offers evening and weekend consultations for your convenience. Contact us today to regain peace of mind about your financial future.</p>
				<p class="bold italic">Delivering Compassionate Service and Creative Solutions...One Client at a Time.</p>
			</div>
		</td>
		<td class="top left" width="50%">
			<div class="column">
				<h2>Our Services</h2>
				<p>Among the services we provide our individual, small business/entrepreneurial and debtor clients, HalprinLaw attorneys focus on:</p>
				<?php $this->display("services"); ?>
			</div>
		</td>
	</tr>
</table>
<div class="column">
	<hr/>
	<h2>What Our Clients are Saying</h2>
	<p class="quote-box">"My bills were so big I couldn't face them until I found HalprinLaw and a solution to my problem. I chose Michael Halprin as my bankruptcy lawyer and it was the best decision I've ever made. They did not judge me, they worked with me until my debt issues were under control and I could mange my financial life again. Now I can see the light at the end of the tunnel."<br><br/><strong>Terri C., Philadelphia, PA</strong></p>
	<p class="quote-box">"Before hiring HalprinLaw, I was completely overwhelmed. I was out of work for a while and was afraid I was going to lose my house. Michael was able to help me restructure my debt and work with my creditors to save my home. And he did this with a very reasonable expense to me. I'm completely relieved and VERY glad I hired HalprinLaw. They simply take care of everything and no one can touch their level of service or expertise."<br><br/><strong>Gina D., Philadelphia, PA</strong></p>
	<p><?php echo $this->html->link("/testimonials/", "Read more testimonials &gt;&gt;"); ?></p>
	<br/>
	<hr/>
	<h2>What are You Waiting For?</h2>
	<p>When you have loads of unpaid debt, financial woes, and possibly bill collector harassment, every day is the same old, bad news. <strong>Instead, you could wake up every day and feel good knowing your financial worries are behind you</strong>.</p>
	<p>The phone will no longer be an instrument of torture. And that mountain of bills that you keep avoiding will be a memory. This joyous picture isn't just a daydream. It's a very real possibility - with a little help, guidance and encouragement from the Philadelphia bankruptcy lawyers at the offices of HalprinLaw.</p>
	<?php $this->display("page-footer"); ?>
</div>
<?php $this->end(); ?>