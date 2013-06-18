
$(document).ready( function() {

	// Start Dev Bar

	var linesOn = false;
	var userLogin = true;

	$('#lines-on-button').click( function() {
		if (linesOn) {
			$('header *, main *, footer *').removeClass('show-lines');
			$(this).html('Lines On');
		} else {
			$('header *, main *, footer *').addClass('show-lines');
			$(this).html('Lines Off');
		}
		linesOn = !linesOn;
		return false;
	});

	$('#user-login-button').click( function() {
		if (!userLogin) {
			$('.user-details').show();
			$(this).html('User Logged In');
		} else {
			$('.user-details').hide();
			$(this).html('User Logged Out');
		}
		userLogin = !userLogin;
		return false;
	});

	$('#dev-bar #hide-button').click( function() {
		$('#dev-bar').hide();
	})

	// End Dev Bar

});