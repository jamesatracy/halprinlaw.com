<?php
// MainRouter.class.php

class MainRouter extends Router
{
	public function __construct()
	{
		parent::__construct();
		
		$this->add(array(
			"/" => "index",
			"/thank-you-contact/" => "onContactFormSubmit",
			"/thank-you-questionaire/" => "onQuestionaireFormSubmit"
		));
		
		// handle invalid urls (404 errors)
		Events::bind("response.404", array($this, "error404"));
	}
	
	/**
	 * Home page implementation.
	 * Maps to: /
	 */
	public function index()
	{
		$this->view->load("home");
	}
	
	/**
	 * Contact form submit.
	 * Maps to /thank-you-contact/
	 */
	public function onContactFormSubmit()
	{
		$name = Backbone::$request->post('name');
		$home = Backbone::$request->post('home');
		$city = Backbone::$request->post('city');
		$state = Backbone::$request->post('state');
		$zip = Backbone::$request->post('zip');
		$phone = Backbone::$request->post('phone');
		$fax = Backbone::$request->post('fax');
		$email = Backbone::$request->post('email');
		$message = Backbone::$request->post('message');

		// Send the mail
		$to = "";
		$subject = "";
		$to = "halprin@halprinlaw.com";
		//$to = "james.a.tracy@gmail.com";
		$subject = "New Message from Halprin Website";

		$body = "$name\n";
		if($home) $body .= "\n$home\n";
		if($city) $body .= "$city, $state $zip\n";
		if($phone) $body .= "\nPhone: $phone\n";
		if($fax) $body.= "\nFax: $fax\n";

		$body .= "\n$message";

		// Additional headers
		$headers = "From: $name <$email>" . "\r\n" .
			"Reply-To: $email" . "\r\n";
			//"Cc: junglife@gmail.com" . "\r\n";
			
		// Mail it
		mail($to, $subject, $body, $headers);
		
		$this->view->load("thank-you-contact");
	}
	
	/**
	 * Questionaire form submit
	 * Maps to: /thank-you-questionaire/
	 */
	public function onQuestionaireFormSubmit()
	{
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
			$body .= "\n---Do you own any real property? ".(Backbone::$request->post('real_property') ? Backbone::$request->post('real_property') : "(no answer)")."\n";
			$body .= "\n---Are you current on your mortgage payments? ".(Backbone::$request->post('mortgage_payments') ? Backbone::$request->post('mortgage_payments') : "(no answer)")."\n";
			$body .= "\n---Do you own a car? ".(Backbone::$request->post('car') ? Backbone::$request->post('car') : "(no answer)")."\n";
			$body .= "\n---Are you current on your car payments? ".(Backbone::$request->post('car_payments') ? Backbone::$request->post('car_payments') : "(no answer)")."\n";
			$body .= "\n---Do you want to surrender an additional investment property? ".(Backbone::$request->post('investment_property') ? Backbone::$request->post('investment_property') : "(no answer)")."\n";

			$body .= "\nIs your debt manageable?\n";
			$body .= "\n---Are you often late in paying your bills? ".(Backbone::$request->post('late_bills') ? Backbone::$request->post('late_bills') : "(no answer)")."\n";
			$body .= "\n---Do unexpected expenses cause financial stress for your monthly planning of paying bills? ".(Backbone::$request->post('unexpected_expenses') ? Backbone::$request->post('unexpected_expenses') : "(no answer)")."\n";
			$body .= "\n---Do you often worry about paying your bills on time? ".(Backbone::$request->post('bills_on_time') ? Backbone::$request->post('bills_on_time') : "(no answer)")."\n";
			$body .= "\n---Do you find you need to borrow money from friends/family/pension plan to make payments? ".(Backbone::$request->post('borrow_money') ? Backbone::$request->post('borrow_money') : "(no answer)")."\n";
			$body .= "\n---Have your borrowed from your pension plan in the last 12 months? ".(Backbone::$request->post('borrow_pension') ? Backbone::$request->post('borrow_pension') : "(no answer)")."\n";
			$body .= "\n---Are you behind on any of your credit card payments? ".(Backbone::$request->post('credit_cards_behind') ? Backbone::$request->post('credit_cards_behind') : "(no answer)")."\n";
			$body .= "\n---Are you behind on your mortgage payment? ".(Backbone::$request->post('mortgage_behind') ? Backbone::$request->post('mortgage_behind') : "(no answer)")."\n";
			$body .= "\n---Are you behind on your car payment? ".(Backbone::$request->post('car_behind') ? Backbone::$request->post('car_behind') : "(no answer)")."\n";
			$body .= "\n---Is your bank account restrained? ".(Backbone::$request->post('bank_restrained') ? Backbone::$request->post('bank_restrained') : "(no answer)")."\n";
			$body .= "\n---Are you being garnished? ".(Backbone::$request->post('garnished') ? Backbone::$request->post('garnished') : "(no answer)")."\n";
			$body .= "\n---Are creditors calling you? ".(Backbone::$request->post('creditors_calling') ? Backbone::$request->post('creditors_calling') : "(no answer)")."\n";
			$body .= "\n---Are you able to make more than minimum payments on your credit cards? ".(Backbone::$request->post('min_payments') ? Backbone::$request->post('min_payments') : "(no answer)")."\n";
			$body .= "\n---Has your car been repossessed? ".(Backbone::$request->post('car_repossessed') ? Backbone::$request->post('car_repossessed') : "(no answer)")."\n";
			$body .= "\n---Do you owe back taxes? ".(Backbone::$request->post('back_taxes') ? Backbone::$request->post('back_taxes') : "(no answer)")."\n";
			$body .= "\n---Are you using credit cards to pay off other credit cards? ".(Backbone::$request->post('credit_cards') ? Backbone::$request->post('credit_cards') : "(no answer)")."\n";
			$body .= "\n---Do you move balances from one credit card to another to reduce payments? ".(Backbone::$request->post('balance_transfers') ? Backbone::$request->post('balance_transfers') : "(no answer)")."\n";
			$body .= "\n---Has your income decreased within the last six months? ".(Backbone::$request->post('income_decresed') ? Backbone::$request->post('income_decresed') : "(no answer)")."\n";
			$body .= "\n---Have you or your spouse lost your job? ".(Backbone::$request->post('lost_job') ? Backbone::$request->post('lost_job') : "(no answer)")."\n";
			$body .= "\n---Do you regularly charge for small items such as food, transit rides, toiletries? ".(Backbone::$request->post('small_charges') ? Backbone::$request->post('small_charges') : "(no answer)")."\n";
			$body .= "\n---Do you have extra money to provide to your kids such as lunch money, going to the movies, etc.? ".(Backbone::$request->post('extra_money') ? Backbone::$request->post('extra_money') : "(no answer)")."\n";
			
			// Additional headers
			$headers = "From: ".Backbone::$request->post('first')." ".Backbone::$request->post('last')." <".Backbone::$request->post('email').">" . "\r\n" .
				"Reply-To: ".Backbone::$request->post('email')."\r\n";
			//$headers .= "Cc: ubglad2@yahoo.com" . "\r\n";
			//	"Cc: halprin@halprinlaw.com" . "\r\n";
				
			// Mail it
			mail($to, $subject, $body, $headers);
		}
		
		$this->view->load("thank-you-questionaire");
	}
	
	public function error404()
	{
		$view = new View();
		$view->load("404");
	}
}