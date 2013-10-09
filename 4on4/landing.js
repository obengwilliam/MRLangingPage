$(function(){
	
	feedback = {

		'validateEmail' : function() {				
			var ele = $('#feedbackEmailField');				
			var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/;
			
			if ( ele.val() == 0 ){
				validate.errors = true;					
				$('#feedback-invalid-email').css({"display":"block"});		
		
			} else if( !emailPattern.test(ele.val()) ){
				validate.errors = true;					
				$('#feedback-invalid-email').css({"display":"block"});
		
			} else {
				$('#feedback-invalid-email').css({"display":"none"});						
		
			}
		},
		
		'submitFeedback' : function() {
			if(!validate.errors) {
				$.ajax({
					type: "POST",
				   	url: "http://localhost/mrlandingpage/4on4/feedback.php",
				   	data: "feedback_name="+$('#feedbackNameField').val()+"&feedback_email="+$('#feedbackEmailField').val()+"&feedback_message="+$('#feedbackMessageField').val(),
				   	success: function(msg){
				   		if(msg==''){
							alert("Success!");
						}else{
							alert("Failure!");									
						}
				   	}
				});
			}
		}
						
	};
	
	$('#feedbackBtn').live('click', function(){
		feedback.errors = false;
		feedback.validateEmail();
		feedback.submitFeedback();
		return false;
	});			
	
	$('#feedbackEmailField').live('change', feedback.validateEmail);
	
	validate = {
		
		'email' : function() {				
			var ele = $('#emailField');				
			var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/;
			
			if ( ele.val() == 0 ){
				validate.errors = true;					
				$('#invalid-email').css({"display":"block"});		
		
			} else if( !emailPattern.test(ele.val()) ){
				validate.errors = true;					
				$('#invalid-email').css({"display":"block"});
		
			} else {
				$('#invalid-email').css({"display":"none"});						
		
			}
		},
		
		'submitRequest' : function() {
			if(!validate.errors) {
				$.ajax({
					type: "POST",
				   	url: "http://localhost/mrlandingpage/4on4/early_birds.php",
				   	data: "early_bird_name="+$('#nameField').val()+"&early_bird_email="+$('#emailField').val(),
				   	success: function(msg){
				   		if(msg==''){
							//alert("Success!");
							$("#signUpForUpdates").prepend("<div class='alert alert-block alert-success onTop'>"+
									  "<button type='button' class='close' data-dismiss='alert'>&times;</button>"+
									  "<h4>Thanks!</h4>"+
									  "You will be the first to know what we are doing"+
								"</div>"
							);
							
							$("#signUpForUpdates").append("<div class='inactive'></div>");
							
							$("#nameField").val("");
							$("#emailField").val("");
							
						}else{
							alert("Failure!");									
						}
				   	}
				});
			}
		}
	};
	
	$('#notifyBtn').live('click', function(){
		validate.errors = false;
		validate.email();
		validate.submitRequest();
		return false;
	});
	
	$('#emailField').live('change', validate.email);
	
});