<?php
$this->extend("layout");
$this->extend("page");

// vars
$this->set("title", "Do You Qualify for Bankruptcy?");
$this->set("active", "");

// css
$this->prepend("css");
$this->end();
?>

<?php $this->define("content"); ?>
	<form method="post" action="<?php echo Backbone::$request->link("/thank-you-questionaire/"); ?>" role="form">
		<p>Complete this quick and easy questionniare to see if you qualify for bankruptcy protection:</p>
		<h3>Debt</h3>
		<p><strong>What type of debt do you have?</strong></p>
		<table class="comfortable" border="0" cellspacing="5" cellpadding="0" width="100%">
			<tr>
				<td><input type="checkbox" name="credit_cards" />&nbsp;Credit cards</td>
				<td><input type="checkbox" name="judgements" />&nbsp;Judgements</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="student_loans" />&nbsp;Student loans</td>
				<td><input type="checkbox" name="medical_bills" />&nbsp;Medical bills</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="tax" />&nbsp;Tax</td>
				<td><input type="checkbox" name="government_debt" />&nbsp;Government files/debt</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="personal_loans" />&nbsp;Personal/business loans</td>
				<td><input type="checkbox" name="child_support" />&nbsp;Child support/alimony payments</td>
			</tr>
		</table>
		<input type="button" name="next" value="Next" class="btn btn-default" onclick="document.getElementById('assets').style.display = 'block';" />
		<br/>
		<div id="assets" style="display:none">
			<br/>
			<h3>Assets</h3>
			<p><strong>What type of assets do you have?</strong></p>
			<table class="comfortable" border="0" cellspacing="5" cellpadding="0" width="100%">
				<tr>
					<td>Do you own any real property?</td><td><input type="radio" name="real_property" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="real_property" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you current on your mortgage payments?</td><td><input type="radio" name="mortgage_payments" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="mortgage_payments" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you own a car?</td><td><input type="radio" name="car" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="car" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you current on your car payments?</td><td><input type="radio" name="car_payments" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="car_payments" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you want to surrender an additional investment property?</td><td><input type="radio" name="investment_property" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="investment_property" value="no" />&nbsp;No</td>
				</tr>
			</table>
			<input type="button" name="next" value="Next" class="btn btn-default" onclick="document.getElementById('manage').style.display = 'block';" />
		</div>
		<br/>
		<div id="manage" style="display:none">
			<br/>
			<h3>Is your debt manageable?</h3>
			<p><strong>Please answer the following questions to determine if bankruptcy is necessary:</strong></p>
			<table class="comfortable" border="0" cellspacing="5" cellpadding="0" width="100%">
				<tr>
					<td>Are you often late in paying your bills?</td><td width="100px"><input type="radio" name="late_bills" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="late_bills" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do unexpected expenses cause financial stress for your monthly planning of paying bills?</td><td width="100px"><input type="radio" name="unexpected_expenses" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="unexpected_expenses" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you often worry about paying your bills on time?</td><td width="100px"><input type="radio" name="bills_on_time" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="bills_on_time" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you find you need to borrow money from friends/family/pension plan to make payments?</td><td width="100px"><input type="radio" name="borrow_money" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="borrow_money" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Have your borrowed from your pension plan in the last 12 months?</td><td width="100px"><input type="radio" name="borrow_pension" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="borrow_pension" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you behind on any of your credit card payments?</td><td width="100px"><input type="radio" name="credit_cards_behind" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="credit_cards_behind" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you behind on your mortgage payment?</td><td width="100px"><input type="radio" name="mortgage_behind" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="mortgage_behind" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you behind on your car payment?</td><td width="100px"><input type="radio" name="car_behind" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="car_behind" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Is your bank account restrained?</td><td width="100px"><input type="radio" name="bank_restrained" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="bank_restrained" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you being garnished?</td><td width="100px"><input type="radio" name="garnished" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="garnished" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are creditors calling you?</td><td width="100px"><input type="radio" name="creditors_calling" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="creditors_calling" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you able to make more than minimum payments on your credit cards?</td><td width="100px"><input type="radio" name="min_payments" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="min_payments" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Has your car been repossessed?</td><td width="100px"><input type="radio" name="car_repossessed" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="car_repossessed" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you owe back taxes?</td><td width="100px"><input type="radio" name="back_taxes" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="back_taxes" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Are you using credit cards to pay off other credit cards?</td><td width="100px"><input type="radio" name="credit_cards" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="credit_cards" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you move balances from one credit card to another to reduce payments?</td><td width="100px"><input type="radio" name="balance_transfers" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="balance_transfers" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Has your income decreased within the last six months?</td><td width="100px"><input type="radio" name="income_decresed" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="income_decresed" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Have you or your spouse lost your job?</td><td width="100px"><input type="radio" name="lost_job" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="lost_job" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you regularly charge for small items such as food, transit rides, toiletries?</td><td width="100px"><input type="radio" name="small_charges" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="small_charges" value="no" />&nbsp;No</td>
				</tr>
				<tr>
					<td>Do you have extra money to provide to your kids such as lunch money, going to the movies, etc.?</td><td width="100px"><input type="radio" name="extra_money" value="yes" />&nbsp;Yes&nbsp;<input type="radio" name="extra_money" value="no" />&nbsp;No</td>
				</tr>
			</table>
			<input type="button" name="next" value="Finish" class="btn btn-default" onclick="document.getElementById('info').style.display = 'block';" />
		</div>
		<br/>
		<div id="info" style="display:none">
			<br/>
			<div class="alert alert-warning">
			<h3>YOU MIGHT QUALIFY FOR BANKRUPTCY RELIEF...</h3>
			<p>Please fill out the contact information below so we can provide you a free consultation to better serve your needs and help your become debt free:</p>
			</div>
			<br/>
			<h3>Personal Information</h3>
			<table class="comfortable" border="0" cellspacing="5" cellpadding="0" width="100%">
				<tr>
					<td align="right">First Name:</td><td><input type="text" name="first" value="" class="form-control" /></td>
				</tr>
				<tr>
					<td align="right">Last Name:</td><td><input type="text" name="last" value="" class="form-control" /></td>
				</tr>
				<tr>
					<td align="right">Email:</td><td><input type="text" name="email" value="" class="form-control" /></td>
				</tr>
				<tr>
					<td align="right">Address:</td><td><input type="text" name="address" value="" class="form-control" /></td>
				</tr>
				<tr>
					<td align="right">City:</td><td><input type="text" name="city" value="" class="form-control" /></td>
				</tr>
				<tr>
					<td align="right">State:</td>
					<td>
						<select name="state" id="ctl00_cphMain_ddlState" class="form-text form-control">
							<option value=""></option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA" selected="selected">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="DC">Washington D.C.</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right">ZIP:</td><td><input type="text" name="zip" value="" class="form-control" /></td>
				</tr>
				<tr>
					<td align="right">Phone:</td><td><input type="text" name="phone" value="" class="form-control" /></td>
				</tr>
			</table>
			<input type="submit" name="next" class="btn btn-default" value="Become Debt-Free Today!" />
		</div>
	</form>
<?php $this->end(); ?>