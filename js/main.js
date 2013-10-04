$(document).ready(function() {
  	var fullLocation = location.protocol + "//" + location.host + "/test_site/v2";
	$.get(fullLocation + "/menu.html", function(data) {
		$("#menu").html(data);
		$("#menu ul.nav a").each(function() {
			$(this).attr("href", fullLocation + "/" + $(this).attr("href"));
		});
	});
	
	$.get(fullLocation + "/footer.html", function(data) {
		$("#footer").html(data);
		$("#footer").each(function() {
			$(this).attr("href", fullLocation + "/" + $(this).attr("href"));
		});
	});
 
	$.get(fullLocation + "/banner.html", function(data) {
		$("#banner").html(data);
	});
 
	$.get(fullLocation + "/mini_boxes.html", function(data) {
		$("#mini_boxes").html(data);
	});
 
	$.get(fullLocation + "/find_your_store.html", function(data) {
		$("#find_your_store").html(data);
	});
 
	// $.get(fullLocation + "/footer.html", function(data) {
		// $("#footer").html(data);
	// });
 
	$.get(fullLocation + "/coupons_thumbnails.html", function(data) {
		$("#coupons").html(data);
	});
 
	$.get(fullLocation + "/locations_submenu.html", function(data) {
		$("#locations_submenu").html(data);
	});
}); 




/*
// $(document).ready(function() {
	// $.get("menu.html", function(data) {
		// $("#menu").html(data);
	// });
// }); 

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
	$.get("footer.html", function(data) {
		$("#footer").html(data);
	});
}); 
$(document).ready(function() {
	$.get("coupons_thumbnails.html", function(data) {
		$("#coupons").html(data);
	});
}); 

// $(document).ready(function() {
	// $.get("locations_submenu.html", function(data) {
		// $("#locations_submenu").html(data);
	// });
// }); 


$(document).ready(function() {
	alert(location.protocol + "//" + location.host + "/inc/menu.html");
	$.get("http://localhost/inc/menu.html", function(data) {
		$("#menu").html(data);
	});
});*/



