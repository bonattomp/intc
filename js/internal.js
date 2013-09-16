$(document).ready(function() {
	$.get("../../inc/new_arrivals_thumbnails.html", function(data) {
		$("#new_arrivals_thumbnails").html(data);
	});
}); 