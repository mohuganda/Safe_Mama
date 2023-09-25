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
							<h4 class="footer-widget__title">Links</h4>

							<ul class="footer-widget__link">
							<li><a class="active" href="{{ url('/') }}"><span>Home</span></a>
                            <li><a href="{{ url('records') }}">Resources</a></li>
                            <li><a href="{{ url('forums') }}">Forums</a></li>
                            <li><a href="{{ url('webinars') }}">Webinars</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>
					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">Training</h4>

							<ul class="footer-widget__link">
								 <li><a href="https://elearning.health.go.ug/course/index.php?categoryid=3"
                                            target="_blank"><span>Training Courses</span></a></li>
                                    <li><a href="https://hris2.health.go.ug/national_train/login"
                                  target="_blank"><span>IHRIS In-service Training</span></a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>
					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">Support</h4>

							<ul class="footer-widget__link">
							     <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
								<li><a href="{{url('faqs')}}">FAQs</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>

				</div>
			</div>
			<div class="col-lg-4">
				<!-- Footer Widget Start -->
				<div class="footer-widget text-center">
                 <p>Developed by the GoU under the Uganda Reproductive Maternal and Child Health Services Improvement Project funded by World Bank and the Government of Sweden</p>
					  <a href="https://www.worldbank.org/en/country/uganda" class="footer-widget__logo"><img src="{{ asset('assets/mama/images/world_bank.png')}}" alt="Logo" width="80"></a>

					  <a href="https://health.go.ug" class="footer-widget__logo"><img src="{{ asset('assets/mama/images/moh_logo.png')}}" alt="Logo" width="30"></a>

					<div class="footer-widget__social">
                        <a href="{{asset('assets/mama/app/safe_mama.apk')}}" class="footer-widget__logo"><img src="{{ asset('assets/mama/images/btn-google-play.jpg')}}" alt="Play Store"></a>
                        <a href="#" class="footer-widget__logo"><img src="{{ asset('assets/mama/images/btn-app-store.jpg')}}" alt="App Store" width="30"></a>
						<a href="https://twitter.com/safe_mama" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.facebook.com/safe_mama" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/safe_mama" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://www.youtube.com/safe_mama" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>

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
