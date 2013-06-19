
$(document).ready( function() {

	// Run onLoad
	calculateCost();

	// Run onChange
	// http://stackoverflow.com/questions/1948332/detect-all-changes-to-a-input-type-text-immediately-using-jquery
	$('#amount').bind('propertychange keyup input paste', function(event) {
		calculateCost();
	});

	// Track Sign-ups
	$('.submit-form').click( function() {
		ga('send', 'pageview', '/signupbuttonclick');
	});

});



function calculateCost() {
	var inputAmount = $('#amount').val();

	// If it's zero, blank or a space.
	if ( inputAmount == 0 || inputAmount == '' || inputAmount == ' ' ) {
		$('#signup-cost').html('0');
		$('.submit-form').attr('href', '#').addClass('disabled');
	}
	// If it's a letter
	else if (! /^[0-9]+$/.test( inputAmount )) {
		$('#signup-cost').html('0');
		$('.submit-form').attr('href', '#').addClass('disabled');
	}
	else {
		// Valid.
		// Calculate Cost
		$('#signup-cost').html( inputAmount * 45 );

		// Get URL
		$.get('getGoCardless.php?amount='+inputAmount, function(data) {
			$('.submit-form').attr('href', data).removeClass('disabled');
		});
	}
}