$(function() {

	$("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    
		preventSubmit: true,

		submitError: function($form, event, errors) {
			console.log("Submit error encountered!");
		},

		submitSuccess: function($form, event) {
			
			event.preventDefault();
			
			var name = $("input#name").val();
			var email = $("input#email").val();
			var phone = $("input#phone").val();
			var message = $("textarea#message").val();
			
			$("#sendMessageButton").prop("disabled", true);
			
			grecaptcha.ready(function(){
				
				grecaptcha.execute('6Ld-SrEUAAAAAG27GM-hRkH5oNS10phJAoa2UANu', {action: 'contact'})
				
				.then(function(token){
					$.post('mail/verify.php',
					{
						response: token
					},
					function(data, status){
						
						var result = JSON.parse(data);
						
						if (result['success'] == false){
							$('#success').text('Αδυναμία αποστολής μηνύματος. Ξαναπροσπαθήστε');
							$("#sendMessageButton").prop("disabled", false);
							return;
						}
											
						if (result['score'] < 0.5){
							$('#success').text('Αδυναμία αποστολής μηνύματος. Ξαναπροσπαθήστε');
							$("#sendMessageButton").prop("disabled", false);
							return;
						}
						
						$.post('mail/sendmail.php',
						{
							name: name,
							email: email,
							telephone: phone,
							message: message
						},
						function(data, status){
							$("#sendMessageButton").prop("disabled", false);
							$('#success').html(data);
						});
						
					});
				})
				
			});
			
		},

		filter: function() {
			return $(this).is(":visible");
		}

	});

	$("a[data-toggle=\"tab\"]").click(function(e) {
		e.preventDefault();
		$(this).tab("show");
	});
	
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
	$('#success').html('');
});
