<?php include('header.php'); ?>

<section>
	<div class="grid">
		<form name="input" action="signup.php" method="post" class="signup">
			<h1>Sign up now</h1>
			<p>Number of users you require:</p>
			<div class="grid">
				<div class="col-50">
					<input type="text" name="amount" placeholder="0" id="amount" />
				</div>
				<div class="col-50">
					&pound;<span id="signup-cost">0</span> per month
				</div>
			</div>
			<a href="#" class="submit-form disabled">Pay securely via GoCardless</a>
			<p><small>No payment will be taken until August the 31st and we offer a 100% money back guarantee for the first 6 months.</small></p>
		</form>
	</div>
</section>

<?php include('footer.php');?>