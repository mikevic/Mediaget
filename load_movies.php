<?php
?>

<form id="search" name="movie_search">
<input class="defaultText" type="text" id="movie_keyword" title="Type in a few letters to start filtering Movies" />
</form>
<div id="content"></div>
<style media="screen" type="text/css">
    .defaultText { width: 560px; }
    .defaultTextActive { color: #a1a1a1; font-style: italic; }
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/movie_load.js"></script>
<script type="text/javascript" src="js/jquery-ui.js" ></script>
<link type="text/css" href="css/dot-luv/jquery-ui.js" rel="stylesheet" />
<script language="javascript">
<!--
$(document).ready(function()
{
    $(".defaultText").focus(function(srcc)
    {
        if ($(this).val() == $(this)[0].title)
        {
            $(this).removeClass("defaultTextActive");
            $(this).val("");
        }
    });
    
    $(".defaultText").blur(function()
    {
        if ($(this).val() == "")
        {
            $(this).addClass("defaultTextActive");
            $(this).val($(this)[0].title);
        }
    });
    
    $(".defaultText").blur();        
});
//-->
</script>
<div id="movie_content">
<br />
<br />
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fmediaget.info&amp;send=false&amp;layout=standard&amp;width=560&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font=lucida+grande&amp;height=80&amp;appId=234648873233594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:560px; height:80px;" allowTransparency="true"></iframe>
<br />
<!-- Place this tag where you want the +1 button to render -->
<g:plusone annotation="inline" width="560" href="http://mediaget.info"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<br />
Type 'All' in the search box to see the entire list of movies. <br />
Type 'Genre:XXXXXX' in the search box to see movies grouped by their genre where XXXXXX is the genre you are sorting by. eg. genre:comedy <br />
Type 'Actor:XXXXX' in the search box to see movies grouped by a particular actor where XXXX is the actor you are sorting by. eg.actor:bruce wills  <br /><br />
<b>Latest Movies</b><br />
<?
	$query = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT 9";
	$result_query = mysql_query($query);
	while($movies = mysql_fetch_assoc($result_query))
	{
		echo '<a href="http://mediaget.info/movie.php?id='.$movies['movie_id'].'"><img src="http://mediaget.info/images/featured_image_movie_original/'.$movies['movie_id'].'.jpg" alt="'.$movies['movie_name'].'" width="180px" height="269px"></img></a>';
	}
?>
</div>
<?php
?>