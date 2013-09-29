<?php
$this->extend("layout");
// active
$this->set("active", "home");

// home css
$this->prepend("css");
if (DEV) {
	echo $this->html->stylesheet("/css/home.css");
} else {
	echo $this->html->stylesheet("/css/home.min.css");
}
$this->end();
?>

<?php $this->define("content"); ?>
	
	<?php $this->display("partials/carousel"); ?>

    <section class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $this->url("/images/bankruptcy-protection.png"); ?>" alt="Bankruptcy Protection">
          <h2>Bankruptcy Protection</h2>
          <p>Deciding to declare bankruptcy can be a complex and difficult decision-making process. HalprinLaw attorneys are dedicated to providing quality and cost effective legal guidance.</p>
          <p><a class="btn btn-default" href="<?php $this->url("/services/philadelphia-bankruptcy-attorney/"); ?>">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $this->url("/images/foreclosure.png"); ?>" alt="Foreclosure">
          <h2>Foreclosure</h2>
          <p>Are you behind on your mortgage payments? Contact HalprinLaw and we will explore and advise you on all available options to assist in saving your home.</p>
          <p><a class="btn btn-default" href="<?php $this->url("/services/pennsylvania-foreclosure-attorney/"); ?>">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $this->url("/images/medical-malpractice.png"); ?>" alt="Medical Malpractice">
          <h2>Medical Malpractice</h2>
          <p>Our experience allows us to help clients determine whether or not malpractice has occurred and, when justified, help them recover compensation for their injuries.</p>
          <p><a class="btn btn-default" href="<?php $this->url("/services/medical-malpractice/"); ?>">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  
	  <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $this->url("/images/debt-collection.png"); ?>" alt="Debt Collection">
          <h2>Debt Collection</h2>
          <p>We have been handling consumer harassment for more than 20 years and will act as an advocate on your behalf.</p>
          <p><a class="btn btn-default" href="<?php $this->url("/services/debt-collection-lawsuit-defense/"); ?>">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $this->url("/images/predatory-lending.png"); ?>" alt="Predatory Lending">
          <h2>Predatory Lending</h2>
          <p>HalprinLaw attorneys are committed to protecting borrowers from predatory lending practices by unscrupulous lenders.</p>
          <p><a class="btn btn-default" href="<?php $this->url("/services/predatory-lending/"); ?>">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php $this->url("/images/personal-injury.png"); ?>" alt="Personal Injury / Wrongful Death">
          <h2>Personal Injury</h2>
          <p>HalprinLaw attorneys have been helping personal injury victims for more than two decades and have collected millions on their behalf.</p>
          <p><a class="btn btn-default" href="<?php $this->url("/services/personal-injury-wrongful-death/"); ?>">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Philadelphia Bankruptcy Attorney</h2>
          <p class="lead">If you struggle with paying your debts or are at risk of the mortgage company foreclosing on your home, we are here to help you improve your credit and legal situation.</p>
		  <p class="lead">Responding to our clients' needs, HalprinLaw offers evening and weekend consultations for your convenience. <strong><a href="<?php $this->url("/contact/"); ?>">Contact us</a> today to regain peace of mind</strong> about your financial future.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/philly.jpg" alt="Philadelphia">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/business.jpg" alt="Services">
        </div>
        <div class="col-md-7">
			<h2 class="featurette-heading">What Our Clients are Saying</h2>
			<?php $rand = rand(1, 2); ?>
			<?php if($rand == 1): ?>
				<p class="quote-box">"My bills were so big I couldn't face them until I found HalprinLaw and a solution to my problem. I chose Michael Halprin as my bankruptcy lawyer and it was the best decision I've ever made. They did not judge me, they worked with me until my debt issues were under control and I could mange my financial life again. Now I can see the light at the end of the tunnel."<br><br/><strong>Terri C., Philadelphia, PA</strong></p>
			<?php else: ?>
				<p class="quote-box">"Before hiring HalprinLaw, I was completely overwhelmed. I was out of work for a while and was afraid I was going to lose my house. Michael was able to help me restructure my debt and work with my creditors to save my home. And he did this with a very reasonable expense to me. I'm completely relieved and VERY glad I hired HalprinLaw. They simply take care of everything and no one can touch their level of service or expertise."<br><br/><strong>Gina D., Philadelphia, PA</strong></p>
			<?php endif; ?>
			<p><?php echo $this->html->link("/testimonials/", "Read more testimonials &raquo;", array("class" => "btn btn-default")); ?></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">What are You Waiting For?</h2>
          <p class="lead">When you have loads of unpaid debt, financial woes, and possibly bill collector harassment, every day is the same old, bad news. Instead, you could wake up every day and feel good knowing your financial worries are behind you.</p>
		  <p class="lead">The phone will no longer be an instrument of torture. And that mountain of bills that you keep avoiding will be a memory. This joyous picture isn't just a daydream. It's a very real possibility - with a little help, guidance and encouragement from the Philadelphia bankruptcy lawyers at the offices of HalprinLaw.</p>
		  <p><a class="btn btn-default" href="<?php $this->url("/michael-halprin/"); ?>">Meet Michael Halprin &raquo;</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/family1.jpg" alt="What are you waiting for?">
        </div>
      </div>

      <hr class="featurette-divider">
	</section>
<?php $this->end("content"); ?>