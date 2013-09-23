 // all productos sections from the intenal pages
 
 
// Boys submenu

$(document).ready(function() {
	$.get("/inc/category/boys/boys_submenu.html", function(data) {
		$("#boys_submenu").html(data);
	});
}); 

// Boys sections

$(document).ready(function() {
	$.get("/inc/category/boys/boys_tops_thumbnails.html", function(data) {
		$("#boys_tops_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/boys/boys_bottoms_thumbnails.html", function(data) {
		$("#boys_bottoms_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/boys/boys_outerwear_thumbnails.html", function(data) {
		$("#boys_outerwear_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/boys/boys_suits_thumbnails.html", function(data) {
		$("#boys_suits_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/boys/boys_accessories_thumbnails.html", function(data) {
		$("#boys_accessories_thumbnails").html(data);
	});
}); 




// Boys submenu

$(document).ready(function() {
	$.get("/inc/category/boys_submenu.html", function(data) {
		$("#boys_submenu").html(data);
	});
}); 

// Mens section

$(document).ready(function() {
	$.get("new_arrivals_thumbnails.html", function(data) {
		$("#new_arrivals_thumbnails").html(data);
	});
});

$(document).ready(function() {
	$.get("/inc/category/mens_tops_thumbnails.html", function(data) {
		$("#mens_tops_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/mens_bottoms_thumbnails.html", function(data) {
		$("#mens_bottoms_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/mens_outerwear_thumbnails.html", function(data) {
		$("#mens_outerwear_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/mens_suits_thumbnails.html", function(data) {
		$("#mens_suits_thumbnails").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/category/mens_accessories_thumbnails.html", function(data) {
		$("#mens_accessories_thumbnails").html(data);
	});
}); 