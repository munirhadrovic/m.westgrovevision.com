<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
		<title>Eye Doctor Downers Grove IL, West Grove Vision, Designer Frames, Designer Sunglasses, InfantSee Eye Doctor Downers Grove IL</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });	
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
		?>

		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
			<h1>Powered by <a href="http://mobilegrows.com/">MobileGrows</a> | <a href="http://westgrovevision.com/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/Screenshot_7.png" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/Screenshot_9.png" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/Screenshot_8.png" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div><a class="ui-btn ui-icon-phone callfind ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-grid-a" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn callfind ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn callfind ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn callfind ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn callfind ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				
					
						<div data-role="collapsible-set">	
							<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
							   <h3>About Us</h3>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Meet Your Doctor</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Meet Your Eye Health Team</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">The Optos Technology</a>
							   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Notice of HIPAA Privacy Practices</a>
                                <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                    <h3>Internal Acces Only</h3>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Get Email</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Email Admin</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Patient Form</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Tools</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Stats</a>
                                </div>
                            </div>
                                <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                    <h3>Conatct Us</h3>
                                    <a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Refer a Friend</a>
                                </div>

                                <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                                    <h3>Eyewear Gallery</h3>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Our Designer Frames</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Frame Shape selection Guide</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Test Your EyeQ</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">About Sports Vision</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Sport Lens Chart</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Eyeglass Guide 2.0</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Recommended Lenses</a>
                                    <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">FAQ's Eyeglasses</a>
                                </div>

						</div>						
					
				
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Contact Lenses</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Eye Conditions</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Pediatric Vision</a></div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">LASIK</a></div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">CRT</a></div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">FAQ's</a></div>
              </div>

		  </div>
            <h2>"Family Eye Care With a Personal Touch"</h2>
            <p>Welcome to Westgrove Vision Center in Downers Grove IL! Here you will find an optometrist and an eye health team that
                specializes in Comprehensive Eye Exams, affordable Designer Frames, priced right Designer Sunglasses, Contact Lenses,
                and Children's Vision. We are your Eye Doctor serving Downers Grove Illinois and surrounding suburbs.</p>

		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Eyewear Gallery</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Contact Lenses</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Eye Conditions</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Pediatric Vision</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">LASIK</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">CRT</a></li>
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">FAQ's</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>

                    <p>This is only a <b>PREVIEW</b> version of your Mobile Website.</p>
                    <p>Please contatact our official Sales Representative for <b>Full Functional Version.</b></p>


                </div>

			</div>	
				
				
		</div>
		
		<!-- page 2  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">About Us</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Eyewear Gallery</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Contact Lenses</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Eye Conditions</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Pediatric Vision</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">LASIK</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">CRT</a></li>
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">FAQ's</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                            </ul>
                    </section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
