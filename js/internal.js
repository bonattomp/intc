$(document).ready(function() {
	$.get("new_arrivals_thumbnails.html", function(data) {
		$("#new_arrivals_thumbnails").html(data);
	});
}); 