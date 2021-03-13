 $(function() {
     
    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[\w.]+$/i.test(value);
    }, "Letters, numbers, and underscores only please");
    
   $("form[name='contact_form']").validate({
      
    // Specify validation rules
    rules: {
      title: "required",
      fname: {
          required: true,
          alphanumeric	: true
      },
      lname: {
          required: true,
          alphanumeric	: true
      },
      company: "required",
      country: "required",
      service: "required",
      org: "required",
	  message: "required",
      email: {
       required: true,
       email: true
     },
     mobile_n: {
      required: true,
      number: true
    },
      
    },
    // Specify validation error messages
    messages: {
      title: "Please select  title",
      fname: {
          required: "Please enter first name.",
          alphanumeric: "Please enter alpha numeric values only."
      },
      lname: {
          required: "Please enter last name.",
          alphanumeric	: "Please enter alpha numeric values only."
      },
      company: "Please enter company name",
      service: "Please select service",
      country: "Please select country",
	  message: "Please enter message",
      org: "Please select organization",
      email: {
         required: "Please enter email id",
         email: "Please enter valid email address"
      },
      mobile_n: {
        required: "Please enter mobile number",
        number: "Please enter valid mobile number"
      },
    },
    submitHandler: function(form) {
       //alert("Please wait...");return false; 
       form.submit();
    }
  });
  
  $("form[name='career_form']").validate({
    // Specify validation rules
    rules: {
      
      
      name: {
          required: true,
          alphanumeric:true
      },
      skill: "required",
      message: "required",
      age: "required",	 
	  upload: {
            required: true, 
              uploadFile:true,			
        },
      email: {
      required: true,
      email: true
     },
     phone: {
      required: true,
      number: true
    },
      
    },
    // Specify validation error messages
    messages: {
      skill: "Please select  skill",
      name: {
          required:"Please enter name",
          alphanumeric	: "Please enter alpha numeric values only."
      },
      message: "Please enter message",
      age: "Please enter age",
	  upload: "Please upload resume doc or pdf file",
      email: {
      required: "Please enter email id",
      email: "Please enter valid email address"
    },
    phone: {
      required: "Please enter mobile number",
      number: "Please enter valid mobile number"
    },
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
   $('#career_form').validate({
        ignore: [],
        rules: {
			name: {
                required: true,
                alphanumeric: true
                //accept: 'docx|doc'
            },
			email: {
                required: true,
				 email: true
                //accept: 'docx|doc'
            },
			phone: {
                required: true,
				number: true
                //accept: 'docx|doc'
            },
			age: {
                required: true,
                //accept: 'docx|doc'
            },
			skill: {
                required: true,
                //accept: 'docx|doc'
            },
			message: {
                required: true,
                //accept: 'docx|doc'
            },
            upload: {
                required: true,
                accept: 'docx|doc'
            }
        }
    });

  
   $('#update_profile').validate({
        rules: {
           
            upload: {
                required: true,
                extension: "jpg,jpeg",
                filesize: 5,
            }
        },
    });
  
     $("form[name='package_detail']").validate({
    // Specify validation rules
    rules: {
      
      name: {
          required: true,
          alphanumeric: true
      },
	  countr: "required",
      
      email: {
      required: true,
      email: true
     },
     mobile: {
      required: true,
      number: true
    },
      
    },
    // Specify validation error messages
    messages: {
      name: {
          required: "Please enter name",
          alphanumeric	: "Please enter alpha numeric values only."
      },      
	  countr: "Please Select Country",
      email: {
      required: "Please enter email id",
      email: "Please enter valid email address"
    },
    mobile: {
      required: "Please enter mobile number",
      number: "Please enter valid mobile number"
    },
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
 });