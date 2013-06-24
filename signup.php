<?php include('header.php'); ?>

<section class="dark house signup lines">
	<div class="grid">
		<div class="col-50">
			<h1>Sign Up Now</h1>
			<p>Number of users you require:</p>
			<form name="input" action="signup.php" method="post">
				<input type="number" name="amount" placeholder="0" id="amount" min="0" />
				<a href="javascript:void(0);" class="hoowla-form-button submit-form disabled">Pay securely via GoCardless</a>
			</form>
		</div>

		<div class="col-50">
			<p class="price-per-month"><strong>&pound;<span id="signup-cost">0</span></strong> <small>per month</small></p>
			<p>No payment will be taken until 31st August and we offer a 100% money back guarantee for the first 6 months.</p>
		</div>
	</div>
</section>



			<section class="green plan-includes">
				<div class="grid">
					<div class="col-25">
						<h2>all our plans <span>INCLUDE</span></h2>
					</div>
					<div class="col-75">
						<ul>
							<li>Unlimited customer support</li>
							<li>No setup fee</li>
							<li>Access anywhere</li>
							<li>Cancel anytime online</li>
							<li>No contract</li>
							<li>Automatic backup</li>
						</ul>
					</div>
				</div>
			</section>

<section class="light info-grid">

	<div class="grid">
		<!-- TODO Many Alts! -->
		<div class="col-25">
			<img src="images/phone.png" alt="Reduce Phone Calls" />
			<h3>Reduce Phone Calls</h3>
			<p>Reduce the hassle with less phone calls and more online bidding.</p>
		</div>
		<div class="col-25">
			<img src="images/speachbubble.png" alt="Improved Communication" />
			<h3>Improved Communication</h3>
			<p>Communication is more fluid and accessible with data backed up online.</p>
		</div>
		<div class="col-25">
			<img src="images/arrowbox.png" alt="No Installation Required" />
			<h3>No Installation Required</h3>
			<p>All you need is an internet connection to be able to access your account online.</p>
		</div>
		<div class="col-25">
			<img src="images/computericon.png" alt="No Setup Fee" />
			<h3>No Setup Fee</h3>
			<p>We won’t charge you for the set up, our software is simple and easy to use.</p>
		</div>
	</div>

</section>

<?php include('footer.php');?>
