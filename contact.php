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
    
    <!--Social links and Phone-->
 	<div class="large-3 columns" id="social_large_columns">
      <ul class="small-block-grid-4" id="social_small_grid_3">
              <li><a href="http://www.jasonyates75.com.au"><i class="fi-social-facebook size-48"></i></a></li>
              <li><a href="#"><i class="fi-social-twitter size-36" ></i></a></li>
              
              <li><a href="tel:1300766933"><i class="fi-mobile size-36" ></i></a></li>
      </ul>
      <ul class="small-12 columns" id="mobile">
              
            <a href="tel:1300766933"><p>Phone 1300 79 69 33</p></a>
              
      </ul>
    </div>
</div>
<!--End Social links and phone-->
 
 
    
    
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
    <li><a href="index.html">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="services.html" data-dropdown="drop1">Services</a>
        <ul id="drop1" class="f-dropdown" data-dropdown-content>
        <li><a href="#">Professional IT Services</a></li>
        <li><a href="#">Managed Services </a></li>
        <li><a href="#">Disaster recovery & Business Continuity</a></li>
        <li><a href="#">IT Consulting / Audit Services</a></li>
        <li><a href="#">Cloud Computing</a></li>
        <li><a href="#">Wireless Solutions</a></li>
        </ul>
    </li>
    <li><a href="contact.html" id="selected">Contact Us</a></li>
    <li><a href="#">Vendors</a></li>
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
            <h3>Contact Us</h3>
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
	echo '<p>You answered the anti-spam question incorrectly!</p>';
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
                <textarea name="message" placeholder="Leave a message"></textarea>
                </div>
                </div>
                
                <div class="row collapse">
                <div class="large-8 columns"> 
                <label class="inline">What is 2+2? (Anti Spam)</label>	
                </div>
                <div class="large-4 columns">
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
            
            <h5>Address:</h5>
            <p style="color: white">5/209 Days Rd,
             Grange QLD 4051
            </p>
            
            <h5>Postal:</h5>
            <p style="color: white">PO BOX 5281 <br/>
									   Brendale DC QLD 4500</p>
            
            
            <p style="color: white">PH: 1300 79 69 33<br/>
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
                        </div>
                        <div class="large-6 columns">
                            <ul class="inline-list right">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Vendors</a></li>
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