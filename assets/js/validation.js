// Wait for the DOM to be ready
$(function() {
    
      $("form[name='register']").validate({
    // Specify validation rules
    rules: {
      
      fname: "required",
      lname: "required",
       email: "required",
      country: "required",
      password: "required",
      accept: {
       required : true
    }

      
    },
    // Specify validation error messages
    messages: {
      fname: "Please enter first name",
      lname: "Please enter last name",
       email: "Please enter email",
       country: "please choose your country",
       password: "please enter password",
          accept: {
        required : "accept the terms and condition"
    }
     
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  
  $("form[name='withdrawal']").validate({
    // Specify validation rules
    rules: {
      
      paypal_email: "required",
      paypal_name: "required",
       withdrawal_amount: {
           required:true
       },
      

      
    },
    // Specify validation error messages
    messages: {
      paypal_email: "Please enter your paypal registered email",
      paypal_name: "Please enter paypal registered name",
       
          withdrawal_amount: {
        required : "Please enter withdrawal amount"
    }
     
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
   
      $("form[name='login']").validate({
    // Specify validation rules
    rules: {
    
       email: "required",
       password: "required"
      
    },
    // Specify validation error messages
    messages: {
       email: "email is required",
       password: "password is required"
      
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
   $("form[name='addcatform']").validate({
    // Specify validation rules
    rules: {
      
      cat_name: "required"
      
    },
    // Specify validation error messages
    messages: {
      cat_name: "Please enter category",
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  $("form[name='editcatform']").validate({
    // Specify validation rules
    rules: {
      
      cat_name: "required"
      
    },
    // Specify validation error messages
    messages: {
      cat_name: "Please enter category",
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  $("form[name='subcatform']").validate({
    // Specify validation rules
    rules: {
      
      parent_id: "required",
      cat_name: "required"
    },
    // Specify validation error messages
    messages: {
      parent_id: "Please select category",
      cat_name: "please enter sub category name"
      
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  
  $("form[name='subcateditform']").validate({
    // Specify validation rules
    rules: {
      
      parent_id: "required",
      cat_name: "required"
    },
    // Specify validation error messages
    messages: {
      parent_id: "Please select category",
      cat_name: "please enter sub category name"
      
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
   $("form[name='paypalsettingform']").validate({
    // Specify validation rules
    rules: {
      
      paypalemail: "required",
      security_key: "required",
      code: "required"
      
      
    },
    // Specify validation error messages
    messages: {
      paypalemail: "Please enter email",
      security_key: "please enter security key",
      code: "please enter security code"
    
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  
  $("form[name='gigsform']").validate({
    // Specify validation rules
    rules: {
      
      title: "required",
      price: "required",
      category_id: "required",
       delivery_days: "required",
       tags: "required",
       details:"required",
       cover_img: "required"
       
    },
    // Specify validation error messages
    messages: {
      title: "Please enter title",
      price: "please enter price",
      category_id: "please select category",
      delivery_days: "please select delivery days",
      tags: "please fill tags",
      details: "please fill details",
      cover_img: "choose cover img"
      
    
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  $("form[name='editgigsform']").validate({
    // Specify validation rules
    rules: {
      
      title: "required",
      price: "required",
      category_id: "required",
       delivery_days: "required",
       tags: "required",
       details:"required",
       
       
    },
    // Specify validation error messages
    messages: {
      title: "Please enter title",
      price: "please enter price",
      category_id: "please select category",
      delivery_days: "please select delivery days",
      tags: "please fill tags",
      details: "please fill details",
      
      
    
    
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  $("form[name='comment_form']").validate({
    // Specify validation rules
    rules: {
      
      message: "required",
     
      
    },
    // Specify validation error messages
    messages: {
      message: "Please type your feedback"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  function scroll_on_error(className){
        $('html, body').animate({
            scrollTop: $("."+className).offset().top
        }, 1000);
        $("."+className).focus();
        $("."+className).css('border','red solid');
    }
   
    $("#submitform").click(function(e){
        if ($(".errorr").length > 0) {

           e.preventDefault();
            scroll_on_error('errorr');
        }
    }); 
   
  $("#regemail").keyup(function(e){
     $('#emailerr').text('');
     var email = $('#regemail').val(); 
     console.log(email);
      if(email!==""){
         $.ajax({
                type:'POST',
                url:'front/check_email',
                data:{'email':email},
                //console.log(data);
                success:function(data1){
                    if(data1>=1){
                    $('#emailerr').text('Email is taken.please enter a different email');
                    $(".regemail").addClass("errorr");
    
                  
                    e.preventDefault(e);
                    }else{
                        $('#emailerr').text(''); 
                          $(".regemail").css('border','1px solid #dcdcdc');
                        $(".regemail").removeClass("errorr");
                      
                    }

                }
              });
       }  
    });
  
    
    
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='client_form']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      theme_type: "required",
      "banner_files[]": {
                     required: true,
                     extension: "jpg|jpeg|png",
                     filesize: 20971520,  
        }
    },
    // Specify validation error messages
    messages: {
      theme_type: "Please select theme type",
      "banner_files[]": "Please select image",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
  
 
    $("form[name='blog_form']").validate({
    // Specify validation rules
    rules: {
      
      category_name: "required",
      blog_name: "required",
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      category_name: "Please select category name",
      blog_name: "Please enter blog name",
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
    
  $("form[name='mobile_portfolio']").validate({
    // Specify validation rules
    rules: {
      
      project_name: "required",
      url: "required",
      desc: "required",

      
    },
    
    // Specify validation error messages
    messages: {
      project_name: "Please enter project name",
      url: "Please enter project url",
      desc: "Please enter project description",
      //"technology[]":"Please select at least one technology",
      
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='web_portfolio']").validate({
    // Specify validation rules
    rules: {
      
      project_name: "required",
      url: "required",
      desc: "required",

      
    },
    
    // Specify validation error messages
    messages: {
      project_name: "Please enter project name",
      url: "Please enter project url",
      desc: "Please enter project description",
      //"technology[]":"Please select at least one technology",
      
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='testimonial_form']").validate({
    // Specify validation rules
    rules: {
      
      client_name: "required",
      designation: "required",
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      client_name: "Please enter client name",
      designation: "Please enter designation",
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='login_form']").validate({
    // Specify validation rules
    rules: {
      
      email: "required",
      password: "required",
      
    },
    // Specify validation error messages
    messages: {
      email: "Please enter email id",
      password: "Please enter password",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
   $("form[name='ticketform']").validate({
    // Specify validation rules
    rules: {
      
      subject: "required",
      description: "required",
      
    },
    // Specify validation error messages
    messages: {
      subject: "Subject is required",
      description: "Description is required",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  $("form[name='home_page']").validate({
    // Specify validation rules
    rules: {
      
      
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  $("form[name='brand_form']").validate({
    // Specify validation rules
    rules: {
      
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
  $("form[name='case_study_category_form']").validate({
    // Specify validation rules
    rules: {
      
      category: "required",
      
    },
    // Specify validation error messages
    messages: {
      category: "Please enter category name",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
     $("form[name='case_study_form']").validate({
    // Specify validation rules
    rules: {
      
      category_name: "required",
      project: "required",
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      category_name: "Please select category name",
      project: "Please enter project name",
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
    $("form[name='portfolio_category_form']").validate({
    // Specify validation rules
    rules: {
      
      category: "required",
      
    },
    // Specify validation error messages
    messages: {
      category: "Please enter category name",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
 $("form[name='portfolio_form']").validate({
    // Specify validation rules
    rules: {
      
      category_name: "required",
      project: "required",
      
    },
    // Specify validation error messages
    messages: {
      category_name: "Please select category name",
      project: "Please enter project name",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
   $("form[name='news_form']").validate({
    // Specify validation rules
    rules: {
      
      title: "required",
      link: "required",
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      title: "Please enter news title",
      link: "Please enter source url",
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='affliate_form']").validate({
    // Specify validation rules
    rules: {
      
      title: "required",
      link: "required",
      desc: "required",
      
    },
    // Specify validation error messages
    messages: {
      title: "Please enter product title",
      link: "Please enter source url",
      desc: "Please enter description",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='forget_pass']").validate({
    // Specify validation rules
    rules: {
      
      email: "required",
      
    },
    // Specify validation error messages
    messages: {
      email: "Please enter email id",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
 $("form[name='reset_form']").validate({
    // Specify validation rules
    rules: {
                new_password: "required",
                c_password: {
                    equalTo: "#new_password"
                }
            },
            messages: {
                new_password: " Enter Password",
                c_password: " Enter Confirm Password Same as Password"
            },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
    $("form[name='package_form']").validate({
    // Specify validation rules
    rules: {
      
      type: "required",
       amt: "required",
        time: "required",
      
    },
    // Specify validation error messages
    messages: {
      type: "Please select package type",
      amt: "Please enter amount",
      time: "Please enter time",
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
  
   $("form[name='change_password']").validate({
    // Specify validation rules
    rules: {
                old_password: "required",
                new_password: "required",
                c_password: {
                    equalTo: "#new_password"
                }
            },
            messages: {
                old_password: " Enter Old Password",
                new_password: " Enter New Password",
                c_password: " Enter Confirm Password Same As New Password"
            },
    submitHandler: function(form) {
      form.submit();
    }
  });
});