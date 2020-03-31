<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head >
	<meta charset="utf-8">
	<title>Podivers Podomoro Unversity</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<!-- Favicons -->
	<link href="<?= base_url('assets/img/pufavicon.png') ?>" rel="icon">
	<link href="<?= base_url('assets/img/pufavicon.png') ?>" rel="apple-touch-icon">

	<link href="<?= base_url('assets/css/compiled-4.10.1.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/pu-custom.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/normalizer.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/js/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/js/owlcarousel/assets/owl.theme.default.min.css')?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">

	<script src="<?= base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
	<!-- <script src="<?= base_url('assets/js/popper.js')?>" type="text/javascript"></script> -->
	<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/js/mdb.min.js')?>"></script>
	<script src="<?= base_url('assets/js/owlcarousel/owl.carousel.min.js')?>"></script>
	<script src="<?= base_url('assets/js/universal-parallax.min.js')?>"></script>
	<script src="<?= base_url('assets/img-fitter/jquery.imgFitter.js')?>" type="text/javascript"></script>
	<script src="<?= base_url('assets/js/translation/translation.js'); ?>"></script>

    <!-- JWT Encode -->
    <script src="<?= base_url('assets/jwt/encode/hmac-sha256.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/jwt/encode/enc-base64-min.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/jwt/encode/jwt.encode.js');?>" type="text/javascript"></script>

    <!-- JWT Decode -->
    <script src="<?= base_url('assets/jwt/decode/build/jwt-decode.min.js');?>" type="text/javascript"></script>
    <!-- Api Content -->
    <script src="<?= base_url('assets/js/provider.js');?>" type="text/javascript"></script>
    <!-- view pdf -->
    <script src="<?= base_url('assets/js/pdf.js');?>" type="text/javascript"></script>
	<style type="text/css">
	 
	/*@media (max-width: 740px) {
	  html,
	  body,
	  header,
	  .view {
	    height: 1000px;
	  }
	}
	@media (min-width: 800px) and (max-width: 850px) {
	  html,
	  body,
	  header,
	  .view {
	    height: 600px;
	  }
	}*/

	.btn .fa {
	  margin-left: 3px;
	}

	.top-nav-collapse {
	  background-color: #f5f5f5 !important;
	  padding-top: 10px !important;
	  webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
		box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
	}

	.navbar:not(.top-nav-collapse) {
	  background: white !important;
	}

	@media (max-width: 991px) {
	  .navbar:not(.top-nav-collapse) {
	    /*background: #424f95 !important;*/
	     background: white !important;
	  }
	}

	.btn-white {
	  color: black !important;
	}

	h6 {
	  line-height: 1.7;
	}
	.text-blue{
	    color: #023f87 !important;
	}
	.bg-blue{
	    background-color: #023f87 !important;
	}
	.bg-hd-trans{
		background-color: #89b9f3 !important;

	}
	
	.bg-red{
		background-color: #d71921 !important;
	}
	.rgba-gradient {
	  background: -moz-linear-gradient(45deg, rgb(215, 25, 33), rgb(161, 148, 103) 100%);
	  background: -webkit-linear-gradient(45deg, rgb(215, 25, 33), rgb(161, 148, 103) 100%);
	  background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
	  background: -o-linear-gradient(45deg, rgb(215, 25, 33), rgb(161, 148, 103) 100%);
	  background: linear-gradient(to 45deg, rgb(215, 25, 33), rgb(161, 148, 103) 100%);
	}
	.dropdown .dropdown-menu .dropdown-item:hover, .dropdown .dropdown-menu .dropdown-item:active, .dropup .dropdown-menu .dropdown-item:hover, .dropup .dropdown-menu .dropdown-item:active, .dropleft .dropdown-menu .dropdown-item:hover, .dropleft .dropdown-menu .dropdown-item:active, .dropright .dropdown-menu .dropdown-item:hover, .dropright .dropdown-menu .dropdown-item:active {
    background-color: #d71921;
    border-radius: .125rem;
    -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
    box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
    -webkit-transition: all 0.1s linear;
    transition: all 0.1s linear;
	}
	:root{
            --color-primary: #89b9f3;
            --color-second: <?= $style['ColorSecond']; ?>;
            --color-bg: <?= $style['ColorBG']; ?>;
            --color-bg-page: <?= $style['ColorBGHeaderPage']; ?>;

            --color-mobile-nav: <?= $style['ColorMobileNavBg']; ?>;
            --color-mobile-nav-a: <?= $style['ColorMobileNavAnc']; ?>;
        }
	</style>
	<script type="text/javascript">
		$(document).ready(function () {

            window.base_url_js_server_ws = "<?= url_server_ws; ?>";
            window.base_url_sign_out = "<?= url_sign_out; ?>";
            window.url_image = "<?= url_image_lecturer; ?>";
            window.url_image_students = "<?= url_image_students; ?>";
            window.base_url_js = "<?= base_url(); ?>";


            var la = localStorage.getItem("language");
            window.current_language = (la=='' || la==null || la === 'undefined') ? "Eng" : la;


            // $.fn.select2.defaults.set( "theme", "bootstrap" );

            getCurrentLanguage();
            UpdateLanguage();

        });
	</script>
