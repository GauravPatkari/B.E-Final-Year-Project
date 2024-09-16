   <!-- Start Header -->
   
       <div class="header">	
   	 	    <div class="header-top">
   	 	      <div class="wrap"> 
   	 	    	 <div class="header-top-left">
   	 	    	 	<p>Support: +91-0000000000</p>
   	 	    	 </div>
   				  <div class="header-top-right">


					<?php 
				 if(isset($_SESSION['userid']) and isset($_SESSION['username']))
					{
echo "Welcome ".$_SESSION['username'];
echo '&nbsp;&nbsp;<a href="index.php?page=8" > </i>[My Account</a>';
echo '&nbsp;&nbsp;<a href="index.php?Logout=Logout" > </i>[Sign Out]]</a>';

					}
					else
					{
					?>
				        <ul>
				            <li  class="login">
				              <div id="loginContainer">
				            	   <a href="index.php?page=7"><span><i class="fa fa-lock"></i>Login</span></a>
						             </div>
				               </li>
				               <li><a href="index.php?page=6" ><i class="fa fa-sign-in"></i>Sign Up</a></li>
				         </ul>
					<?php 
					}
						?>

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
				         <div class="logo" style="padding-top:10px;font-size:30px;color:#fff;"> Secure Online File Storage</div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				            <li class="active"><a href="index.php">Home</a></li>
				            <li><a href="index.php?page=2">About</a></li>
				            
				            <li><a href="index.php?page=3">Solutions</a></li>
				            <li><a href="index.php?page=4">Support</a></li>
				            <li><a href="index.php?page=5">Contact Us</a></li>
				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>

<?php
if(!isset($_GET["page"]) || $_GET["page"]==1 || $_GET["page"]==0)
{
?>
	        <div class="header-banner">
	        	
			    <!-- Carousel ================================================== -->
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			     <div class="wrap">
			      <div class="carousel-inner">
			        <div class="item active">
			           <div class="row">
				        <div class="col-md-6">
				          <div class="banner-desc">
				        	<h2>Get the right storage for you app.</h2>
				           <ul>
				          	<li><span><i class="fa fa-chevron-right"></i>more than 12,3456 clients trust us</span></li>
				            <li><span><i class="fa fa-chevron-right"></i>24/7 support</span></li>
				            <li><span><i class="fa fa-chevron-right"></i>performance, reliability, security</span></li>
				            <li><span><i class="fa fa-chevron-right"></i>Flexible contracts</span></li>
				          </ul>
				          
				          </div>
				        </div>
				        <div class="col-md-6">
				        	<div class="banner-img">
			                <img src="images/devices.png" alt="First slide" />
			             </div>
				        </div>
				      </div>
			        </div>
			         <div class="item">
			         
			          <div class="row">
			          	<div class="col-md-6">
				        	<div class="banner-img">
			                <img src="images/devices.png" alt="First slide" />
			             </div>
				        </div>
				        <div class="col-md-6">
				        	<div class="banner-desc">
				        	<h2>Get the right storage for you app.</h2>
				          <ul>
				          	<li><span><i class="fa fa-chevron-right"></i>more than 12,3456 clients trust us</span></li>
				            <li><span><i class="fa fa-chevron-right"></i>24/7 support</span></li>
				            <li><span><i class="fa fa-chevron-right"></i>performance, reliability, security</span></li>
				            <li><span><i class="fa fa-chevron-right"></i>Flexible contracts</span></li>
				          </ul>
				          
				          </div>
				         </div>
				      </div>
			        </div>
			       </div>
			      </div>
			      <a class="left carousel-control left-arrow" href="#myCarousel" data-slide="prev"><span><i class="fa fa-chevron-left"></i></span></a>
			      <a class="right carousel-control right-arrow" href="#myCarousel" data-slide="next"><span><i class="fa fa-chevron-right"></i></span></a>
			    </div><!-- /.carousel -->
	           </div>
<?php
}
?>
             </div>
   <!-- End Header -->