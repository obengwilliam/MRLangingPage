<!DOCTYPE html>
<html lang="en">

<head>
	<script>document.cookie='resolution=
	'+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
	<title>Cine- </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" type="txt/css">
	<link rel="stylesheet" href="Resources/css/theme-default.css" type="text/css">	
	<link rel="stylesheet" href="Resources/css/style.css" type="text/css">	
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap-responsive.css" type="text/css">
	<!--<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">	//-->
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Le fav and touch icons -->
	
</head>

<body>
	<div class="container">
	        
		<!--Le Header /-->
		 <div class="navbar navbar-fixed-top">
	       <div class="navbar-inner">
	        <div class="container " id="topbanner">
	          
			  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	
	         
	
	       <!--/.nav-collapse -->
	
	        </div>
	
	       </div>
	 	 </div>
		
	    <!--Le Content /-->		
		
		 <div class="row">
			
			<div class="section">
				
				<div class="span2">
						<div id="banner"> </div>
			
					</div>
							
				<div class="span5">
									
					<div class="section-textbackground">
						<h1 class="section-title">
							Make your own stuff?
						</h1>
												
						<p class="section-description">
							Then take your business to the next level with Mall Riot.
							Just bring the products, we do the rest!!!
						</p>
								</div>
			   <div class="nav-collapse">
		
					    <ul class="nav pull-right">
					      <li><a href="#"></a></li>
							  <li><a href="#facebook-modal" data-toggle="modal">  
									<i class="icon-facebook icon-white"></i>
									Facebook</a>
							  </li>
							  <li><a href="#twitter-modal" data-toggle="modal">
									<i class="icon-twitter icon-white"></i>					
									Twitter</a>
							  </li>
					    </ul>

					  </div>
				</div>		
				<div class="span3" >
					
					<div id="signUpForUpdates" class="section-form">
						
						<form>
						  <fieldset>
							<legend>Interested? Learn more</legend>
						    <input type="text" id="nameField" class="input-block-level" placeholder="Name" />
						    <input type="email" id="emailField" class="input-block-level" placeholder="Email address" />
							<span id="invalid-email" class="help-block">
									please provide a valid email address.
							</span>
							
						    <button type="submit" id="notifyBtn" class="btn btn-block button chunky">Keep Me Updated</button>
						  </fieldset>
						</form>
						
					</div>
					
				</div>
				<div class="span2"></div>
				
			</div>
			
		 </div>	<!--//row-->		
		
   	    <!--Le Footer /-->		
		 <div class="navbar navbar-fixed-bottom">
	       <div class="navbar-inner bottom">
	          <div class="container fix-center">
	          		<p class="navbar-text"><?php echo("&copy; ".date("Y")." CINE."); ?></p>

			     <!---<ul class="nav pull-left">
					<li><a><?php //echo("&copy; ".date("Y")." Mall Riot."); ?></a></li>
				   </ul> //-->

		         <!--   <ul class="nav pull-right">
		              <li><a href="#">About</a></li>
		              <li><a href="#">FAQ</a></li>	
		            </ul> 
				 //-->
	          </div>
	       </div>
	 	 </div>
	   
			
	</div>	 
	
	<div id="facebook-modal" class="modal hide fade">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3 class="fix-center">Join Us on Facebook</h3>
	  </div>
	  <div class="modal-body">
	    
		<div class="row">
			<div class="span1" style="background:cyan;"><p class="social-title">Like Us</p></div>
			<div class="span4" style="background:cyan;">
				<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.getmallriot.com"
				        scrolling="no" frameborder="0"
				        style="border:none; width:330px; height:24px"></iframe>	
			</div>			
		</div>
	
		
		<p>or</p>

		<div class="row">
			<div class="span1" style="background:cyan;">Visit Us</div>
			<div class="span4" style="background:cyan;">
				<a href="http://www.facebook.com/cine">Cine on Facebook</a>
			</div>			
		</div>
		
	  </div>
	</div>
	
	<div id="twitter-modal" class="modal hide fade">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3 class="fix-center">Join Us on Twitter</h3>
	  </div>
	  <div class="modal-body">
		<p>Follow Us</p>
		<p>Or</p>
		<p>visit our page <a href="http://www.twitter.com/cine">Cine on Twitter</a></p>
	  </div>
	</div>	

	<div id="feedback-modal" class="modal hide fade">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h3 class="fix-center">Feedback</h3>
	  </div>
	  <div class="modal-body">
		
		<form>
			  <fieldset>
			    <input type="text" id="feedbackNameField" class="input-block-level" placeholder="Name" />
			    <input type="email" id="feedbackEmailField" class="input-block-level" placeholder="Email address" />
				<span id="feedback-invalid-email" class="help-block" style="display:none;">
						please provide a valid email address.
				</span>
				
				<textarea id="feedbackMessageField" rows="4" class="input-block-level"></textarea>
				
			    <button type="submit" id="feedbackBtn" class="btn btn-block button chunky">Submit</button>
			  </fieldset>			
		</form>

	  </div>
	</div>	

 	<!-- Le javascript //-->	
	<script src="lib/jquery-1.7.1.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="4on4/landing.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	 $(function(){
		$('body').on('show', '.modal', function(){
		  $(this).css({'margin-top':($(window).height()-$(this).height())/2,'top':'0'});
		});
	 });
	</script>
	
</body>
</html>
