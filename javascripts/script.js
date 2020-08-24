/* Author: 

*/

/* trigger when page is ready */
$(document).ready(function (){

	// app code here

	$("#sticker").sticky({
		topSpacing   : 0,
		getWidthFrom : 'header'
	});
	
	/* waypoint checks */

	$('#environmental').waypoint(function() {
		$('.sub-nav ul li').removeClass('active');
		$('li.environmental').addClass('active');
	}, {offset: 50});
	$('#emissions').waypoint(function() {
		$('.sub-nav ul li').removeClass('active');
		$('li.emissions').addClass('active');
	}, {offset: 50});
	$('#hazardous').waypoint(function() {
		$('.sub-nav ul li').removeClass('active');
		$('li.hazardous').addClass('active');
	}, {offset: 50});
	$('#health').waypoint(function() {
		$('.sub-nav ul li').removeClass('active');
		$('li.health').addClass('active');
	}, {offset: 50});

	/* optional triggers

	$(window).load(function() {
		
	});

	$(window).resize(function() {
		
	});

	*/

	/* animated scrolling */

	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 1000, 'easeInOutQuart');
			return false;
			}
		}
		});
	});

});






















