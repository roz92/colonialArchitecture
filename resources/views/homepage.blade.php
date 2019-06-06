<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Colonial Architecture</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">
	<!-- header 
   ================================================== -->

   <header> 

   	<div class="header-logo">
	      <a href="/">Metadata Enrichment of Colinial Architecture</a>
	   </div> 

		<a id="header-menu-trigger" href="#0">
		 	<span class="header-menu-text">Menu</span>
		  	<span class="header-menu-icon"></span>
		</a> 

		<nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	   	<h3>Infinity.</h3>  

<!-- 			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
				<li><a class="smoothscroll" href="#about" title="">Buildings</a></li>
				<li><a class="smoothscroll" href="#services" title="">Upload Page</a></li>
				<li><a class="smoothscroll" href="#portfolio" title="">Crowdsourced Buildings</a></li>
				<li><a class="smoothscroll" href="#contact" title="">Contact</a></li>						
			</ul>		 -->	

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="#home" title="">Home</a></li>
				<li><a class="smoothscroll" href="#about" title="">Buildings</a></li>
				<li><a class="nav-link" href="http://127.0.0.1:8000/buildings/">Upload Page</a></li>
				<li><a class="smoothscroll" href="#portfolio" title="">Crowdsourced Buildings</a></li>
				<li><a class="smoothscroll" href="/montly-building-surprise">Surprise</a>
            </li>
				<li><a class="smoothscroll" href="#contact" title="">Contact</a></li>
			</ul>

