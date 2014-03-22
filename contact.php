<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/mystyles.css" />
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css"/>
    
    <script src="js/vendor/modernizr.js"></script>
    
    
</head> 
<body>
  
<!--Header-->
<header id="header">
<!--Logo, Social links, phone and support-->
<div class="row">
  <!--Logo Image and text-->
    <div class="small-10 small-centered large-3 large-uncentered columns" id="logo-image">
      <img src="img/new_water.png" alt="" id="logo"/>
    </div>
    <div class="small-10 small-centered large-6 large-uncentered columns">
		<h2 id="logo_text">Integrate<span id="logo_it">IT</span> Australia</h2>
        <p id="tagline">“integrating technology for your business needs”</p>
    </div> 
    <!--End Logo Image and Text-->
    
    <!--Social links, Phone and Support-->
 	<div class="large-3 columns" id="social_large_columns">
      <ul class="small-block-grid-4" id="social_small_grid_3">
              <li><a href="http://www.jasonyates75.com.au"><i class="fi-social-facebook size-48"></i></a></li>
              <li><a href="#"><i class="fi-social-twitter size-36" ></i></a></li>
              <li><a href="tel:1300766933"><i class="fi-mobile size-36" ></i></a></li>
      </ul>
      
      
      <div class="small-12 large-12 columns" id="mobile">
      	<a href="tel:1300766933"><p>Phone 1300 79 69 33</p></a>
      </div>
      
      
      
      <div class="small-12 large-12 columns">
		<a href="http://aus.myconnectwise.net/integrateit" class="button right">Service Desk Client Login</a><br>
      </div>
        
    </div>
</div>
<!--End Logo, Social links, phone and support-->
 
 
 
    
    
<!--Nav-->
<div id="nav">
    <div class="row">
    	<div class="contain-to-grid sticky">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name" style="background-color:#049EE8">
                        <h1><a href="#">IntegrateIT</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                </ul>
            
            <!--<div class="large-12 columns">-->
                <section class="top-bar-section">
                <!-- Left Nav Section -->
                    <ul class="left">
                        <li><a href="index.html" >Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="has-dropdown">
                            <a href="services.html">Services</a>
                                <ul class="dropdown">
                                <li><a href="professional_it.html">Professional IT Services</a></li>
                                <li><a href="managed_services.html">Managed Services </a></li>
                                <li><a href="it_consulting_audit_services.html">IT Consulting / Audit Services</a></li>
                              </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="solutions.html">Solutions</a>
                            <ul class="dropdown">
                                <li><a href="cloud_computing.html">Cloud Computing</a></li>
                               <li><a href="disaster_recovery_business_continuity.html">Disaster Recovery & Business Continuity</a></li>
                               <li><a href="wireless_solutions.html">Wireless Solutions</a></li>
                            </ul>
                        </li>
                    <li><a href="support.html">Support</a></li>
                    <li><a href="contact.php" class="selected">Contact Us</a></li>
                    <li><a href="vendors.html">Vendors</a></li>
                    </ul>
                
                
                </section>
            </nav>
    	</div>
    
    </div>
</div>
<!-- End Nav -->

</header>
<!--End Header-->

<!-- Main Page Content -->


    <!-- Contact Header -->
    <div class="row">
        <div class=" small-12 large-12 columns">
            <h2>Contact Us</h2>
            <p>Please complete the form below and one of our staff members will get in contact with you shortly.
            </p> 
         </div>
	</div>
 <!--Form Cont
 ent and Map--> 
 <div id="gallery">
		

   <div class="row">
   	<div class=" small-12 large-7 columns">
    		<div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                
                
                
               <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = ''; 
    $to = 'jason@jasonyates75.com.au'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the question incorrectly!</p>';
    }
