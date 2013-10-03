<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "contact");

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
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<h1>Contact</h1>
</div>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<p class="center"><h2>Thank your for your inquiry! We will get back to you shortly.</h2></p>
<br/>
<p class="center"><?php echo $this->html->image("/images/post-it.jpg"); ?></p>
<?php $this->end(); ?>