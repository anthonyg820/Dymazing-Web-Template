<!DOCTYPE html>

<html lang="en">

	<head>
	
		<meta charset = "UTF-8" />
		<title> Dymazing Template </title>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<link rel = "stylesheet" type = "text/css" media = "all" href = "http://localhost/Github Sites/Dymazing Template/V1/Core.css">
		<link href="https://fonts.googleapis.com/css?family=Coda|Saira+Condensed" rel="stylesheet">	
		<script src = "http://localhost/Github Sites/Dymazing Template/V1/Core.js"></script>
		
	</head>

	<body id = "body" onload = "setSlideShow()" onresize = "setSlideShow()" onscroll = "toggleScrollToTopButton();">
				
		<?php 
		
			//include("file:///C:/xampp/htdocs/Github Sites/Dymazing Template/Core.php");
			include("file:///C:/xampp/htdocs/Github Sites/Dymazing Template/V1/Mega Navigation/Normal/NormalNavigation.php"); 
		
		?>
				
		<div id = "ALLCONTAINER">
		
			<section id = "slideshowRow">
						
				<div id = "slide1" class = "slide">
				
					<div class = "slideshowRowOverlay"></div>
					
					<div id = "slide1Content">
					
						<h2> Dymazing Web Template </h2>
						<h3> Stylish. Responsive. Powerful. </h3>
					
					</div>
				
				</div>
				
				<div id = "slide2" class = "slide">
				
					<div class = "slideshowRowOverlay"></div>
					
					<div id = "slide2Content">
					
						<h2> The ultimate mixture of creativity, power and customization. </h2>
						
						<div id = "viewServicesButton" onclick = "scrollToTarget('servicesRow')"> View our services </div>
					
					</div>
				
				</div>
				
				<div id = "slideshowRowBottomBar"> <div id = "slideshowRowBottomBarButton" onclick = "scrollToTarget('servicesRow')"> <div id = "slideshowRowBottomBarButtonIMG"> </div> </div> </div>
			
			
				<img id = "prevSlideButton" src = "http://localhost/Github Sites/Dymazing Template/Images/leftarrow.svg" onclick = "togglePreviousSlide()">
				<img id = "nextSlideButton" src = "http://localhost/Github Sites/Dymazing Template/Images/rightarrow.svg" onclick = "toggleNextSlide()">
			
			</section>
			
			<section id = "servicesRow" class = "sectionRow">
			
				<div id = "sb1" class = "serviceBlock">
				
					<div class = "serviceIMGHolder"></div>
					
					<h4> CONSULTING </h4>
					
					<p>
					
						Need advice on something important? Contact me today for a free consultation.
					
					</p>
					
					<div class = "serviceBlockActionButton" onclick = "scrollToTarget('testimonialsRow')"> Contact us </div>
				
				</div>
				
				<div id = "sb2" class = "serviceBlock">
				
					<div class = "serviceIMGHolder"></div>
					
					<h4> RESPONSIVE DEVELOPMENT </h4>
					
					<p>
					
						Need advice on something important? Contact me today for a free consultation.
					
					</p>
					
					<div class = "serviceBlockActionButton" onclick = "scrollToTarget('testimonialsRow')"> Contact us </div>
				
				</div>
				
				<div id = "sb3" class = "serviceBlock">
				
					<div class = "serviceIMGHolder"></div>
					
					<h4> WEB DESIGN </h4>
					
					<p>
					
						Need advice on something important? Contact me today for a free consultation.
					
					</p>
					
					<div class = "serviceBlockActionButton" onclick = "scrollToTarget('testimonialsRow')"> Contact us </div>
				
				</div>
			
			</section>
			
			<section id = "testimonialsRow" class = "sectionRow">
			
				<div id = "testimonialsRowContent">
				
					<img id = "testNextButton" src = "http://localhost/Github Sites/Dymazing Template/Images/leftarrow.svg" class = "testimonialControlButton" onclick = "togglePreviousTestimonial()">
				
					<div id = "testimonial1" class = "testimonial">
					
						<h3> Michael </h3>
						
						<q>
						
							This is the best website template EVER! It's so powerful and customizable!
						
						</q>
					
					</div>
					
					<div id = "testimonial2" class = "testimonial">
					
						<h3> Samantha </h3>
						
						<q>
						
							I loveee this template. I use it for all of my websites!
						
						</q>
					
					</div>
					
					<img id = "testPrevButton" src = "http://localhost/Github Sites/Dymazing Template/Images/rightarrow.svg" class = "testimonialControlButton" onclick = "toggleNextTestimonial()">
				
				</div>
			
			</section>
			
			<section id = "contactRow" class = "sectionRow">
			
				<h3> Contact us </h3>
			
				<form>
				
					<input type = "text" id = "contactName" name = "contactName" value placeholder = "Full Name">
					<input type = "text" id = "contactSubject" name = "contactSubject" value placeholder = "Subject">
					<input type = "email" id = "contactEmail" name = "contactEmail" value placeholder = "Email">
					<textarea id = "contactText" name = "contactText" placeholder = "Type your message here."></textarea>
					
					<button type = "submit" id = "contactSubmitButton" href = "http://localhost/Personal Website/Home/Home.php"> SEND </button>
				
				</form>
			
			</section>
			
			<footer id = "footer" class = "sectionRow">
			
				&copy Dymazing Template | 
				<span onclick = "scrollToTarget('servicesRow')"> Services </span> |
				<span onclick = "scrollToTarget('testimonialsRow')"> Testimonials </span> |
				<span onclick = "scrollToTarget('contactRow')"> Contact </span>
			
			</footer>
			
			<div id = "scrollToTopButton" onclick = "scrollToTop()"></div>
			
			<?php //include("file:///C:/xampp/htdocs/Personal Website/Footer/Footer.php"); ?>
					
		</div>
	
	</body>
	
</html>