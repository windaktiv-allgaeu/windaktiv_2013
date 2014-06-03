// contact form validation
$(document).ready(function(){
   $('#fenster_zu1').addClass('hide');
   
   
	         var validator = $('#grundstueck').validate(
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
		              required: true
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
		    	$('#grundstueck').submit(function() {
				    $.post('grundstuecksend.php', {vorname: $('#vorname').val(), name: $('#name').val(), ort: $('#ort').val(), email: $('#email').val(), telefon: $('#telefon').val(),
				     nachricht: $('#nachricht').val(), recaptcha_challenge_field: $('#recaptcha_challenge_field').val(), recaptcha_response_field: $('#recaptcha_response_field').val(), contactFormSubmitted: 'yes'}, 
				     
				     function(data) {
				        $("#formResponse").html(data).fadeIn('slow');
				        $('#recaptcha_response_field').val(''); /* Clear the inputs */
				    }, 'text');
				    return false;
				    validator.resetForm();
				});

$('#grundstueckreset').click(function () { 
validator.resetForm();
$("#formResponse").hide();
$('.control-group').removeClass('error');
$('.control-group').removeClass('success');
}); 

$('button#abbrechen').click(function () { 
validator.resetForm();
$("#formResponse").hide();
$('.control-group').removeClass('error');
$('.control-group').removeClass('success');

$(':input','#grundstueck')
 .not(':button, :submit, :reset, :hidden')
 .val('')
 .removeAttr('checked')
 .removeAttr('selected');
});
 


			}); // end document.ready
			
			
		
