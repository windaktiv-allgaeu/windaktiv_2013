// contact form validation
	    	$(document).ready(function(){
   
	         $('#grundstueck').validate(
		         {
		          rules: {
		            vorname: {
		              minlength: 2,
		              required: false
		            },
		            name: {
		              minlength: 2,
		              required: true
		            },
		            ort: {
		              minlength: 2,
		              required: false
		            },
		            email: {
		              required: true,
		              email: true
		            },
		            telefon: {
		              minlength: 8,
		              required: true,
		              number: true
		            },
		            
		            nachricht: {
		              minlength: 20,
		              required: false
		            }
		          },
		          highlight: function(label) {
		            $(label).closest('.control-group').addClass('error');
		          },
		          success: function(label) {
		            label
		              .text('OK!').addClass('valid')
		              .closest('.control-group').addClass('success');
		          }
		         });

		    	// contact form submission, clear fields, return message
		    	$("#grundstueck").submit(function() {
				    $.post('grundstuecksend.php', {vorname: $('#vorname').val(), name: $('#name').val(), ort: $('#ort').val(), email: $('#email').val(), telefon: $('#telefon').val(),
				     nachricht: $('#nachricht').val(), recaptcha_challenge_field: $('#recaptcha_challenge_field').val(), recaptcha_response_field: $('#recaptcha_response_field').val(), contactFormSubmitted: 'yes'}, 
				     
				     function(data) {
				        $("#formResponse").html(data).fadeIn('100');
				        $('#recaptcha_response_field').val(''); /* Clear the inputs */
				    }, 'text');
				    return false;
				});

			}); // end document.ready
			
			
		
//			$("input:reset").click(function () { 
//			
//			$('.controlgroup').removeClass('valid').fadeOut(1000);			
//			return false; }); 