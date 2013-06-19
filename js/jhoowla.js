
$(document).ready( function() {

	$('#amount').keyup( function() {

		// If it's zero, blank or a space.
		if ( $(this).val() == 0 || $(this).val() == '' || $(this).val() == ' ' ) {
			$('.submit-form').attr('href', '#').addClass('disabled');
		}
		// If it's a letter
		else if (! /^[0-9]+$/.test( $(this).val() )) {
			$('.submit-form').attr('href', '#').addClass('disabled');
		}
		else {
			// Valid.
			// Calculate Cost
			$('#signup-cost').html( $(this).val() * 45 );

			// Get URL
			$.get('getGoCardless.php?amount='+$(this).val(), function(data) {
				$('.submit-form').attr('href', data).removeClass('disabled');
			});
		}
	});


	$('.submit-form').click( function() {
		_gaq.push(['_trackPageview', '/signupbuttonclick']);
	})

});