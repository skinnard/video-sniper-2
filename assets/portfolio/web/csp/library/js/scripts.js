/*
 * Author: JAM
*/


/*
 * Get Viewport Dimensions
*/
function updateViewportDimensions() {

	/* This is basically a string of variable declaration, using the shorthand "," instead of typing "var" before each variable */
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;

	/* This function returns two properties, width and height */
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) { // This function accepts three parameters (can be fuctions, variables, object properties/methods, whatever)
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; } // Check to make sure that the same uniqueId isn't caled twice
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();
// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 25;

/*
 * AJAX Page Loader
*/

function navHeight($) {
	var monthPicker = $('.nav').outerHeight();
	var thumbnailsHeight = viewport.height - monthPicker - 20;

	$('.thumbnails').css('height', thumbnailsHeight);
}

function getLinkParameter(link, sParam) { // Reads parameters from Link (called on menu link click)
		var sLinkURL = link.substring(1);
		var sURLVariables = sLinkURL.split('&');
		for (var i = 0; i < sURLVariables.length; i++) {
				var sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] === sParam) {
						return sParameterName[1];
				}
	}
}

// function getURLParameter(sParam) { // Reads parameters from URL
//     var sPageURL = window.location.search.substring(1);
//     var sURLVariables = sPageURL.split('&');
//     for (var i = 0; i < sURLVariables.length; i++) {
//         var sParameterName = sURLVariables[i].split('=');
// 		if (sParameterName[0] === sParam) {
//             return sParameterName[1];
//         }
// 	}
// }

function loadYear(year) {
		$.ajax({
				type				: "POST",
				url					: "library/php/yearload.php",
				data				:'year=' + year,
				dataType		: "html",
				success			: function(result){
													if(result)
													{
															$('.month-list').hide().replaceWith(result);
															$('#month').html('MONTH');
													}
											}
		});
}

function loadMonth(year, month) {
		$.ajax({
				type				: "POST",
				url					: "library/php/monthload.php",
				data				:'year=' + year + '&month=' + month,
				dataType		: "html",
				success			: function(result){
													if(result)
													{
														$('.thumbnails').fadeOut(250,
															function(){
																$(this).html(result).css({
																	display: 'block',
																	opacity: 0
																});

																navHeight($);
																var nav = $('.thumbnails');
																nav.jScrollPane();

																$(this).animate({
																	opacity: 1
																}, 350);
														});
													}
											}
		});
}

function loadPage(year, month, project) {	// Ajax that does the loading
		$.ajax({
				type				: "POST",
				url					: "library/php/pageload.php",
				data				:'year=' + year + '&month=' + month + '&project=' + project,
				dataType		: "html",
				success			: function(result){
													if(result)
													{
															$('#content').fadeOut(50, function(){
																$('.content-wrapper').animate({
																	scrollTop: 0
																}, function(){
																	$('#content').html(result).fadeIn(350);
																	return;
																});
															});
													}
											}
		});
}

var mainTargetWidth = 0;
function mainSizing(open, speed, callback) {
	var navWidth = $('#nav-wrapper').outerWidth();
	var navClosed = 15;

	if (viewport.width >= 768) {
		if (open === false) {
			mainTargetWidth = viewport.width - navClosed;
		} else {
			mainTargetWidth = viewport.width - navWidth;
		}
		callback(speed);
	} else {
		mainTargetWidth = viewport.width;
	}
}
function navOpenClose(callback) {
	$('.nav-wrapper').toggleClass('nav-wrapper-closed', 300, 'easeOutSine');
	$('.content-main-info').toggleClass('content-main-info-closed', 300, 'easeOutSine');
	$('.fa-angle-double-left').toggleClass('fa-angle-double-right');
	$('.header-wrapper').toggleClass('header-wrapper-nav-padding');
	$('.pop-out-button i').css('padding-left', '5px');
	callback();
}


/*
 * Put all your regular jQuery in here.
*/