<!-- 			<ul class="header-social-list">
	         <li>
	         	<a href="#"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
	         </li>
            <li>
            	<a href="#"><i class="fa fa-behance"></i></a>
            </li>
	         <li>
	         	<a href="#"><i class="fa fa-dribbble"></i></a>
	         </li>	         
	      </ul>		 -->

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  		
			  				<h3 class="animate-intro">Welcome to:</h3>
				  			<h1 class="animate-intro">
							Metadata Enrichment of Colinial Architecture
				  			</h1>	

				  			<div class="more animate-intro">
				  				<a class="smoothscroll button stroke" href="#about">
				  					Instructions
				  				</a>
				  			</div>							

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->
<!-- 
		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-twitter"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-instagram"></i></a>
	      </li>
         <li class="animate-intro">
           	<a href="#"><i class="fa fa-behance"></i></a>
         </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-dribbble"></i></a>
	      </li>	      
	   </ul>  --><!-- end home-social-list -->	

		<div class="scrolldown">
			<a href="#instructions" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="instructions">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">Instructions</h3>
	   			<p class="lead animate-this">ArchiMediaL and colonialarchitecture.eu</p>	
	   			<h4>Super easy, just find a colonial building that is nearby or in your current city, perhaps you can find one on the list? CLICK HERE???? <br>
	   			Then all you have to do is upload the photo and add some text where possible!
				</h4>
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   ================================================== -->
   <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   			<a class="btn btn-success" href="{{ route('buildings.index') }}"><h3>Upload New Photos</h3></a>
   	    </div> <!-- end col-full -->
   	</div> <!-- end row -->

 <!--  	<div class="row services-content">

   		<div class="services-list block-1-2 block-tab-full group">

	      	<div class="bgrid service-item animate-this">	

	      		<span class="icon"><i class="icon-paint-brush"></i></span>            

	            <div class="service-content">
	            	<h3 class="h05">Branding</h3>

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		
	         	</div> 	         	 

				</div> end bgrid

				<div class="bgrid service-item animate-this">	

					<span class="icon"><i class="icon-earth"></i></span>                          

	            <div class="service-content">	
	            	<h3 class="h05">Web Design</h3>  

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		
	            </div>	                          

			   </div> end bgrid 

			   <div class="bgrid service-item animate-this">

			   	<span class="icon"><i class="icon-lego-block"></i></span>		            

	            <div class="service-content">
	            	<h3 class="h05">Web Development</h3>

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p>
	            </div> 	            	               

			   </div> end bgrid

				<div class="bgrid service-item animate-this">

					<span class="icon"><i class="icon-megaphone"></i></span>	              

	            <div class="service-content">
	            	<h3 class="h05">Marketing</h3>

		            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>	         		
	            </div>                

				</div>  end bgrid 		   

	      </div> end services-list 
   		
   	</div> end services-content -->  			

   </section> <!-- end services -->


   <!-- portfolio
   ================================================== -->
   <!-- <section id="portfolio">
   	
   	<div class="intro-wrap">

   		<div class="row narrow section-intro with-bottom-sep animate-this">
	   		<div class="col-twelve">
	   			<h3>Showcase</h3>
		   		<h1>See Our Featured Projects.</h1>  			
		   		
		   		<p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>	   			
	   		</div>   		
	   	</div> end row section-intro 		

   	</div>  end intro-wrap 	

   	<div class="row portfolio-content">
   		<div class="col-twelve">
   			<div id="folio-wrap" class="bricks-wrapper">					

   				<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-shutterbug.jpg" data-sub-html="#01" > 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/shutterbug.jpg" alt="Skaterboy">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      Web Development
		     					   </span>
		     					   <h3 class="folio-title">Shutterbug</h3>	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div>  end item-wrap 
						
						<div id="01" class='hide'>
							<h4>Shutterbug</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>
	        		</div> end folio-item 

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-yellowwall.jpg" data-sub-html="#02"> 	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/yellowwall.jpg" alt="Shutterbug">	                     
	                     <div class="item-text">
	                     	<span class="folio-types">
		     					      Marketing
		     					   </span>
		     					   <h3 class="folio-title">Yellow Wall</h3>  	     					   
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div>  end item-wrap 

	               <div id="02" class='hide'>
							<h4>Yellow Wall</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>	               
	        		</div> end folio-item

	        		<div class="brick folio-item">
	               <div class="item-wrap animate-this" data-src="images/portfolio/gallery/g-architecture.jpg" data-sub-html="#03" >   	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/architecture.jpg" alt="Explore">	                     
	                     <div class="item-text">	                     		     					    
		     					   <span class="folio-types">
		     					      Web Design
		     					   </span>
		     					   <h3 class="folio-title">Architecture</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div>  end item-wrap 	

	               <div id="03" class='hide'>
							<h4>Architecture</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>               
	        		</div> end folio-item 

					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="images/portfolio/gallery/g-minimalismo.jpg"  data-sub-html="#04" >
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/minimalismo.jpg" alt="Minimalismo">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					      Web Design
		     					   </span>
		     					   <h3 class="folio-title">Minimalismo</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div>  end item-wrap 

	               <div id="04" class='hide'>
							<h4>Minimalismo</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>  	               
	        		</div>  end folio-item 

					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="images/portfolio/gallery/g-skaterboy.jpg"  data-sub-html="#05" >  	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/skaterboy.jpg" alt="Bicycle">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					      Branding
		     					   </span>
		     					   <h3 class="folio-title">Skaterboy</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div>  end item-wrap 

	               <div id="05" class='hide'>
							<h4>Skaterboy</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="https://www.behance.net/">Details</a></p>
						</div>	               
	        		</div>  end folio-item 	           
					<div class="brick folio-item">
	               <div class="item-wrap animate-this"  data-src="images/portfolio/gallery/g-salad.jpg"  data-sub-html="#06">     	
	                  <a href="#" class="overlay">
	                  	<img src="images/portfolio/salad.jpg" alt="Salad">	                     
	                     <div class="item-text">	     					    
		     					   <span class="folio-types">
		     					      Branding
		     					   </span>
		     					   <h3 class="folio-title">Salad</h3>
		     					</div>                                        
	                  </a>
	                  <a href="https://www.behance.net/" class='details-link' title="details">
	                  	<i class="icon-link"></i>
	                  </a>
	               </div>  end item-wrap 

	               <div id="06" class='hide'>
							<h4>Salad</h4>
							<p>Lorem ipsum Dolor deserunt labore sint officia. Magna et aute enim proident tempor sunt quis nulla voluptate fugiat velit. <a href="www.behance.net">Details</a></p>
						</div>	               
	        		</div>  end folio-item    				

   			</div>  end folio-wrap 
   		</div>  end twelve 
   	</div>  end portfolio-content    	

   </section>   end portfolio -->

