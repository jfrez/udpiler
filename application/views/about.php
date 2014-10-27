<!DOCTYPE html>
<html>

	<head>
	
		<title>King Size - portfolio with a fullscreen slider</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
			
		 <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />	  	
  	
		 <!--[if lte IE 8]>						
		<link rel="stylesheet" href="css/stylesIE.css" type="text/css" media="screen" />
		<![endif]-->
		
		 <!--[if lte IE 7]>				
		<link rel="stylesheet" href="css/stylesIE7.css" type="text/css" media="screen" />
		<![endif]-->
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
		<script src="js/cufon-yui.js"></script>
		
		<script src="js/PT_Sans.font.js"></script>
		
		<script src="js/PT_Sans_Narrow.font.js"></script>
			   	
		<script type="text/javascript" src="js/custom.js"></script> 
		
		<script type="text/javascript" src="js/supersized.core.3.2.1.min.js"></script>
		
		<link rel="stylesheet" href="css/supersized.core.css" type="text/css" media="screen" />
		
		<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
					slides  :  	[ {image : 'images/background.jpg'} ]
				});
		    });
		    
		</script>
		
		
	</head>

<body class="body_about">
    	
	<!-- Wrapper starts here -->
	<div id="wrapper">
		
		 <!-- Navigation starts here -->	 
		<div id="menu_wrap">
			
			<!-- Menu starts here -->
			<div id="menu">
		    	
				<!-- Logo -->
		      	<div id="logo">   
			        <h1><a href="index.html" class="logo_image">King size logo</a></h1>      
		      	</div>
		      	<!-- Logo ends here -->
		      
		      	
		      	<!-- Navbar -->
			    <ul id="navbar">
			        <li class="top_nav"><a id="home" class="index" href="index.html">Home<span>back to the home page</span></a></li>  
			        <li class="top_nav"><a id="about" href="about.html">About<span>who we are</span></a>
				        <ul>
				        	<li><a href="about.html">Typography</a></li>
				        	<li><a id="tables" href="tables.html">Tables</a></li>
				        	<li><a id="interactive_elements" href="interactive_elements.html">Interactive elents</a></li> 
				        </ul>				        
			        </li>
			        <li class="top_nav"><a id="portfolio">Portfolio<span>what we are proud of</span></a>
			           <ul>
			              <li><a id="gallery_style">Gallery style</a>
				              <ul>
				                	<li><a id="prettyPhoto">prettyPhoto</a><!-- prettyPhoto gallery / Second level of the navigation -->
				                   	<ul>
				                   		<li><a id="gallery_2col_pp" href="gallery_2col_prettyphoto.html">2 columns</a></li>
				                    	<li><a id="gallery_3col_pp" href="gallery_3col_prettyphoto.html">3 columns</a></li>
				                   		<li><a id="gallery_4col_pp" href="gallery_4col_prettyphoto.html">4 columns</a></li>
				                    	<li><a id="gallery_grid_pp" href="gallery_grid_prettyphoto.html">Grid</a></li> 
				                   	</ul>	
				                   </li>	
				                   <li><a id="fancybox">FancyBox</a><!-- FancyBox gallery / Second level of the navigation -->
				                       <ul>
				                   			<li><a id="gallery_2col_fb" href="gallery_2col_fancybox.html">2 columns</a></li>
				                    		<li><a id="gallery_3col_fb" href="gallery_3col_fancybox.html">3 columns</a></li>
				                   			<li><a id="gallery_4col_fb" href="gallery_4col_fancybox.html">4 columns</a></li>
				                    		<li><a id="gallery_grid_fb" href="gallery_grid_fancybox.html">Grid</a></li> 
				                       </ul>	
				                   </li>	
				                   <li><a id="colorbox">Colorbox</a><!-- ColorBox gallery / Second level of the navigation -->
				                       <ul>
					                   		<li><a id="gallery_2col_cb" href="gallery_2col_colorbox.html">2 columns</a></li>
					                    	<li><a id="gallery_3col_cb" href="gallery_3col_colorbox.html">3 columns</a></li>
					                   		<li><a id="gallery_4col_cb" href="gallery_4col_colorbox.html">4 columns</a></li>
					                    	<li><a id="gallery_grid_cb" href="gallery_grid_colorbox.html">Grid</a></li> 
				                       </ul>	
				                   </li>	
				                	 <li><a id="galleria" href="galleria.html">Galleria</a></li><!-- Galleria gallery -->
				                	 <li><a id="slideviewer" href="slideviewer.html">slideViewer</a></li><!-- Slideviewer gallery -->		                
				              </ul>  		
			              </li>
			              <li><a id="portfolio_style">Portfolio style</a>
			              	<ul>
			              		<li><a id="portfolio_2col" href="portfolio_2col.html">2 columns</a></li>
			              		<li><a id="portfolio_3col" href="portfolio_3col.html">3 columns</a></li>
			              	</ul>	 
			              </li>
			           </ul> 	             
			        </li>
			        <li class="top_nav"><a id="blog" href="blog.html">Blog<span>latest news &amp; tutorials</span></a></li>
			        <li class="top_nav"><a id="contact" href="contact.html">Contact<span>get in touch</span></a></li>
			    </ul> 
			    <!-- Navbar ends here -->
			    	       
		    </div>
		    <!-- Menu ends here -->
		    
		    <!-- Hide menu arrow -->
		    <div id="hide_menu">   		     
		    </div>   		     
		    <!-- Hide menu arrow ends here -->
		       
		</div>
		<!-- Navigation ends here -->
		 
		<!-- Main wrap -->
		<div id="main_wrap">
		
	  		<!-- Main -->
   			 <div id="main">
   			 	
      			<h2 class="section_title">About us</h2><!-- This is your section title -->
      				
      				<!-- Content - full width (class="content_full_width") -->
      				<div id="content" class="content_full_width">
      
						    <h3>There are 1/3 and 2/3 divs</h3>
						      
						     <!-- 1/3 width div (add class="one_third" ) -->  
						    <div class="one_third left"> 
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
						    </div>
				       
				       		<div class="two_thirds right"> <!-- 2/3 width div (add class="two_thirds" and if it is on the right side class="right") -->  
				              	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. </p>
				      		 </div>
				      		 
				      		 
				      		 <h3>There are three 1/3 divs</h3>
						      
						     <!-- 1/3 width div (add class="one_third") -->  
						    <div class="one_third left"> 
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
						    </div>
				       
				       		 <div class="one_third">  <!-- 1/3 width div (add class="one_third") -->
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
						    </div>
				       
						     <div class="one_third right">  <!-- 1/3 width div (add class="one_third" and if it is on the right side class="right")  -->
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
						    </div>
				       
				       
				       		<h3>There are two 1/2 divs</h3>
				       			      
				       			     <!-- 1/3 width div (add class="one_third") -->  
				       			    <div class="one_half"> 
				       				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
				       			    </div>
				       		
				       			     <div class="one_half last">  <!-- 1/3 width div (add class="one_third" and if it is on the right side class="right")  -->
				       				    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
				       			    </div>
				       		
				       
				    
							<h3>Left-aligned image in the text</h3>
							    
							<p>
								
							<!-- add class 'img_floated_left' to the image -->	
							<img src="images/gallery/thumbs/3column.jpg" alt="This is an image" class="img_floated_left">
								
							 <a href="#">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non.</p>
							  
							 	<h3>Right-aligned image in the text</h3>
							 	
							 <p>
							 	
							 <!-- add class 'img_floated_right' to the image -->	
							 <img src="images/gallery/thumbs/3column.jpg" alt="This is an image" class="img_floated_right">    
							  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non.</p>              
							
							
							 <h3>Dropcaps</h3>
							<!-- 1/2 width div (add class="one_half") -->  
							
						    <div class="one_half dropcaps"> 
							    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
						    </div>
					
							 <div class="one_half last dropcaps_alt">  <!-- 1/2 width div (add class="one_half") -->
							    <p>Torem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit.</p>
						    </div>
				
							
							
							
							
							
							 <h3>Lists, blockquotes, buttons and more...</h3>
							 
							 <div class="clear">
							 
							  <p> There are some lists:  </p>
								 
								 <ul class="float_left">
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								 </ul>  
								 
								 <ul class="check_list float_left">
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								 </ul> 
								 
								 <ul class="star_list float_left">
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								 </ul> 
								 
								 <ul class="circle_list float_left">
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								 </ul> 
								 
								 <ul class="arrow_list float_left">
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								 </ul> 
								 
								 <ul class="arrow_alt_list float_left">
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								     <li>List item</li>
								 </ul> 
						  	
							 </div>
							 
							  <p> This is an ordered list: </p>
								  <ol>
								     <li>List item</li>
								      <li>List item</li>
								      <li>List item</li>
								      <li>List item</li>
								 </ol> 							 
						 	
						 		 	 
						 	
							 
							 <p> This is a blockquote:	</p>
							    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non.</blockquote>
						
							 
							 <!-- to make a button add class "button color" to the element and where "color" is one of the colors you see here -->  
							  <p> There are some buttons: </p>
							  <ul class="no_bullets floated_left">
							  <li><a class="button orange" href="#">Button</a></li>
							  <li><a class="button red" href="#">Button</a></li>
							  <li><a class="button rosy" href="#">Button</a></li>
							  <li><a class="button blue" href="#">Button</a></li>
							  <li><a class="button green" href="#">Button</a></li>
							  <li><a class="button pink" href="#">Button</a></li>
							  <li><a class="button white" href="#">Button</a></li>
							  <li><a class="button black" href="#">Button</a></li>
							  <li><a class="button gray" href="#">Button</a></li>
							  </ul> 
							 
							  
							 	<h3>Separator</h3>
							 	
							 	<p>Basic separator</p>
							 	<div class="separator"></div>
							 	
							 	<p>Separator with 'top' link</p>
							 	<div class="separator_top"><a href="#">Top</a></div>
							  
							 
							  <h2> H2 example </h2>
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							  <h3> H3 example </h3>
							  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							  <h4> H4 example </h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum eros eget enim fringilla non dapibus ipsum suscipit. Maecenas congue ornare tellus, ut dapibus elit lacinia non. Praesent quis nunc ac velit pharetra pharetra in et lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							  
              		</div> 
              		<!-- Content ends here --> 
      
      		</div>
      		<!-- Main ends here --> 
             
      	</div>  
    <!-- Main wrap ends here -->
       
  	<!-- Footer -->
	<div id="footer">
		
		<!-- Footer information: copyright, social, etc -->
		<div id="footer_info">
			
			<!-- copyright -->
			<p class="copyright">© 2010, King Size. A few words more.</p>        	
			<!-- copyright ends here -->
			
			
           	<!-- social icons -->	
			<ul class="social">
				<li><a href="#"><img src="images/social/twitter_16.png" alt="twitter"></a></li>
				<li><a href="#"><img src="images/social/delicious_16.png" alt="delicious"></a></li>
				<li><a href="#"><img src="images/social/facebook_16.png" alt="facebook"></a></li>
				<li><a href="#"><img src="images/social/flickr_16.png" alt="flickr"></a></li>
			</ul>
			<!-- social icons end here-->
			
		</div>
		<!-- Footer information ends here -->
		
	</div>        
	<!-- Footer ends here --> 	
      		      
  </div>
<!-- Wrapper ends here-->	

<script>
	Cufon.now(); 		    
</script>

</body>
</html>