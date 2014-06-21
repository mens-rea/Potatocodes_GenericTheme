$(document).ready(function() {
	$(".royalSlider").royalSlider({
		arrowsNav: true,
	    loop: true,
	    keyboardNavEnabled: true,
	    controlsInside: false,
	    imageScaleMode: 'fill',
	    arrowsNav: false,
	    autoScaleSlider: true, 
	    autoScaleSliderWidth: 1400,     
	    autoScaleSliderHeight: 680,
	    controlNavigation: 'none',
	    thumbsFitInViewport: false,
	    startSlideId: 0,
	    usePreloader: true,
	    autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: false,
    		stopAtAction: false,
    		delay: 3000
    	},
	    allowCSS3: true,
	    transitionType:'fade',
	    transitionSpeed: 500,
	    deeplinking: {
	      enabled: true,
	      change: false
	    },
	    /* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
	    imgWidth: 1400,
	    imgHeight: 680
	});
});