<section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">About my research</h3>
	   			<p class="lead animate-this">ArchiMediaL and colonialarchitecture.eu</p>	
	   			<h4>My research focuses on a case study of ArchiMediaL. With the help of machine learning algorithms ArchiMediaL develops new tools to enable automatic development and linking of metadata and image content. The dataset that ArchiMediaL uses is the colonial architecture dataset managed by TU Delft. The dataset contains information European colonial architecture designed and created between 1850 and 1970. <br>
	   			Metadata is essentially information about data. Good descriptive metadata is important to make sure that resources will survive and continue to be accessible in the future. Without metadata a digital resource may not be retrievable, identifiable or usable. This leads to the importance of enriching the metadata of colonial architecture.
				As aforementioned, ArchiMediaL uses machine learning algorithms, but these algorithms are only as good as the data they are trained on. This means that the dataset needs to accurately represent the real world. 
				</h4>
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!-- about
   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="animate-this">About Me</h2>
   		</div>   		
   	</div>   	

      <div class="row flex-container">
    
         <div id="testimonial-slider" class="flex-slider animate-this">

            <ul class="slides">

               <li>
                  <p>
                  BLA BLA BLA
                  </p> 

                  <div class="testimonial-author">
                    	<img src="images/avatars/test.png" alt="Author image">
                    	<div class="author-info">
                    		Roz Sabir
                    		<span class="position">Msc Information Sciences, VU Amsterdam</span>
                    	</div>
                  </div>                 
             	</li> <!-- end slide -->

              <!--  <li>
                  <p>
                  This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                  Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.    
                  </p>

               	<div class="testimonial-author">
                    	<img src="images/avatars/user-03.jpg" alt="Author image">
                    	<div class="author-info">
                    		John Doe
                    		<span>CEO, ABC Corp.</span>
                    	</div>
                  </div>                                         
               </li>  end slide --> 

            </ul> <!-- end slides -->

         </div> <!-- end testimonial-slider -->         
        
      </div> <!-- end flex-container -->

   </section> <!-- end testimonials -->

   ================================================== -->
   <section id="contact">

      <div class="overlay"></div>

		<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-twelve">
   			<h3>Contact</h3>
   			<h1>Get In Touch.</h1>

   			<p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>

   			<h5>Contact Information</h5>

<!--          	<div class="cinfo">
	   			<h6>Where to Find Us</h6>
	   			<p>
	            	1600 Amphitheatre Parkway<br>
	            	Mountain View, CA<br>
	            	94043 US
	            </p>
	   		</div> <!-- end cinfo --> -->

	   		<div class="cinfo">
	   			<h6>Email Me At</h6>
	   			<p>
	   				r.sabir@student.vu.nl<br>
				   	rozsabir1@gmail.com			     
				   </p>
	   		</div> <!-- end cinfo -->

	   		<div class="cinfo">
	   			<h6>Call Me At</h6>
	   			<p>
	   				Mobile: (+31) 6 411 86323<br>
				   </p>
	   		</div>
   		</div> 
   	</div> <!-- end section-intro -->

<!--    	<div class="row contact-content">

   		<div class="col-seven tab-full animate-this">

   			<h5>Send Us A Message</h5>

            <form name="contactForm" id="contactForm" method="post">     			

               <div class="form-field">
 					   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
               </div>

               <div class="row">
                 	<div class="col-six tab-full">
                 		<div class="form-field">
                 			<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                 		</div>		      			   
		            </div>
	            	<div class="col-six tab-full">	            
	            		<div class="form-field">
	            			<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	                  </div>		     				   
		            </div>
               </div>
                                         
               <div class="form-field">
	              	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	            </div> 

               <div class="form-field">
                  <button class="submitform">Submit</button>

                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>                             
       			      <div class="s-loader">
							  	<div class="bounce1"></div>
							  	<div class="bounce2"></div>
							  	<div class="bounce3"></div>
							</div>
						</div>
               </div>

      		</form> <!-- end form -->

 

         	

         </div> <!-- end cinfo --> 

   	</div> <!-- end row contact-content -->
		
	</section> <!-- end contact -->


	<!-- footer
   ================================================== -->
<!-- 	<footer>
     	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-five tab-full footer-about">       

	            <h4 class="h05">Infinity.</h4>

	            <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.</p>	            

		      </div> 
	      	<div class="col-three tab-full footer-social">

	      		<h4 class="h05">Follow Us.</h4>

	      		<ul class="list-links">
	      			<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Behance</a></li>
						<li><a href="#">Dribble</a></li>						
					</ul>

	      	</div>

	      	<div class="col-four tab-full footer-subscribe end">

	      		<h4 class="h05">Get Notified.</h4>

	      		<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa.</p>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" class="group" novalidate="true">

							<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="type email" required=""> 
	   		
			   			
			   			<button><i class="icon-mail"></i></button>
		   	
		   				<label for="mc-email" class="subscribe-message"></label>
			
						</form>

	      		</div>
	      	           	
	      	</div>       	    

	      </div> 
   	</div>  -->

   	<div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Infinity 2016.</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>		               
	      	</div>

      	</div>   	

      </div> 

      <div id="go-top">
		   <a class="smoothscroll" title="Back to Top" href="#top">
		   	<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
		   </a>
		</div>		
   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>