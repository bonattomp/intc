 // all productos sections from the intenal pages
 
 
// Boys submenu

$(document).ready(function() {
	$.get("../../category/boys_submenu.html", function(data) {
		$("#boys_submenu").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/boys_submenu.html", function(data) {
		$("#boys_submenu_xs").html(data);
	});
}); 

// Boys sections

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
	$.get("../../category/boys/boys_suits_thumbnails.html", function(data) {
		$("#boys_suits_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("../../category/boys/boys_accessories_thumbnails.html", function(data) {
		$("#boys_accessories_thumbnails").html(data);
	});
}); 




