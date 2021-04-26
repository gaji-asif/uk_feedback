<!-- footer start -->
<div class="footer_section bg_gray">
    <div class="container">
		<div class="row">			
			<div class="col-lg-3 col-md-6 col-12 footer_col">
				<div class="footer_widget">
				  <div class="text_widget">
						<div class="footer_logo">
							<a href="index.html">
								<img src="<?=base_url()?>assets/front/images/footer_logo.png" alt="Logo" class="img-fluid">
							</a>
						</div>
					<p>Now, some of these gigs are useful, creative and practical things that will be of value to your readers and customers. Others are just bizarre. Here’s a small sample of that stuff.</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 footer_col">
				<div class="footer_widget">
				  <h4 class="widget_title">Accounts</h4>
				  <div class="footer_menu">
					<ul>
						<li><a href="<?=base_url()?>login">Login</a></li>
						<li><a href="<?=base_url()?>signup">Signup</a></li>
						<li><a href="<?=base_url()?>affiliates">Affiliates</a></li>
						<li><a href="<?=base_url()?>get-money">Get Money</a></li>
						<li><a href="<?=base_url()?>about-us">About Us</a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 footer_col">
				<div class="footer_widget">
				  <h4 class="widget_title">Useful Links</h4>
				  <div class="footer_menu">
					<ul>
						<li><a href="<?=base_url()?>terms-condition">Terms of service</a></li>
						<li><a href="<?=base_url()?>privacy-policy">Privacy policy</a></li>
						<li><a href="<?=base_url()?>how-it-works">how it works</a></li>	
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-12 footer_col">
				<div class="footer_widget">
				  <h4 class="widget_title">Follow us on</h4>
				  <div class="footer_social_icon">
					<a href="https://www.facebook.com/ukfeedback" class="icons"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
					<a href="https://twitter.com/UKfeedback2" class="icons"><i class="fab fa-twitter"></i><span>Twitter</span></a>
					<a href="https://www.instagram.com/ukfeedback/" class="icons"><i class="fab fa-instagram"></i><span>instagram</span></a>
					<a href="https://www.linkedin.com/in/ukfeedback/" class="icons"><i class="fab fa-linkedin"></i><span>linkedin</span></a>
					<a href="https://www.youtube.com/channel/UCXg8hHqzdmz0WkP0C2RbX9Q/" class="icons"><i class="fab fa-youtube"></i><span>youtube</span></a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer End -->
<!-- footer bottom Start -->
<div class="footer_bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-12">
				<div class="copyright_text text-center">
					<p>Copyright 2021 @ Gigs All Rights Reserved. Developed by <a href="https://oxysquad.com/">oxysquad technologies</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer bottom End -->
<!-- jquery library js -->
<script src="<?=base_url()?>assets/front/js/jquery.min.js"></script>
<!-- jquery library js -->
<!-- bootstrap js file-->
<script src="<?=base_url()?>assets/front/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/front/js/bootstrap.js"></script>
<script src="<?=base_url()?>assets/front/js/bootstrap-select.js"></script>
<!-- bootstrap js file-->
<!-- owl carousel js file-->
<script src="<?=base_url()?>assets/front/js/plugins/slider/owl.carousel.min.js"></script> 
<!-- owl carousel js file--> 
<!-- gallery js file-->
<script src="<?=base_url()?>assets/front/js/plugins/gallery/jquery.magnific-popup.js"></script>
<!-- gallery js file-->
<!-- jquery ui file-->
<script src="<?=base_url()?>assets/front/js/plugins/jqueryui/jquery-ui.min.js"></script>
<!-- jquery ui file-->
<!-- counter number js file-->
<script src="<?=base_url()?>assets/front/js/plugins/counter/jquery.countTo.js"></script>
<script src="<?=base_url()?>assets/front/js/plugins/counter/jquery.appear.js"></script>
<!-- counter number js file-->
<!-- animation js file-->
<script src="<?=base_url()?>assets/front/js/plugins/animation/wow.min.js"></script>
<!-- animation js file-->
<!-- Mixitup js file-->
<script src="<?=base_url()?>assets/front/js/jquery.mixitup.min.js"></script>
<!-- Mixitup js file-->
<script type="text/javascript" src="<?=base_url()?>assets/front/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</body>
<!--body end -->
</html>
<script>
$(function(){

$('.addons').change(function() {
   var total =parseInt($(this).attr('data-total'));
  
    $('.addons:checked').each(function() {
        total = total + parseInt($(this).attr('data-price'));
         
    });
 
 
	console.log($("#paypal_price").val());
    $("#total_amt").text(total);
    $("#stripe_price_submit").text(total);
     $("#total_price").val(total);
     $("#paypal_price").val(total);
     $("#stripe_price").val(total);
});
    

});
</script>