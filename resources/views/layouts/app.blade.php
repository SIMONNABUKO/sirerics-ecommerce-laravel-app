<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<title>Sir erics Shopping  @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="@yield('description')" />
	<!-- css -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="{{asset('plugins/flexslider/flexslider.css')}}" rel="stylesheet" media="screen" />
	<link href="{{asset('css/cubeportfolio.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" />
	{{-- ADMINLTE CSS AND JS FILES --}}
	

	{{-- END OF ADMIN LTE CSS AND JS FILES --}}

	<!-- Theme skin -->
	<link id="t-colors" href="{{asset('skins/default.css')}}" rel="stylesheet" />

	<!-- boxed bg -->
	<link id="bodybg" href="{{asset('bodybg/bg1.css')}}" rel="stylesheet" type="text/css" />

	

</head>

<body>
		<div id="wrapper">
			<!-- start header -->
			@include('includes/navbar')
		<!-- end header -->
		<div style="background-color:white;" class="container-fluid">
			@yield('content')
		</div>
			
		

		{{-- FOOTER SECTION GOES HERE --}}
		
		<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-lg-3">
							<div class="widget">
								<h4>Get in touch with us</h4>
								<address>
						<strong>Sailor company Inc</strong><br>
						 Sailor suite room V124, DB 91<br>
						 Someplace 71745 Earth </address>
								<p>
									<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
									<i class="icon-envelope-alt"></i> email@domainname.com
								</p>
							</div>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="widget">
								<h4>Information</h4>
								<ul class="link-list">
									<li><a href="#">Press release</a></li>
									<li><a href="#">Terms and conditions</a></li>
									<li><a href="#">Privacy policy</a></li>
									<li><a href="#">Career center</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
			
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="widget">
								<h4>Pages</h4>
								<ul class="link-list">
									<li><a href="#">Press release</a></li>
									<li><a href="#">Terms and conditions</a></li>
									<li><a href="#">Privacy policy</a></li>
									<li><a href="#">Career center</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-3 col-lg-3">
							<div class="widget">
								<h4>Newsletter</h4>
								<p>Fill your email and sign up for monthly newsletter to keep updated</p>
								<div class="form-group multiple-form-group input-group">
									<input type="email" name="email" class="form-control">
									<span class="input-group-btn">
								<button type="button" class="btn btn-theme btn-add">Subscribe</button>
							</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sub-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="copyright">
									<p>&copy; Sailor Theme - All Right Reserved</p>
									<div class="credits">
										<!--
						All the links in the footer should remain intact. 
						You can delete the links only if you purchased the pro version.
						Licensing information: https://bootstrapmade.com/license/
						Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
					  -->
										Designed by <a href="">BootstrapMade</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<ul class="social-network">
									<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			</div>
			<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

			
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/modernizr.custom.js')}}"></script>
			<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
			<script src="{{asset('js/bootstrap.min.js')}}"></script>
			<script src="{{asset('plugins/flexslider/jquery.flexslider-min.js')}}"></script>
			<script src="{{asset('plugins/flexslider/flexslider.config.js')}}"></script>
			<script src="{{asset('js/jquery.appear.js')}}"></script>
			<script src="{{asset('js/stellar.js')}}"></script>
			<script src="{{asset('js/classie.js')}}"></script>
			<script src="{{asset('js/uisearch.js')}}"></script>
			<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
			<script src="{{asset('js/google-code-prettify/prettify.js')}}"></script>
			<script src="{{asset('js/animate.js')}}"></script>
			<script src="{{asset('js/custom.js')}}"></script>

			



			
			{{-- ADMIN LTE SCRIPT FILES --}}
			
			{{-- END OF ADMIN LTE SCRIPT FILES --}}
			
			
			</body>
			
			</html>
			
























































