</head>
<!-- ======= Body ====== -->
<body class="scrollbar scrollbar-indigo">
<!-- ======= Hedear ====== -->

<header class="header">
	<div id="topbar" class="py-1">
        <div class="container">
            <div class="social-links col">
                <a href="javascript:void(0)" data-lang="Ind" class="btn-change-lang mx-2"><img class="flag-lang " width="20px" src="<?=base_url('assets/img/in.png')?>"> Ind</a>
                <a href="javascript:void(0)" data-lang="Eng" class="btn-change-lang mx-2"><img class="flag-lang " width="20px" src="<?=base_url('assets/img/en.png')?>"> Eng</a>
            </div>
        </div>
    </div>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="top: 29px">

			<div class="container ">
				<a href="<?= base_url() ?>" class="navbar-brand nav-logo" style="width: 15%;"><img src="<?= base_url() ?>assets/img/logo-lpmi(1).png" alt="SPMI Podomoro University"></a>
				  
				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
				aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon bg-blue" style="border-radius: 4px"></span>
				</button>

				<!-- Collapsible content -->
				<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent2">

					<!-- Links -->
					<ul class="navbar-nav nav justify-content-center lighten-4 py-2 mr-4">
						<li class="nav-item px-3">
							<a href="<?= base_url() ?>" class="nav-link text-uppercase text-blue text-hover-red"><lang>Home</lang></a>
						</li>
						<li class="nav-item px-3 dropdown">
							<a href="" class="nav-link text-uppercase text-hover-red dropdown-toggle text-blue" id="navbarDropdownMenuLink-555" 
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><lang>About Us</lang></a>
							<div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink-555">
								<a class="dropdown-item" href="<?= base_url('vision-mision') ?>"><lang>Vision</lang> & <lang>Mission</lang></a>
								<a class="dropdown-item" href="<?= base_url('organizational-structure') ?>"><lang>Organizational Structure</lang></a>
								<a class="dropdown-item" href="<?= base_url('committee') ?>"><lang>SPMI Committee</lang></a>
								<a class="dropdown-item" href="<?= base_url('target-program') ?>"><lang>Target and Program</lang></a>
								<!-- <a class="dropdown-item" href=""><lang>Activity</lang></a> -->
								<a class="dropdown-item" href="<?= base_url('event') ?>"><lang>Event</lang></a>
							</div>
						</li>
						<li class="nav-item px-3">
							<a href="<?= base_url('news') ?>" class="nav-link text-uppercase text-blue text-hover-red"><lang>News</lang></a>
						</li>
						<li class="nav-item px-3 dropdown">
							<a href="" class="nav-link text-uppercase text-hover-red dropdown-toggle text-blue" id="navbarDropdownMenuLink-555" 
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><lang>Document</lang></a>
							<div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink-555">
								<a class="dropdown-item" href="<?= base_url('knowledge') ?>"><lang>Knowledge Base</lang></a>
								<a class="dropdown-item" href="<?= base_url('acreditas') ?>"><lang>Accreditation</lang></a>
							</div>
						</li>
						<li class="nav-item px-3">
							<a href="<?= base_url('gallery') ?>" class="nav-link text-uppercase text-blue text-hover-red"><lang>Gallery</lang></a>
						</li>
										
					</ul>

				</div>
			</div>
			  <!-- Collapsible content -->
		</nav>
</header>
<!-- Navbar -->
<!-- ======= Hedear ====== -->
<!-- ======= Content ====== -->
<content>
<?= $content ?>
</content>

