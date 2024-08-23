@extends('front.layout')
@section('_content')
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Contact Us</span>
          <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- contact form start -->
<section class="contact-form-wrap section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<form id="contact-form" class="contact__form" method="post" action="index.html">
					<h3 class="text-md mb-4">Contact Form</h3>
					<div class="form-group">
						<input name="name" type="text" class="form-control" placeholder="Your Name" required>
					</div>
					<div class="form-group">
						<input name="email" type="email" class="form-control" placeholder="Email Address" required>
					</div>
					<div class="form-group-2 mb-4">
						<textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
					</div>
					<button class="btn btn-main" name="submit" type="submit">Send Message</button>
				</form>
			</div>

			<div class="col-lg-5 col-sm-12">
				<div class="contact-content pl-lg-5 mt-5 mt-lg-0">
					<span class="text-muted">We are Professionals</span>
					<h2 class="mb-5 mt-2">Don’t Hesitate to contact with us for any kind of information</h2>

					<ul class="address-block list-unstyled">
						<li>
							<i class="ti-direction mr-3"></i>North Main Street,Brooklyn Australia
						</li>
						<li>
							<i class="ti-email mr-3"></i>Email: contact@mail.com
						</li>
						<li>
							<i class="ti-mobile mr-3"></i>Phone:+88 01672 506 744
						</li>
					</ul>

					<ul class="social-icons list-inline mt-5">
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>




<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
  <span class="icon fa fa-angle-up"></span>
</div>


<!-- 
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4.3.1 -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!--  Magnific Popup-->
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="plugins/counterup/jquery.waypoints.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>

<!-- Google Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d387132.72890386515!2d-74.007347!3d40.707571!3m2!1i1024!2i768!4f13.1!5e0!3m2!1saz!2sus!4v1724431123020!5m2!1saz!2sus" width="1300" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<script src="js/script.js"></script>

</body>

</html>

        @endsection