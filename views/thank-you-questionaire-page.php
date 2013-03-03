<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "");

if(isset($_POST))
{
	// Send the mail
	//$to = "mhalprin@comcast.net";
	$to = "halprin@halprinlaw.com";
	//$to = "james.a.tracy@gmail.com";
	$subject = "Bankruptcy Questionaire - Submitted";
	
	$body = "Name: ".Backbone::$request->post('first')." ".Backbone::$request->post('last')."\n";
	$body .= "Address: ".Backbone::$request->post('address')." ".Backbone::$request->post('city').", ".Backbone::$request->post('state')." ".Backbone::$request->post('zip')."\n";
	$body .= "Phone: ".Backbone::$request->post('phone')."\n";
	$body .= "E-Mail: ".Backbone::$request->post('email')."\n";
	$body .= "\n------Answers------\n";
	
	$body .= "\nWhat type of debt do you have?\n";
	$debt = array();
	if(Backbone::$request->post('credit_cards'))
		$debt[] = "Credit Cards";
	if(Backbone::$request->post('judgements'))
		$debt[] = "Judgements";
	if(Backbone::$request->post('student_loans'))
		$debt[] = "Student Loans";
	if(Backbone::$request->post('medical_bills'))
		$debt[] = "Medical Bills";
	if(Backbone::$request->post('tax'))
		$debt[] = "Tax";
	if(Backbone::$request->post('government_debt'))
		$debt[] = "Government Debt";
	if(Backbone::$request->post('personal_loans'))
		$debt[] = "Personal Loans";
	if(Backbone::$request->post('child_support'))
		$debt[] = "Child Support";
	
	if(count($debt) == 0)
		$body .= "---Nothing selected\n";
	else
		$body .= "---".implode(", ", $debt)."\n";
		
	$body .= "\nWhat type of assets do you have?\n";
	$body .= "---Do you own any real property? ".(Backbone::$request->post('real_property') ? Backbone::$request->post('real_property') : "(no answer)")."\n";
	$body .= "---Are you current on your mortgage payments? ".(Backbone::$request->post('mortgage_payments') ? Backbone::$request->post('mortgage_payments') : "(no answer)")."\n";
	$body .= "---Do you own a car? ".(Backbone::$request->post('car') ? Backbone::$request->post('car') : "(no answer)")."\n";
	$body .= "---Are you current on your car payments? ".(Backbone::$request->post('car_payments') ? Backbone::$request->post('car_payments') : "(no answer)")."\n";
	$body .= "---Do you want to surrender an additional investment property? ".(Backbone::$request->post('investment_property') ? Backbone::$request->post('investment_property') : "(no answer)")."\n";

	$body .= "\nIs your debt manageable?\n";
	$body .= "---Are you often late in paying your bills? ".(Backbone::$request->post('late_bills') ? Backbone::$request->post('late_bills') : "(no answer)")."\n";
	$body .= "---Do unexpected expenses cause financial stress for your monthly planning of paying bills? ".(Backbone::$request->post('unexpected_expenses') ? Backbone::$request->post('unexpected_expenses') : "(no answer)")."\n";
	$body .= "---Do you often worry about paying your bills on time? ".(Backbone::$request->post('bills_on_time') ? Backbone::$request->post('bills_on_time') : "(no answer)")."\n";
	$body .= "---Do you find you need to borrow money from friends/family/pension plan to make payments? ".(Backbone::$request->post('borrow_money') ? Backbone::$request->post('borrow_money') : "(no answer)")."\n";
	$body .= "---Have your borrowed from your pension plan in the last 12 months? ".(Backbone::$request->post('borrow_pension') ? Backbone::$request->post('borrow_pension') : "(no answer)")."\n";
	$body .= "---Are you behind on any of your credit card payments? ".(Backbone::$request->post('credit_cards_behind') ? Backbone::$request->post('credit_cards_behind') : "(no answer)")."\n";
	$body .= "---Are you behind on your mortgage payment? ".(Backbone::$request->post('mortgage_behind') ? Backbone::$request->post('mortgage_behind') : "(no answer)")."\n";
	$body .= "---Are you behind on your car payment? ".(Backbone::$request->post('car_behind') ? Backbone::$request->post('car_behind') : "(no answer)")."\n";
	$body .= "---Is your bank account restrained? ".(Backbone::$request->post('bank_restrained') ? Backbone::$request->post('bank_restrained') : "(no answer)")."\n";
	$body .= "---Are you being garnished? ".(Backbone::$request->post('garnished') ? Backbone::$request->post('garnished') : "(no answer)")."\n";
	$body .= "---Are creditors calling you? ".(Backbone::$request->post('creditors_calling') ? Backbone::$request->post('creditors_calling') : "(no answer)")."\n";
	$body .= "---Are you able to make more than minimum payments on your credit cards? ".(Backbone::$request->post('min_payments') ? Backbone::$request->post('min_payments') : "(no answer)")."\n";
	$body .= "---Has your car been repossessed? ".(Backbone::$request->post('car_repossessed') ? Backbone::$request->post('car_repossessed') : "(no answer)")."\n";
	$body .= "---Do you owe back taxes? ".(Backbone::$request->post('back_taxes') ? Backbone::$request->post('back_taxes') : "(no answer)")."\n";
	$body .= "---Are you using credit cards to pay off other credit cards? ".(Backbone::$request->post('credit_cards') ? Backbone::$request->post('credit_cards') : "(no answer)")."\n";
	$body .= "---Do you move balances from one credit card to another to reduce payments? ".(Backbone::$request->post('balance_transfers') ? Backbone::$request->post('balance_transfers') : "(no answer)")."\n";
	$body .= "---Has your income decreased within the last six months? ".(Backbone::$request->post('income_decresed') ? Backbone::$request->post('income_decresed') : "(no answer)")."\n";
	$body .= "---Have you or your spouse lost your job? ".(Backbone::$request->post('lost_job') ? Backbone::$request->post('lost_job') : "(no answer)")."\n";
	$body .= "---Do you regularly charge for small items such as food, transit rides, toiletries? ".(Backbone::$request->post('small_charges') ? Backbone::$request->post('small_charges') : "(no answer)")."\n";
	$body .= "---Do you have extra money to provide to your kids such as lunch money, going to the movies, etc.? ".(Backbone::$request->post('extra_money') ? Backbone::$request->post('extra_money') : "(no answer)")."\n";
	
	// Additional headers
	$headers = "From: ".Backbone::$request->post('first')." ".Backbone::$request->post('last')." <".Backbone::$request->post('email').">" . "\r\n" .
		"Reply-To: ".Backbone::$request->post('email')."\r\n";
	//$headers .= "Cc: ubglad2@yahoo.com" . "\r\n";
	//	"Cc: halprin@halprinlaw.com" . "\r\n";
		
	// Mail it
	mail($to, $subject, $body, $headers);
}
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<h1>Welcome to a New Beginning!</h1>
</div>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<div class="column">
	<?php echo $this->html->image("/images/staff.jpg", array("alt" => "HalprinLaw Staff", "style" => "margin: 5px", "class" => "alignright")); ?>
	<p>Thank You! We will contact you shortly...or you may call us at the number listed on the right for a faster response.</p>
	<p>When you have loads of unpaid debt, financial woes, and possibly bill collector harassment, every day is the same old, bad news.</p>
	<p class="quote-box" style="width:350px"><em>Instead, you could wake up every day and feel good knowing your financial worries are behind you</em>.</p>
	<p>The phone will no longer be an instrument of torture. And that mountain of bills that you keep avoiding will be a memory. This joyous picture isn't just a daydream. It's a very real possibility - with a little help, guidance and encouragement from the Philadelphia bankruptcy lawyers at the offices of HalprinLaw.</p>
	<p>Read our <a href="<?php echo Backbone::$request->link("/testimonials/"); ?>">Testimonials</a> from satisfied clients just like you!</p>
</div>
<?php $this->end(); ?>