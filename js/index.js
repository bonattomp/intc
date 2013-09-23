$(document).ready(function() {
	$.get("/inc/menu.html", function(data) {
		$("#menu").html(data);
	});
}); 

$(document).ready(function() {
	$.get("banner.html", function(data) {
		$("#banner").html(data);
	});
}); 

$(document).ready(function() {
	$.get("mini_boxes.html", function(data) {
		$("#mini_boxes").html(data);
	});
}); 

$(document).ready(function() {
	$.get("find_your_store.html", function(data) {
		$("#find_your_store").html(data);
	});
}); 

$(document).ready(function() {
	$.get("/inc/footer.html", function(data) {
		$("#footer").html(data);
	});
}); 
$(document).ready(function() {
	$.get("coupons_thumbnails.html", function(data) {
		$("#coupons").html(data);
	});
}); 
$(document).ready(function() {
	$.get("/inc/locations_submenu.html", function(data) {
		$("#locations_submenu").html(data);
	});
}); 