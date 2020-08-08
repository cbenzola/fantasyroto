"use strict";

$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );// JavaScript Document
	
	$(".reg_form").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					address: {
					required: true,
					
					},
					phoneNumber:{
						required:true
					},
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					address: "Required Field",
					phoneNumber: "Required Field"
				}
			
		
	});
});