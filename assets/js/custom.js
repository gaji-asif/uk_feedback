$(document).ready(function() {

    // $('#submitform').on('click', function() {
    // 		$("#submitform").attr("disabled", "disabled");
    // 		var name = $('#name').val();
    // 		var email = $('#email').val();
    // 		var user_id = $('#user_id').val();
    // 		var gig_id = $('#user_id').val();
    // 		var message = $('#user_id').val();
    // 		var city = $('#city').val();
    // 		if(name!="" && email!="" && phone!="" && city!=""){
    // 			$.ajax({
    // 				url: "save.php",
    // 				type: "POST",
    // 				data: {
    // 					name: name,
    // 					email: email,
    // 					phone: phone,
    // 					city: city				
    // 				},
    // 				cache: false,
    // 				success: function(dataResult){
    // 					var dataResult = JSON.parse(dataResult);
    // 					if(dataResult.statusCode==200){
    // 						$("#butsave").removeAttr("disabled");
    // 						$('#fupForm').find('input:text').val('');
    // 						$("#success").show();
    // 						$('#success').html('Data added successfully !'); 						
    // 					}
    // 					else if(dataResult.statusCode==201){
    // 					   alert("Error occured !");
    // 					}

    // 				}
    // 			});
    // 		}
    // 		else{
    // 			alert('Please fill all the field !');
    // 		}
    // 	});
    // Delete 
    $('.blog_delete').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteBlog',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });


    // Delete 
    $('.delete_c').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteCaseStudy',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    // Delete 
    $('.delete_news').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteNews',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    // Delete 
    $('.delete_aff').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteAffiliate',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });



    // Delete 
    $('.delete_pack').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deletePackage',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    // Delete 
    $('.delete_brand').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteBrands',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    // Delete 
    $('.delete_port').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deletePortfolio',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    // Delete 
    $('.delete_test').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteTestimonial',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    // Delete 
    $('.delete_p_enquiry').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deletePackageEnquiry',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    $('.delete_ca').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteCareerEnquiry',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });
    $('.delete_contact').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteContactEnquiry',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });
    $(".edit_category_modal").click(function() {
        var id = $(this).attr("data-id");
        var cat = $(this).attr("data-cat");
        $("#edit_cat_id").val(id);

        $("#edit_cat").val(cat);

    });
    $("#c_btn").click(function() {

        var id = $("#edit_cat_id").val();

        var cat = $("#edit_cat").val();
        //alert(cat);
        // AJAX Request
        if (cat != '') {
            $.ajax({
                url: url + 'admin/editCaseStudyCategory',
                type: 'POST',
                data: { id: id, cat: cat },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        //alert('Record updated');
                        window.location.reload();
                    }

                }
            });
        }
    });

    $(".edit_portf_modal").click(function() {
        var id = $(this).attr("data-id");
        var cat = $(this).attr("data-cat");
        $("#port_id").val(id);

        $("#category_n").val(cat);

    });
    $("#port_btn").click(function() {

        var id = $("#port_id").val();

        var cat = $("#category_n").val();
        //alert(cat);
        // AJAX Request
        if (cat != '') {
            $.ajax({
                url: url + 'admin/editPortfolioCategory',
                type: 'POST',
                data: { id: id, cat: cat },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        //alert('Record updated');
                        window.location.reload();
                    }

                }
            });
        }
    });

    $(".edit_b_modal").click(function() {
        var id = $(this).attr("data-id");
        var cat = $(this).attr("data-cat");
        $("#b_id").val(id);

        $("#b_category").val(cat);

    });
    $("#bl_btn").click(function() {

        var id = $("#b_id").val();

        var cat = $("#b_category").val();
        //alert(cat);
        // AJAX Request
        if (cat != '') {
            $.ajax({
                url: url + 'admin/editBlogCategory',
                type: 'POST',
                data: { id: id, cat: cat },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        //alert('Record updated');
                        window.location.reload();
                    }

                }
            });
        }
    });

    $('.delete_p_cat').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deletePortfolioCat',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    $('.delete_case_cat').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteCaseCat',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    $('.delete_b_cat').click(function() {
        var el = this;

        // Delete id
        var deleteid = $(this).data('id');

        // Confirm box
        var confirmation = confirm("Do you really want to delete record?");

        if (confirmation) {

            // AJAX Request
            $.ajax({
                url: url + 'admin/deleteBlogCat',
                type: 'POST',
                data: { id: deleteid },
                success: function(response) {

                    // Removing row from HTML Table
                    if (response == 1) {
                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });
                    } else {
                        alert('Record not deleted.');
                    }

                }
            });
        }

    });

    $('.msg_send_btn').on("click", function() {

        var msg = $(".write_msg").val();
        $(".write_msg").val('');
        var time = new Date();
        var current_time = time.toLocaleString('en-US', {
            hour: 'numeric',
            minute: 'numeric',
            hour12: true
        })
        var message = `<div class="outgoing_msg">
							<div class="sent_msg">
								<p>${msg}</p>
							</div>
						</div>`

        $('.msg_history').append(message);

        var url = 'https://www.localhost/uk_feedback/admin/chat'
            // var url = $('#url').val();
        var gig_id = $("#gig_id").val();
        var user_id = $("#user_id").val();
        var gigs_title = $("#gigs_title").val();
        var username = $("#username").val();
        $.ajax({
            type: "POST",
            url: url,
            data: {
                message: msg,
                gig_id: gig_id,
                user_id: user_id,
                gigs_title: gigs_title,
                username: username,
            },
            success: function(data) {

            },
            error: function() {

            }
        });


    });
});