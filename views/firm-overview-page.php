<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "overview");
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<h1>Firm Overview</h1>
</div>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<div class="column">
	<p>Delivering <strong>compassionate service and creative solutions</strong> for over 30 years and one client at a time, the Philadelphia Bankruptcy Lawyers at HalprinLaw have established an outstanding reputation throughout Southeastern Pennsylvania by providing quality legal services to individuals and families in:</p>
	<br/>
	<table width="100%">
		<tr>
			<td class="top left">
				<div class="column"><?php $this->display("services"); ?></div>
			</td>
			<td class="top right">
				<?php echo $this->html->image("/images/consultation.jpg"); ?>
			</td>
		</tr>
	</table>
	<p>Our law practice was built on a <strong>commitment to fight for and protect the rights and interests of ordinary people and families</strong>. To many of our clients, the legal system seems stacked against them. Working closely with us, they find that our knowledge of both the law and the legal process allows them to gain equal footing when confronting creditor harassment, powerful financial institutions, insurance companies, unscrupulous businesses andgovernment bureaucracy. Our clients know that we are standing firmly in their corner.</p>
	<p>Some clients have told us that in previous legal matters they had not received the proper attention they needed and were often passed off to paralegals. That is not the HalprinLaw way. <strong>Our clients work directly with an attorney in a relaxed atmosphere</strong>. We take the time to explain the law and present the options. Our results on behalf of our clients have been favorable, in great part due to the fact that we know that a well-informed client is essential to what we do.</p>
	<p>Our firm has earned the respect of other lawyers, judges and even adversaries for our quality work product for nearly three decades. Whether we are representing clients in negotiations, at an administrative hearing or before a judge or jury, <strong>we are always prepared for you</strong>.  Because of that, other attorneys and satisfied current and former clients continue to be our greatest source of referrals and new clients.</p>
	<br/>
	<h2>Who We Serve</h2>
	<p>HalprinLaw attorneys provide a broad range of legal services to individuals in the Greater Philadelphia region.  For close to 30 years, we have helped our fellow neighbors file thousands of bankruptcy lawsuits, fight mortgage foreclosure, combat debt collections, creditor harassment, and wrongful death claims.</p>
	<?php $this->display("page-footer"); ?>
</div>
<?php $this->end(); ?>