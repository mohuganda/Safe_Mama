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
								<li><a href="about.html">About Us</a></li>
								<li><a href="course-grid-left-sidebar.html">Courses</a></li>
								<li><a href="instructors.html">Instructor</a></li>
								<li><a href="event-grid-sidebar.html">Events</a></li>
								<li><a href="become-an-instructor.html">Become A Teacher</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>
					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">Links</h4>

							<ul class="footer-widget__link">
								<li><a href="blog-grid-left-sidebar.html">News & Blogs</a></li>
								<li><a href="#">Library</a></li>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Partners</a></li>
								<li><a href="#">Career</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>
					<div class="col-sm-4">
						<!-- Footer Widget Start -->
						<div class="footer-widget">
							<h4 class="footer-widget__title">Support</h4>

							<ul class="footer-widget__link">
								<li><a href="#">Documentation</a></li>
								<li><a href="faqs.html">FAQs</a></li>
								<li><a href="#">Forum</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
						<!-- Footer Widget End -->
					</div>

				</div>
			</div>
			<div class="col-lg-4">
				<!-- Footer Widget Start -->
				<div class="footer-widget text-center">
					<a href="#" class="footer-widget__logo"><img src=" {{ asset('assets/mama/images/dark-logo.png')}}" alt="Logo" width="150" height="32"></a>
					<div class="footer-widget__social">
						<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
						<a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
					</div>
					<p class="footer-widget__copyright">&copy; 2023 <span> EduMall </span> Made with <i class="fa fa-heart"></i> by <a href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio">BootXperts</a></p>
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

<!-- Log In Modal Start -->
<div class="modal fade" id="loginModal">
<div class="modal-dialog modal-dialog-centered modal-login">

<!-- Modal Wrapper Start -->
<div class="modal-wrapper">
	<button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

	<!-- Modal Content Start -->
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Login</h5>
			<p class="modal-description">Don't have an account yet? <button data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</button></p>
		</div>
		<div class="modal-body">
			<form action="#">
				<div class="modal-form">
					<label class="form-label">Username or email</label>
					<input type="text" class="form-control" placeholder="Your username or email">
				</div>
				<div class="modal-form">
					<label class="form-label">Password</label>
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="modal-form d-flex justify-content-between flex-wrap gap-2">
					<div class="form-check">
						<input type="checkbox" id="rememberme">
						<label for="rememberme">Remember me</label>
					</div>
					<div class="text-end">
						<a class="modal-form__link" href="#">Forgot your password?</a>
					</div>
				</div>
				<div class="modal-form">
					<button class="btn btn-primary btn-hover-secondary w-100">Log In</button>
				</div>
			</form>

			<div class="modal-social-option">
				<p>or Log-in with</p>

				<ul class="modal-social-btn">
					<li><a href="#" class="btn facebook"><i class="fab fa-facebook-square"></i> Gacebook</a></li>
					<li><a href="#" class="btn google"><i class="fab fa-google"></i> Google</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Modal Content End -->

</div>
<!-- Modal Wrapper End -->

</div>
</div>
<!-- Log In Modal End -->

<!-- Log In Modal Start -->
<div class="modal fade" id="registerModal">
<div class="modal-dialog modal-dialog-centered modal-register">

<!-- Modal Wrapper Start -->
<div class="modal-wrapper">
	<button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

	<!-- Modal Content Start -->
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Sign Up</h5>
			<p class="modal-description">Already have an account? <button data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></p>
		</div>
		<div class="modal-body">

			<form action="#">
				<div class="row gy-5">
					<div class="col-md-6">
						<div class="modal-form">
							<label class="form-label">First Name</label>
							<input type="text" class="form-control" placeholder="First Name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="modal-form">
							<label class="form-label">Last Name</label>
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
					</div>
					<div class="col-md-6">
						<div class="modal-form">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" placeholder="username">
						</div>
					</div>
					<div class="col-md-6">
						<div class="modal-form">
							<label class="form-label">Email</label>
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
					</div>
					<div class="col-md-6">
						<div class="modal-form">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password">
						</div>
					</div>
					<div class="col-md-6">
						<div class="modal-form">
							<label class="form-label">Re-Enter Password</label>
							<input type="password" class="form-control" placeholder="Re-Enter Password">
						</div>
					</div>
					<div class="col-md-12">
						<div class="modal-form form-check">
							<input type="checkbox" id="privacy">
							<label for="privacy">Accept the Terms and Privacy Policy</label>
						</div>
					</div>
					<div class="col-md-12">
						<div class="modal-form">
							<button class="btn btn-primary btn-hover-secondary w-100">Register</button>
						</div>
					</div>
				</div>
			</form>

		</div>
	</div>
	<!-- Modal Content End -->

</div>
<!-- Modal Wrapper End -->

</div>
</div>
<!-- Log In Modal End -->

<!--  Demo Option Start -->
<div class="edumall-demo-option">


<div class="edumall-demo-option__panel">

<div class="edumall-demo-option__header">
	<h5 class="edumall-demo-option__title">Safe Mama - Top health information services</h5>
	<a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary" href=""><i class="fas fa-shopping-basket"></i> Buy Now</a>
</div>

<div class="edumall-demo-option__body">
	
	<div class="edumall-demo-option-item">
		<a href="index.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Main Demo">
			<img src=" {{ asset('assets/mama/images/demo/home-01.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Course Hub">
			<img src=" {{ asset('assets/mama/images/demo/home-02.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Academy">
			<img src=" {{ asset('assets/mama/images/demo/home-03.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Education Center">
			<img src=" {{ asset('assets/mama/images/demo/home-04.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="University">
			<img src=" {{ asset('assets/mama/images/demo/home-05.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Language Academic">
			<img src=" {{ asset('assets/mama/images/demo/home-06.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Single Instructor">
			<img src=" {{ asset('assets/mama/images/demo/home-07.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Dev">
			<img src=" {{ asset('assets/mama/images/demo/home-08.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
	<div class="edumall-demo-option-item">
		<a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Art">
			<img src=" {{ asset('assets/mama/images/demo/home-09.jpg')}}" alt="Home" width="130" height="158">
		</a>
	</div>
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

</body>

</html>