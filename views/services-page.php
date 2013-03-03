<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "services");
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<h1>Services</h1>
</div>
<?php $this->end(); ?>


<?php $this->define("content"); ?>
<div class="column">
	<?php echo $this->html->image("/images/family.jpg", array("class" => "alignright", "style" => "margin:5px")); ?>
	<p>For over 27 years, HalprinLaw has been <strong>fighting to protect the rights of individuals and families</strong> in Southeastern Pennsylvania. HalprinLaw bankruptcy and debt relief attorneys take the time to really listen and understand your legal issues before we advise on an appropriate course of action.</p>
	<p>Among the services we provide our individual, small business/entrepreneurial and debtor clients, HalprinLaw attorneys focus on:</p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/chapter-7-bankruptcy/"); ?>">Bankruptcy (Chapter 7)</a></h2>
	<p class="service-box">Deciding to declare bankruptcy can be a complex and difficult decision-making process. HalprinLaw attorneys are dedicated to providing quality and cost effective legal guidance.<br/><br/><a href="<?php echo Backbone::$request->link("/services/chapter-7-bankruptcy/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/chapter-13-bankruptcy/"); ?>">Bankruptcy (Chapter 13)</a></h2>
	<p class="service-box">With a combined 36+ years of experience in Chapter 13 bankruptcy petition fillings, HalprinLaw attorneys have an unmatched understanding of the nuances and requirements for effectively helping our clients re-structure their debt and financial obligations.<br/><br/><a href="<?php echo Backbone::$request->link("/services/chapter-13-bankruptcy/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/debt-collection-lawsuit-defense/"); ?>">Debt Collection Lawsuit Defense</a></h2>
	<p class="service-box">We have been handling consumer harassment for more than 20 years and will act as an advocate on your behalf.<br/><br/><a href="<?php echo Backbone::$request->link("/services/debt-collection-lawsuit-defense/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/pennsylvania-foreclosure-attorney/"); ?>">Foreclosure</a></h2>
	<p class="service-box">Are you behind on your mortgage payments? Contact HalprinLaw and we will explore and advise you on all available options to assist in saving your home.<br/><br/><a href="<?php echo Backbone::$request->link("/services/pennsylvania-foreclosure-attorney/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/predatory-lending/"); ?>">Predatory Lending</a></h2>
	<p class="service-box">HalprinLaw attorneys are committed to protecting borrowers from predatory lending practices by unscrupulous lenders.<br/><br/><a href="<?php echo Backbone::$request->link("/services/predatory-lending/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/personal-injury-wrongful-death/"); ?>">Personal Injury / Wrongful Death</a></h2>
	<p class="service-box">HalprinLaw attorneys have been helping personal injury victims for more than two decades and have collected millions on their behalf.<br/><br/><a href="<?php echo Backbone::$request->link("/services/personal-injury-wrongful-death/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<h2><a href="<?php echo Backbone::$request->link("/services/medical-malpractice/"); ?>">Medical  Malpractice / Nursing Home Abuse &amp; Neglect</a></h2>
	<p class="service-box">Our experience allows us to help clients determine whether or not malpractice has occurred and, when justified, help them recover compensation for their injuries.<br/><br/><a href="<?php echo Backbone::$request->link("/services/medical-malpractice/"); ?>">Get started now &gt;&gt;</a></p>
	<br/>
	<?php $this->display("page-footer"); ?>
</div>
<?php $this->end(); ?>