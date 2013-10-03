<?php
$this->extend("master-template");
$this->extend("sidebar-template");

$this->set("menu", "team");
?>

<?php $this->define("banner"); ?>
<div class="wrapper">
	<h1>Team</h1>
</div>
<?php $this->end(); ?>

<?php $this->define("content"); ?>
<div class="column">

<?php echo $this->html->image("/images/halprin3.jpg", array("alt" => "Michael J. Halprin", "style" => "margin:5px;", "class" => "alignright")); ?>
<h2>Michael J. Halprin, Esq.</h2>
<p>1806 South Broad Street<br/>
Philadelphia, Pennsylvania 19145</p>

<p><strong>Phone:</strong> 215. 215-389-6913 or 1-866-86-HALPRIN<br/>
<strong>Email:</strong> <a href="mailto:halprin@halprinlaw.com">halprin@halprinLaw.com</a></p>

<p>Michael is principal of HalprinLaw, a Philadelphia-based law firm that concentrates on helping individuals navigate through the complexities of Chapter 7 and Chapter 13 bankruptcy, mortgage workouts and predatory lending, with a focus on helping people save their homes from Sheriff's Sales.  He is one of the top bankruptcy filers in the City of Philadelphia.</p>

<p>In his practice, Michael recognizes that sometimes the hardest part of the bankruptcy process may be walking through the firm's door, so he strives to create a comfortable environment for his clients to relax.  He has great empathy for his clients' difficult financial situations and is widely regarded for his hands-on approach.</p>

<p>For nearly 30 years, Michael has fought for his clients to help them save their assets and to develop long-lasting relationships as a trusted advisor. Much of his success can be attributed to the relationships he has cultivated and referrals received from churches, community organizations and satisfied clients.</p>
<br/>
<p><strong>Practice Areas</strong></p>
<ul>
	<li>Consumer Bankruptcy Law</li>
	<li>Consumer Debtor's Rights</li>
	<li>Mortgage Foreclosure Defense</li>
	<li>Predatory Lending Practices</li>
</ul>
<p><strong>Education</strong></p>
<ul>
	<li>University of  Pennsylvania Law School. Philadelphia, PA. J.D. (<em>cum laude</em>)  1983.</li>
	<li>New College of the  University of South Florida. Sarasota, FL.<br>
	B.A. 1980 in Psychology.<br>
	Graduated in upper 2% of  class.</li>
	<li>Regularly attend  continuing legal education courses.</li>
</ul>
<p><strong>Bar Admissions</strong></p>
<ul>
	<li>Pennsylvania, 1983</li>
	<li>U.S. Court of Appeals, 3rd Circuit</li>
	<li>U.S. District Court - Eastern District of  Pennsylvania</li>
	<li>U.S. District Court - Middle District of  Pennsylvania</li>
	<li>U.S. District Court - Western District of  Pennsylvania</li>
</ul>
<p><strong>Professional Memberships</strong></p>
<ul>
	<li>National Association of Consumer Bankruptcy  Attorneys</li>
	<li>Eastern District of Pennsylvania Bankruptcy Conference</li>
	<li>Philadelphia Bar Association, Bankruptcy Law  Committee</li>
</ul>
<?php $this->display("page-footer"); ?>
</div>
<?php $this->end(); ?>