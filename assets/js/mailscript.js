// 
//	jQuery Validate example script
//
//	Prepared by David Cochran
//	
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions
	
		$('#newsletter_validate').validate({
	    rules: {
	      vorname: {
	        minlength: 2,
	        required: false
	      },
	      name: {
	        minlength: 2,
	        required: true
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
	      message: {
	        minlength: 2,
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
	  
	  
	  $('#grundstueck_validate').validate({
	    rules: {
	      vorname: {
	        minlength: 2,
	        required: false
	      },
	      name: {
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
	      message: {
	        minlength: 2,
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
	  
	  
	  
	  
	  
}); // end document.ready





















//$(document).ready(function(){
//
//		
//		$('#contact-form').validate({
//	    rules: {
//	      name: {
//	        minlength: 2,
//	        required: true
//	      },
//	      email: {
//	        required: true,
//	        email: true
//	      },
//	      subject: {
//	      	minlength: 2,
//	        required: true
//	      },
//	      message: {
//	        minlength: 2,
//	        required: true
//	      }
//	    },
//	    highlight: function(label) {
//	    	$(label).closest('.control-group').addClass('error');
//	    },
//	    success: function(label) {
//	    	label
//	    		.text('OK!').addClass('valid')
//	    		.closest('.control-group').addClass('success');
//	    }
//	  });
//	  
//}); // end document.ready