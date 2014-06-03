// contact form validation
$(document).ready(function(){
   $('#fenster_zu2').addClass('hide');
   
   
	         var validator = $('#newsletter').validate(
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
		              required: false,
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
		    	$('#newsletter').submit(function() {
				    $.post('newslettersend.php', {vorname: $('#vorname2').val(), name: $('#name2').val(), ort: $('#ort2').val(), email: $('#email2').val(), telefon: $('#telefon2').val(),
				     nachricht: $('#nachricht2').val(), contactFormSubmitted: 'yes'}, 
				     
				     function(data) {
				        $("#formResponse2").html(data).fadeIn('slow');
				    }, 'text');
				    return false;
				    validator.resetForm();
				});

$('#newsletterreset').click(function () { 
validator.resetForm();
$("#formResponse2").hide();
$('.control-group').removeClass('error');
$('.control-group').removeClass('success');
}); 

$('button#abbrechen2').click(function () { 
validator.resetForm();
$("#formResponse2").hide();
$('.control-group').removeClass('error');
$('.control-group').removeClass('success');

$(':input','#newsletter')
 .not(':button, :submit, :reset, :hidden')
 .val('')
 .removeAttr('checked')
 .removeAttr('selected');
});
 


			}); // end document.ready
			
			
		
