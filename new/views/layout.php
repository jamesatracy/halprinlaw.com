<?php
$this->prepend("css");
if(DEV) {
	echo $this->html->stylesheet("/css/bootstrap.css");
	echo $this->html->stylesheet("/css/shared.css");
} else {
	echo $this->html->stylesheet("/css/bootstrap.min.css");
	echo $this->html->stylesheet("/css/shared.min.css");
}
$this->end();
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8" />
    <title>Philadelphia Bankruptcy Attorney | Pennsylvania Chapter 7 &amp; 13 Lawyer | <?php echo ($this->get("title") ? $this->get("title") : "Halprin Law"); ?></title>
	<meta name="description" content="Philadelphia Bankruptcy Lawyers, Chapter 13 Attorney, Chapter 7 Lawyer, Debt Relief Attorneys, Law Firm PA - Bankruptcy lawyers in Philadelphia Pennsylvania. Michael J. Halprin &amp; Associates have fought to protect the rights of individuals and families in Southeastern Pennsylvania with skilled, professional and personal legal services." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
	<?php $this->render("css"); ?>
    <!--[if lt IE 9]>
      <script src="<?php $this->url("js/html5shiv.js"); ?>"></script>
      <script src="<?php $this->url("js/respond.min.js"); ?>"></script>
    <![endif]-->
  </head>
  <body>
	<header>
		<?php $this->display("partials/navigation"); ?>
		<?php $this->display("partials/masthead"); ?>
	</header>
	<div id="content">
		<?php $this->render("content"); ?>
	</div><!-- #content -->
	<?php $this->display("partials/footer"); ?>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="<?php $this->url("js/bootstrap.min.js"); ?>"></script>
	<?php $this->render("scripts"); ?>
  </body>
</html>