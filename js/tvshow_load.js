$(document).ready(function(){
    
	$("#tv_keyword").keyup(function() {
	var keyword = $("#tv_keyword").val();
	$.post('../ajax/load_tv_shows.php', {'keyword': keyword}, function(data) {
		$("#tv_content").html(data);
	});
	});
});