jQuery(document).ready(function($) {

	document.addEventListener("touchstart", function(){}, true); // Allows CSS override for Safari Mobile tap

	mainSizing (true, 0, function(speed){
		$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
			width: mainTargetWidth
		}, speed);
	});

	navHeight($);
	$('.content-wrapper').scrollTop(0);

	//POP OUT MENU FUNCTIONALITY
	$('.pop-out-button').click(function() {
		navOpenClose(function(){
			if ($('#nav-wrapper').hasClass('nav-wrapper-closed')) {
				mainSizing (true, 250, function(speed){
					$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
						width: mainTargetWidth
					}, speed);
				});
				$('.mobileDim').css('display', 'block');
				$('.mobileDim').animate({
					opacity: 0.7
				}, 300);
			} else {
				mainSizing (false, 250, function(speed){
					$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
						width: mainTargetWidth
					}, speed);
				});
				$('.mobileDim').animate({
					opacity: 0
				}, 300, function(){ $('.mobileDim').css('display', 'none'); });
			}
		});
	});

	//AJAX FUNCTIONALITY
	$('.year').click(function(e) {
		e.preventDefault();

		var yearLink = $(this).attr('href');
		var linkLocation = getLinkParameter(yearLink, 'year');

		loadYear(linkLocation);
	});

	$('.month-dropdown').on("click", ".month", function (e){
		e.preventDefault();

		var monthLink = $(this).attr('href'); // = ?month=july&project=prokect-one (sting)

		var monthLocation = {
			year		:	getLinkParameter(monthLink, 'year'),
			month		:	getLinkParameter(monthLink, 'month')
		};

		loadMonth(monthLocation.year, monthLocation.month);
  });

	$('.nav-wrapper').on("click", ".thumbnail-link", function (e){
		e.preventDefault();

		var projectLink = $(this).attr('href'); // = ?year=2015&month=july&project=prokect-one (sting)

		var projectLocation = {
			year		:	getLinkParameter(projectLink, 'year'),
			month		:	getLinkParameter(projectLink, 'month'),
			project	:	getLinkParameter(projectLink, 'project')
		};

		loadPage(projectLocation.year, projectLocation.month, projectLocation.project);

		$('.thumbnail-link').removeClass('active');
		$(this).addClass('active');

		if (viewport.width < 1030) {
			navOpenClose(function(){
				if ($('#nav-wrapper').hasClass('nav-wrapper-closed')) {
					mainSizing (true, 250, function(speed){
						$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
							width: mainTargetWidth
						}, speed);
					});
				} else {
					mainSizing (false, 250, function(speed){
						$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
							width: mainTargetWidth
						}, speed);
					});
				}
			});
		}
  });
	//END OF AJAX FUNCTIONALITY

	//DROP SHADOW ON HEADER WHEN SCROLL
	$('.content-wrapper').scroll(function() {
    if ($(this).scrollTop() <= 30)
		 {
        $('.content-main-info').css({
                'box-shadow': 'none',
                '-moz-box-shadow' : 'none',
                '-webkit-box-shadow' : 'none' });
    }
    else {
        $('.content-main-info').css({
                'box-shadow': '0px 10px 30px rgba(99,99,99,0.25)',
                '-moz-box-shadow' : '0px 10px 30px rgba(99,99,99,0.25)',
                '-webkit-box-shadow' : '0px 5px 30px rgba(99,99,99,0.25)' });
    }
	});

	//TOGGLE YEAR/MONTH DROPDOWN
	$('.year-dropdown').click(function() {
		$('.year-list').toggleClass('visable');
		$('.month-list').removeClass('visable');
	});

	$('.month-dropdown').click(function() {
		$('.month-list').toggleClass('visable');
		$('.year-list').removeClass('visable');
	});

	//REPLACE TEXT IN YEAR/MONTH DROPDOWN MENU HEADER WHEN CLICKED
	$('.year-list li a').click(function(){
		var text = $(this).text();
		$('#year').html(text);
	});

	$('.month-list-parent').on("click", ".month-li", function (){
		var text = $(this).text();
		$('#month').html(text);
	});



	$(window).resize(function () {
		waitForFinalEvent( function() { // called once ever xx ms (see top)

			viewport = updateViewportDimensions(); // updated the Viewport Dimentioned once ever xx seconds (xx = timeToWaitForLast)

			// Re-calc Nav Height
			navHeight($);

			// Re-calc Nav/Main Widths
			if ($('#nav-wrapper').hasClass('nav-wrapper-closed')) {
				mainSizing (false, 0, function(speed){
					$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
						width: mainTargetWidth
					}, speed);
				});
			} else {
				mainSizing (true, 0, function(speed){
					$('#main-wrapper, .content-wrapper, .header-wrapper').animate({
						width: mainTargetWidth
					}, speed);
				});
			}

			// Re-init JSScroll
			var api = $('.thumbnails').data('jsp');
    	api.reinitialise();

		}, timeToWaitForLast, "mainResizeScripts"); // You can have any unique script identifier, in this case "mainResizeScripts" but it could be anything ...
	});

	//UNDIM BACKGROUND WHEN THUMBS CLICKED
	$('.thumbnails').on("click", ".thumb", function (){
			$('.mobileDim').animate({
				opacity: 0
			}, 300, function(){ $('.mobileDim').css('display', 'none'); });
	});

	//CUSTOM SCROLL BAR INIT SCRIPT
		// JScrollPane
	$(function() {
		var nav = $('.thumbnails');
		nav.jScrollPane();
	});

}); /* end of as page load scripts */

// function outerClick (elem, listener, expander, callback) {
// if ( !(elem.hasClass(listener)) && $(expander).hasClass('visable') ) {
// 	callback();
// }
// }

$(document).click(function(event) {
		var elem = $(event.target).closest('ul');

		outerClick (elem, 'month-dropdown', '.month-list', function(){
			$('.month-list').toggleClass('visable');
		});

		outerClick (elem, 'year-dropdown', '.year-list', function(){
			$('.year-list').toggleClass('visable');
		});
});