?>
               
               <form method="post" action="contact.php">
        
                <div class="row collapse">
                <div class="large-2 columns">
                <label class="inline">Name</label>
                </div>
                <div class="large-10 columns">
                <input name="name" type="text" placeholder="John Smith" >
                </div>
                </div>
                
                <div class="row collapse">
                <div class="large-2 columns">       
                <label class="inline">Email</label>
                </div>
                <div class="large-10 columns">  
                <input name="email" type="email" placeholder="someone@somewhere.com" >
                </div>
                </div>
                
                <div class="row collapse">
                <div class="large-2 columns">       
                <label class="inline">Phone</label>
                </div>
                <div class="large-10 columns">  
                <input name="phone" type="tel" placeholder="0421 XXXX XX" >
                </div>
                </div>
                
                <div class="row collapse">
                <div class="large-2 columns">    
                <label class="inline">Message</label>
                </div>
                 <div class="large-10 columns"> 
                <textarea name="message" cols="10" placeholder="Leave a message"></textarea>
                </div>
                </div>
                
                <div class="row collapse">
                <div class="large-2 columns"> 
                <label class="inline">What is 2+2?</label>	
                </div>
                <div class="large-10 columns">
                <input name="human" type="text" placeholder="Your Answer">
                </div>
                </div>
                        
                <button id="submit" name="submit" type="submit" value="submit">SUBMIT</button>
				</form>
               
             </div>
            </section>
             
            </div>
            </div>
            
            
    <div class="small-12 large-5 columns" id="map" >
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=5%2F209+Days+Rd,+Grange+QLD+4051&amp;aq=&amp;sll=-25.335448,135.745076&amp;sspn=65.357904,71.279297&amp;ie=UTF8&amp;hq=&amp;hnear=5%2F209+Days+Rd,+Grange+Queensland+4051&amp;t=m&amp;z=14&amp;ll=-27.425642,153.014035&amp;output=embed"></iframe>
            
            <br/>
            
          <small>
          	<a href="https://www.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=5%2F209+Days+Rd,+Grange+QLD+4051&amp;aq=&amp;sll=-25.335448,135.745076&amp;sspn=65.357904,71.279297&amp;ie=UTF8&amp;hq=&amp;hnear=5%2F209+Days+Rd,+Grange+Queensland+4051&amp;t=m&amp;z=14&amp;ll=-27.425642,153.014035" style="color:#0000FF;text-align:left"><p style="color: white">View Larger Map</p></a>
          </small>
            
            <h5><span class="integrate-blue">Address:</span></h5>
            <p id="address">5/209 Days Rd,
             Grange QLD 4051
            </p>
            
            <h5><span class="integrate-blue">Postal:</span></h5>
            <p id="postal">PO BOX 5281 <br/>
				Brendale DC QLD 4500</p>
            
            
            <p>PH: 1300 79 69 33<br/>
                FAX: 07 3882 2329
            </p>
       </div>
 </div>
 </div>
<!--End Gallery-->
<!-- End Contact Details -->
<!-- End Main Content -->

<!-- Footer --> 
<footer id="footer"> 
	<div id="footer-insert"> 
		<div class="row"> <!--full block-->
        <div class="large-12 columns" ><!--width of content in footer-->
                    <div class="row">
                    <div id="footer_content">
                        <div class="large-6 columns">
                        <p>© IntegrateIT Australia</p>
                        <p style="font-size:12px">Web Design by <a href="www.jasonyates75.com.au">JasonYates75 Web Designs</a></p>
                        </div>
                        <div class="large-6 columns">
                            <ul class="inline-list right" id="footer-menu-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="solutions.html">Solutions</a></li>
                                <li><a href="support.html">Support</a></li>
                                <li><a href="contact.php"  class="selected">Contact Us</a></li>
                                <li><a href="vendors.html">Vendors</a></li>
                                <li><a href="terms_conditions.html">Terms of Use & Conditions</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                  </div> 
        </div>
    </div>
</footer>
 <!-- End Footer -->
 
   
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    
    <script>
      $(document).foundation({
		  orbit : {slide_number: false,
		   			navigation_arrows: false,
					timer_speed: 2000
					},
					
		topbar : {sticky_class:'sticky',
					scrolltop : true
					}
		  });
  </script>
  
  
    
  </body>
</html>