<?php
// master view

// ****** STYLESHEETS
$this->prepend("css");
echo $this->html->stylesheet("/css/reset.min.css");
echo $this->html->stylesheet("/css/base.min.css");
echo $this->html->stylesheet("/css/styles.min.css");
$this->end();

// ****** SCRIPTS
$this->prepend("scripts");
echo $this->html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js");
echo $this->html->script("/js/common.min.js");
$this->end();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Philadelphia Bankruptcy Attorney | Pennsylvania Chapter 7 &amp; 13 Lawyer | <?php echo ($this->get("title") ? $this->get("title") : "Halprin Law"); ?></title>
	<meta name="description" content="Philadelphia Bankruptcy Lawyers, Chapter 13 Attorney, Chapter 7 Lawyer, Debt Relief Attorneys, Law Firm PA - Bankruptcy lawyers in Philadelphia Pennsylvania. Michael J. Halprin &amp; Associates have fought to protect the rights of individuals and families in Southeastern Pennsylvania with skilled, professional and personal legal services." />
	<?php $this->render("scripts"); ?>
	<?php $this->render("css"); ?>
</head>
<body>
	<?php $this->display("menubar-template"); ?>
	<div id="main">
		<?php $this->display("masthead-template"); ?>
		<?php $this->render("banner"); // if present ?>
		<div id="content" class="wrapper">
			<hr/>
			<?php $this->render("content"); ?>
		</div>
	</div>
	<?php $this->display("footer-template"); ?>
</body>