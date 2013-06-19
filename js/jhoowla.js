
$(document).ready( function() {

	calculateCost();

	$('#amount').change( function() {
		calculateCost();
	});

	$('.submit-form').click( function() {
		_gaq.push(['_trackPageview', '/signupbuttonclick']);
	});

});



function calculateCost() {
	var inputAmount = $('#amount').val();

	// If it's zero, blank or a space.
	if ( inputAmount == 0 || inputAmount == '' || inputAmount == ' ' ) {
		$('.submit-form').attr('href', '#').addClass('disabled');
	}
	// If it's a letter
	else if (! /^[0-9]+$/.test( inputAmount )) {
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