<?php ?>
<!DOCTYPE HTML>
<html>
<head>
<title>CLOUD</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {

      var owl = $("#owl-demo");

      owl.owlCarousel({

      items :4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })

    });
    </script>
  <script type="text/javascript">
  // Login Form
	$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});
  </script>
</head>
<body>
   <!-- Start Header -->
       <div class="header">	
   	 	    <div class="header-top">
   	 	      <div class="wrap"> 
   	 	    	 <div class="header-top-left">
   	 	    	 	<p>Support: +0123456789</p>
   	 	    	 </div>
   				  <div class="header-top-right">
				        <ul>
				            <li  class="login">
				              <div id="loginContainer">
				            	   <a href="login.php"><span><i class="fa fa-lock"></i>Login</span></a>
						                <div id="loginBox" class="login-form">    
						                	<h3>Login into Your Account</h3>            
						                      <form id="loginForm">
						                                <span>
											 	    		<i><img src="images/user.png" alt="" /></i>
											 	    		 <input type="text" value="yourname@mail.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'yourname@mail.com';}">
											 	    	</span>
						                                <span>
												 	     <i><img src="images/lock.png" alt="" /></i>
											 	         <input type="password" value="........." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '.........';}">
												 	    </span>
						                               <input type="submit" value="Login">
						                       </form>
						                  </div>
						             </div>
				               </li>
				               <li><a href="userreg/" ><i class="fa fa-sign-in"></i>Sign Up</a></li>
				         </ul>
				    </div>
			      <div class="clear"></div>
			     </div> 
		      </div>
             <div class="header-logo-nav">
             	  <div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
				      <div class="container">
				        <div class="navbar-header">
				          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				         <div class="logo"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" /></a></div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				            <li><a href="index.html">Home</a></li>
				            <li><a href="#">About</a></li>
				            <li><a href="products.php">Products</a></li>
				            <li><a href="solutions.php">Solutions</a></li>
				            <li><a href="support.php">Support</a></li>
				            <li><a href="contact.php">Contact Us</a></li>
				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
           </div>
   <!-- End Header -->
   
   <!-- Start Main Content -->
	 <div class="main">	 
	 	<div class="contact about-desc">
   		<div class="container">
   			<div class="page-not-found">
	    		<h4>Page Not Found</h4>
	    		<h3>404</h3>
	    	</div>
   		</div>
   	</div>
   	
   </div>
   <!-- End Main Content -->
	   
  <!-- Start Footer -->
  <span class="footer-arrow"></span>
       <div class="footer">	  
       	 <div class="wrap">	      
		  <div class="row">
			   <div class="col-lg-6">
			   	<h2>About Open Cloud</h2>
			   	<p>Vivamus non elementum enim. Vestibulum fringilla placerat vestibulum. Donec consequat scelerisque lorem, quis laoreet tortor dapibus nec. Duis sodales quis odio quis pretium. Etiam auctor sollicitudin enim. Duis tempus semper sodales. </p>
			    <ul class="links">
			    	<li><a href="#">About</a> /</li>
			    	<li><a href="#">Term of Services</a> /</li>
			    	<li><a href="#">Press</a> /</li>
			    	<li><a href="#">Staff</a> /</li>
			    	<li><a href="#">News</a></li>
			    </ul> 
			   </div>
			    <div class="col-lg-6">
			     <h2>Products</h2>
			     <div class="products-list">
			     <ul>
			     	<li><a href="#"><i class="fa fa-chevron-right"></i> Private cloud  </a></li>
			     	<li><a href="#"><i class="fa fa-chevron-right"></i>  DEDICATED SERVER    </a></li>
			     	<li><a href="#"><i class="fa fa-chevron-right"></i>  Hybrid cloud</a></li>
			     	<li><a href="#"><i class="fa fa-chevron-right"></i> support </a></li>
			     </ul>
			     <ul>	                         
			       <li><a href="#"><i class="fa fa-chevron-right"></i> dedicated hosting</a></li>
                   <li><a href="#"><i class="fa fa-chevron-right"></i> email hosting </a></li>
                   <li><a href="#"><i class="fa fa-chevron-right"></i> solutions</a></li>
                   <li><a href="#"><i class="fa fa-chevron-right"></i> Knowledge Center</a></li>
			     </ul>
			     <div class="clear"></div>
			    </div>
			     	   </div>
			  </div>
			 </div>
		   </div>
			 <div class="footer-bottom">
			 	<div class="wrap">
			 	<div class="clear"></div>
			 </div>
	       </div>
  <!-- End Footer -->
  </body>
</html>

    	
    	
            