<!-- ======= Content ====== -->
<!-- ======= Footer ====== -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-4">

                    <div class="footer-info">
                        <img src="<?= base_url('assets/img/LOGO-Podomoro-University-L-mono-W.png')?>" alt="" style="width: 100%;">
                        <img style="padding: 10px 19px;width: 100%;" src="<?= base_url('assets/img/babson-logo-02.png')?>" alt="">
                             
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                            	<a href="<?php echo base_url(''); ?>"><lang>Home</lang></a>
                            </li>
                            <li>
                            	<a target="_blank" href="https://podomorouniversity.ac.id"><lang>Podomoro University</lang></a>
                            </li>
                            <li>
                            	<a target="_blank" href="https://portal.podomorouniversity.ac.id/"><lang>Portal</lang></a>
                            </li><hr>
                            <li>
                            	<a target="_blank" href="http://www.alumni.podomorouniversity.ac.id/"><lang>Alumni</lang></a>
                            </li>
                            <li>
                            	<a target="_blank" href="http://www.repository.podomorouniversity.ac.id"><lang>PU Repository</lang></a>
                            </li>
                            <li>
                            	<a target="_blank" href="http://journal.podomorouniversity.ac.id/"><lang>PU Journal</lang></a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url('penelitian'); ?>"><lang>Research</lang></a>
                            </li>
                            <li>
                            	<a href="<?php echo base_url('mahasiswa'); ?>"><lang>Student</lang></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-links ">
                        
                        <h4><lang>Contact</lang></h4>
                        <p class="text-left" > <span id="Address"></span>
                        	Central Park Mall 3rd Floor - Unit 112 <br>
                            Podomoro City, Jl. Let. Jend. S. Parman Kav. 28<br>
                            West Jakarta, 11470, Indonesia<br>
                            <strong>Phone:</strong> <span id="Tlp">021-29200456</span><br>
                            <strong>Email:</strong> <span id="Email">info@podomorouniversity.ac.id</span><br><hr>
                            <span id="OpenClose"></span>Monday - Friday 10 AM - 5 PM <br>
                            Saturday 10 AM - 4 PM <br>
                            Sunday & Public Holiday CLOSED<br>
                        </p>
                    </div>
                   

                    <div class="social-links" style="margin-bottom: 30px;" id="Viewsosmed">
                    	<ul class="list-unstyled list-inline">
			                  <li class="list-inline-item">
			                    <a target="_blank" href="https://www.facebook.com/universitasagungpodomoro?fref=ts" class="facebook btn-floating btn-fb mx-1">
			                      <i class="fab fa-facebook-f"></i>
			                    </a>
			                  </li>
			                  <li class="list-inline-item">
			                    <a target="_blank" href="https://twitter.com/PodomoroUniv" class="twitter btn-floating btn-tw mx-1">
			                      <i class="fab fa-twitter"> </i>
			                    </a>
			                  </li>
			                 
			                  <li class="list-inline-item">
			                    <a target="_blank" href="https://www.instagram.com/podomorouniversity/" class="instagram btn-floating btn-li mx-1">
			                      <i class="fab fa-instagram"> </i>
			                    </a>
			                  </li>
			                  <!-- <li class="list-inline-item">
			                    <a class="btn-floating btn-dribbble mx-1">
			                      <i class="fa fa-dribbble"> </i>
			                    </a>
			                  </li> -->
			                </ul>
                    </div>
                    
                    <div class="footer-links" id="visitor">
						<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
						<!-- Histats.com  START  (aync)-->
						<script type="text/javascript">var _Hasync= _Hasync|| [];
						_Hasync.push(['Histats.start', '1,4367931,4,604,110,55,00011111']);
						_Hasync.push(['Histats.fasi', '1']);
						_Hasync.push(['Histats.track_hits', '']);
						(function() {
						var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
						hs.src = ('//s10.histats.com/js15_as.js');
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
						})();</script>
						<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4367931&101" alt="" border="0"></a></noscript>
						<!-- Histats.com  END  -->

                    </div>

                </div>

            </div>

        </div>

    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <?=date('Y')?> <strong><a href="https://portal.podomorouniversity.ac.id/meet-our-team" target="_blank" style="color: #fff;">Podomoro University</a></strong>
            </div><!-- 
            <div class="credits">

            </div> -->
        </div>
    </div>

</footer>

<a href="#" class="back-to-top indigo-color"><i class="fa fa-chevron-up"></i></a>


<!-- scrip js -->

<script>

    $('.btn-change-lang').click(function () {
        var lang = $(this).attr('data-lang');
        localStorage.setItem("language",lang);
        window.location.href = '';
    });

</script>

<script>
	new universalParallax().init({
		speed: 4
	});
</script>
<script type="text/javascript">
  	// Animations init
	new WOW().init();
</script>
<script type="text/javascript">

	// Back to top button
	$(function() {
		$(window).scroll(function() {

			if ($(this).scrollTop() > 100) {
				$('.back-to-top').fadeIn('slow');
			} else {
				$('.back-to-top').fadeOut('slow');
			}
			});

			$('.back-to-top').click(function(){
			$('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
			return false;
			});

	});

</script>
<script type="text/javascript">
	$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
		var next = $(this).next();
		if (!next.length) {
		next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		for (var i=0;i<4;i++) {
		next=next.next();
		if (!next.length) {
		  next=$(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
		}
	});
</script>

<!-- ======= Footer ====== -->
<!-- ======= Body ====== -->
</body>
</html>


