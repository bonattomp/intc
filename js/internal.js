 // all products sections from the intenal pages
 
 
// CATEGORY BOYS

$(document).ready(function() {
	$.get("../../category/boys_submenu.html", function(data) {
		$("#boys_submenu").html(data);
	});
}); 
	// call submenu for smartphone format
$(document).ready(function() {
	$.get("../../category/boys_submenu.html", function(data) {
		$("#boys_submenu_xs").html(data);
	});
}); 

// Boys thumbnais

$(document).ready(function() {
	$.get("../../category/boys/boys_tops_thumbnails.html", function(data) {
		$("#boys_tops_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/boys/boys_bottoms_thumbnails.html", function(data) {
		$("#boys_bottoms_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/boys/boys_outerwear_thumbnails.html", function(data) {
		$("#boys_outerwear_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/boys/boys_dress_thumbnails.html", function(data) {
		$("#boys_dress_thumbnails").html(data);
	});
}); 

// CATEGORY MENS

$(document).ready(function() {
	$.get("../../category/mens_submenu.html", function(data) {
		$("#mens_submenu").html(data);
	});
}); 
	// call submenu for smartphone format
$(document).ready(function() {
	$.get("../../category/mens_submenu.html", function(data) {
		$("#mens_submenu_xs").html(data);
	});
}); 

// Mens thumbnais

$(document).ready(function() {
	$.get("../../category/mens/mens_tops_thumbnails.html", function(data) {
		$("#mens_tops_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/mens/mens_outerwear_thumbnails.html", function(data) {
		$("#mens_outerwear_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/mens/mens_suits_thumbnails.html", function(data) {
		$("#mens_suits_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/mens/mens_accessories_thumbnails.html", function(data) {
		$("#mens_accessories_thumbnails").html(data);
	});
}); 