@extends('front.layout')
@section('_content')


<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Latest works</span>
          <h1 class="text-capitalize mb-4 text-lg">Portfolio</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item text-white-50">Latest works</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section portfolio start -->
<section class="section portfolio pb-0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<span class="h6 text-color">Our works</span>
					<h2 class="mt-3 content-title">We have done lots of works, lets check some</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row portfolio-gallery">
			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">
					<a href="images/portfolio/1.jpg" class="popup-gallery">
                    <img src="{{ asset('assets/front/images/portfolio/1.jpg') }}" alt="portfolio" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Project california</h3>
							<p class="text-white-50">Web Development</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">
					<a href="images/portfolio/2.jpg" class="popup-gallery">
                    <img src="{{ asset('assets/front/images/portfolio/2.jpg') }}" alt="portfolio" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Project california</h3>
							<p class="text-white-50">Web Development</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">
					<a href="images/portfolio/3.jpg" class="popup-gallery">
                    <img src="{{ asset('assets/front/images/portfolio/3.jpg') }}" alt="portfolio" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Project california</h3>
							<p class="text-white-50">Web Development</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">
					<a href="images/portfolio/4.jpg" class="popup-gallery">
                    <img src="{{ asset('assets/front/images/portfolio/4.jpg') }}" alt="portfolio" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Project california</h3>
							<p class="text-white-50">Web Development</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative  mb-4">
					<a href="images/portfolio/5.jpg" class="popup-gallery">
                    <img src="{{ asset('assets/front/images/portfolio/5.jpg') }}" alt="portfolio" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Project california</h3>
							<p class="text-white-50">Web Development</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="portflio-item position-relative mb-4">
					<a href="images/portfolio/6.jpg" class="popup-gallery">
                    <img src="{{ asset('assets/front/images/portfolio/6.jpg') }}" alt="portfolio" class="img-fluid w-100">

						<i class="ti-plus overlay-item"></i>
						<div class="portfolio-item-content">
							<h3 class="mb-0 text-white">Project california</h3>
							<p class="text-white-50">Web Development</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section portfolio END -->

<footer class="footer section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Company</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="about.html">Terms & Conditions</a></li>
            <li><a href="about.html">Privacy Policy</a></li>
            <li><a href="cobtact.html">Support</a></li>
            <li><a href="cobtact.html">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Quick Links</h4>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="about.html">About</a></li>
            <li><a href="service.html">Services</a></li>
            <li><a href="blog-grid.html">Blogs</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
        <div class="widget">
          <h4 class="text-capitalize mb-4">Subscribe Us</h4>
          <p>Subscribe to get latest news article and resources </p>

          <form action="#" class="sub-form">
            <input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
            <a href="#" class="btn btn-main btn-small">subscribe</a>
          </form>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="widget">
          <div class="logo mb-4">
            <h3>Mega<span>kit.</span></h3>
          </div>
          <h6><a href="mailto:support@gmail.com">Support@megakit.com</a></h6>
          <a href="tel:+23-345-67890"><span class="text-color h4">+23-456-6588</span></a>
        </div>
      </div>
    </div>

    <div class="footer-btm pt-4">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            Copyright &copy; 2020, Designed &amp; Developed by <a href="https://themefisher.com/"
              >Themefisher</a>
          </div>
        </div>
        <div class="col-lg-6 text-left text-lg-right">
          <ul class="list-inline footer-socials">
            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="fab fa-twitter mr-2"></i>Twitter</a></li>
            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="fab fa-pinterest-p mr-2 "></i>Pinterest</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>

</body>

</html>
@endsection