$(document).ready(function() {
	$.get("menu.html", function(data) {
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
	$.get("location.html", function(data) {
		$("#location").html(data);
	});
}); 

$(document).ready(function() {
	$.get("footer.html", function(data) {
		$("#footer").html(data);
	});
}); 
$(document).ready(function() {
	$.get("coupons.html", function(data) {
		$("#coupons").html(data);
	});
}); 

