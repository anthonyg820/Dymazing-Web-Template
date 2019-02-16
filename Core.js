
function getScreenHeight()
{	
	
	var screenHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
	return screenHeight;
			
}

function getScreenWidth()
{	
	
	var screenWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
	return screenWidth;
			
}

function setElementToScreenHeight(element)
{
	var screenHeight = getScreenHeight();
	var screenWidth = getScreenWidth();
	
	if(screenWidth > 950)
		document.getElementById(element).style.height = screenHeight + "px";
}

function setSlideShow()
{
	var screenHeight = getScreenHeight();
	var screenWidth = getScreenWidth();
	
	var slides = document.getElementsByClassName("slide");
	var overlays = document.getElementsByClassName("slideshowRowOverlay");
	
	setElementToScreenHeight("slideshowRow");
	
	for(i = 0; i < slides.length; i++)
	{
		slides[i].style.height = screenHeight + "px";
		overlays[i].style.height = screenHeight + "px";
	}
}



function toggleScrollToTopButton()
{
	var scrollValue = document.documentElement.scrollTop;
	
	if(scrollValue > getScreenHeight()-100)
		document.getElementById('scrollToTopButton').style.display = "block";
	else
		document.getElementById('scrollToTopButton').style.display = "none";
}

function scrollToTop()
{
	scrollToY(0, 500, 'easeInOutQuint');
}



window.requestAnimFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();


// main function
function scrollToY(scrollTargetY, speed, easing) {
    // scrollTargetY: the target scrollY property of the window
    // speed: time in pixels per second
    // easing: easing equation to use

    var scrollY = window.scrollY,
        scrollTargetY = scrollTargetY || 0,
        speed = speed || 2000,
        easing = easing || 'easeOutSine',
        currentTime = 0;

    // min time .1, max time .8 seconds
    var time = Math.max(.1, Math.min(Math.abs(scrollY - scrollTargetY) / speed, .8));

    // easing equations from https://github.com/danro/easing-js/blob/master/easing.js
    var PI_D2 = Math.PI / 2,
        easingEquations = {
            easeOutSine: function (pos) {
                return Math.sin(pos * (Math.PI / 2));
            },
            easeInOutSine: function (pos) {
                return (-0.5 * (Math.cos(Math.PI * pos) - 1));
            },
            easeInOutQuint: function (pos) {
                if ((pos /= 0.5) < 1) {
                    return 0.5 * Math.pow(pos, 5);
                }
                return 0.5 * (Math.pow((pos - 2), 5) + 2);
            }
        };

    // add animation loop
    function tick() {
        currentTime += 1 / 60;

        var p = currentTime / time;
        var t = easingEquations[easing](p);

        if (p < 1) {
            requestAnimFrame(tick);

            window.scrollTo(0, scrollY + ((scrollTargetY - scrollY) * t));
        } else {
            console.log('scroll done');
            window.scrollTo(0, scrollTargetY);
        }
    }

    // call it once to get started
    tick();
}



function scrollToTarget(element)
{	
	var elementID = document.getElementById(element);
	var elementPosition = elementID.offsetTop;
	
	scrollToY(elementPosition, 500, 'easeInOutQuint');
}



function toggleNextSlide()
{
	var slides = document.getElementsByClassName("slide");
	
	if(slides[0].style.display == "block" || slides[0].style.display == "")
	{
		slides[0].style.display = "none";
		slides[1].style.display = "block";
	}
}

function togglePreviousSlide()
{
	var slides = document.getElementsByClassName("slide");
	
	if(slides[1].style.display == "block" || slides[1].style.display == "")
	{
		slides[1].style.display = "none";
		slides[0].style.display = "block";
	}
}


function toggleNextTestimonial()
{
	var testimonials = document.getElementsByClassName("testimonial");
	
	if(testimonials[0].style.display == "block" || testimonials[0].style.display == "")
	{
		testimonials[0].style.display = "none";
		testimonials[1].style.display = "block";
	}
}

function togglePreviousTestimonial()
{
	var testimonials = document.getElementsByClassName("testimonial");
	
	if(testimonials[1].style.display == "block" || testimonials[1].style.display == "")
	{
		testimonials[1].style.display = "none";
		testimonials[0].style.display = "block";
	}
}


