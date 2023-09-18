 <!-- Footer Start -->
 <div class="footer-section footer-bg-1">

<!-- Footer Widget Area Start -->
<div class="footer-widget-area section-padding-01">
	<div class="container">
		<div class="row gy-6">
			<div class="col-lg-8">
				<div class="row gy-6">

					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">About</h4>

							<ul class="footer-widget__link">
								<li><a href="">About Us</a></li>
								<li><a href="">Events</a></li>
								<li><a href="#">Forum</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>
					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">Links</h4>

							<ul class="footer-widget__link">
								<li><a href="">Resources</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="">Register</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>
					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">Support</h4>

							<ul class="footer-widget__link">
							     <li><a href="#">Partners</a></li>
								<li><a href="#">Documentation</a></li>
								<li><a href="f">FAQs</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>

				</div>
			</div>
			<div class="col-lg-4">
				<!-- Footer Widget Start -->
				<div class="footer-widget text-center">
                    <div class="col-md-2">
					  <a href="#" class="footer-widget__logo"><img src="{{ asset('assets/mama/images/world_bank.png')}}" alt="Logo" width="60"></a>
                    </div>
                    <div class="col-md-2">
					  <a href="#" class="footer-widget__logo"><img src="{{ asset('assets/mama/images/moh_logo.png')}}" alt="Logo" width="60"></a>
                    </div>
					<div class="footer-widget__social">
						<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>

					<ul class="footer-widget__link flex-row gap-8 justify-content-center">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
				<!-- Footer Widget End -->
			</div>
		</div>
	</div>
</div>
<!-- Footer Widget Area End -->

</div>
<!-- Footer End -->

<!--Back To Start-->
<button id="backBtn" class="back-to-top backBtn">
<i class="arrow-top fas fa-arrow-up"></i>
<i class="arrow-bottom fas fa-arrow-up"></i>
</button>
<!--Back To End-->


</main>

</div>
</div>


<!--  Demo Option Start -->
<div class="edumall-demo-option">


<div class="edumall-demo-option__panel">

<div class="edumall-demo-option__header">
	<h5 class="edumall-demo-option__title">Safe Mama - Top health information services</h5>
	<a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary" href=""><i class="fas fa-shopping-basket"></i> Buy Now</a>
</div>



</div>

</div>

<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src=" {{ asset('assets/mama/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src=" {{ asset('assets/mama/js/plugins/aos.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/parallax.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/swiper-bundle.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/jquery.powertip.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/nice-select.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/glightbox.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/jquery.sticky-kit.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/masonry.pkgd.min.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/flatpickr.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/range-slider.js') }}"></script>
<script src=" {{ asset('assets/mama/js/plugins/select2.min.js') }}"></script>


<!-- Activation JS -->
<script src=" {{ asset('assets/mama/js/main.js') }}"></script>


@yield('scripts')


</body>

</html>
