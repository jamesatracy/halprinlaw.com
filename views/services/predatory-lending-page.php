<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "Predatory Lending");
$this->set("active", "services");

// css
$this->prepend("css");
$this->end();
?>

<?php $this->define("content"); ?>
	<p>Predatory lending is a term commonly used to describe certain unfair and deceptive practices engaged in by unscrupulous merchants in the mortgage lending and consumer finance industries.</p>

	<p>These merchants frequently target low income, minority and elderly consumers who they believe have poor credit or little access to traditional lines of credit.  The consumers are pressured into accepting high cost loans, usually secured by a mortgage on their home, which  provide little or no financial benefit to the consumer. Consumers victimized by these practices may be entitled to assistance under state and federal laws.</p>

	<p>HalprinLaw attorneys are committed to protecting borrowers from predatory lending practices by unscrupulous lenders.</p>

	<p>Once we gain an understanding of your unique situation, we can often <strong>help to determine whether you have been the victim of a predatory loan scheme</strong> and often determine whether or not your lender has complied with all federal and state lending laws.</p>

	<p>If you are having problems with your lender, mortgage broker or loan officer, call us to discuss:</p>

	<ul>
		<li>Federal Truth in Lending Act Violations (TILA &amp; HOEPA)</li>
		<li>RESPA Violations</li>
		<li>Fair Debt Reporting Act</li>
		<li>Reverse Mortgages</li>
		<li>Elder Abuse</li>
		<li>Department of Real Estate Matters</li>
		<li>Loan Servicing Violations</li>
		<li>Loan Accounting Matters</li>
		<li>Predatory Loans</li>
	</ul>

	<p>If you are facing <?php echo $this->html->link("/services/pennsylvania-foreclosure-attorney/", "foreclosure"); ?> on your home because of oppressive mortgage terms, insurance fees, interest rates which were changed or undisclosed prior to closing, your mortgage lender or broker may have failed to follow the Truth in Lending Act or other state and federal statutes. Countless homeowners across the country have been victimized by these fraudulent practices.</p>

	<p>If you have received a "Notice of Default" or your  home is in foreclosure, let us determine whether your foreclosure and credit problems qualify for statutory relief.</p>
<?php $this->end(); ?>