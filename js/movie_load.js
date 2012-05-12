$(document).ready(function(){
    
	$("#movie_keyword").keyup(function() {
	var keyword = $("#movie_keyword").val();
	$.post('../ajax/load_movie_listing.php', {'keyword': keyword}, function(data) {
		$("#movie_content").html(data);
	});
	});
});