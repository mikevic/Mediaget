<?
require 'login_slider.php';
?>
<head>
<title>MediaGet</title>
<style>
#latest_stuff {
display : none;
}
#body1 {
display : none;
}
.modal {
		width : 650px;
		height : 550px;
		display: none;
		color:black;
		z-index:9999999999;
	  }
.modal h3 {
		color:black;
	}
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26380736-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=124000261016899";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php 

require 'header.php';

?>
<div id="shadow">
<div id="leftnav">
<?
require 'leftnav.php';
?>
</div>
<div id="body2">

<div id="episodes">

<?
require 'left_nav.php';
?>
</div>
<div id="ad_right">

<script type="text/javascript">
//default banner house ad url 
clicksor_default_url = '';
clicksor_banner_border = ''; clicksor_banner_ad_bg = '';
clicksor_banner_link_color = ''; clicksor_banner_text_color = '';
clicksor_banner_text_banner = false; clicksor_banner_image_banner = true;
clicksor_layer_border_color = '';
clicksor_layer_ad_bg = ''; clicksor_layer_ad_link_color = '';
clicksor_layer_ad_text_color = ''; clicksor_text_link_bg = '';
clicksor_text_link_color = ''; clicksor_enable_text_link = false;
</script>
<script type="text/javascript" src="http://ads.clicksor.com/newServing/showAd.php?nid=1&amp;pid=230394&amp;adtype=&amp;sid=367467"></script>
<noscript><a href="http://www.yesadvertising.com">affiliate marketing</a></noscript>


</div>
<div id="movie_data">

</div>
</div>
<div id="body1">
<div id="tvshows">
<ul>
    <li><a href="#tvshows-1">TV Shows</a></li>
    <li><a href="#tvshows-2">Movies</a></li>
</ul>
<div id="tvshows-1">
<?
require 'load.php';
?>
</div>
<div id="tvshows-2">
<?
require 'load_movies.php';
?>
</div>
</div>

</div>
<div id="footer">
<a href="dmca.html">DMCA Takedown</a>
</div>
</div>
<div id="loading">
<img src = "images/loading.gif"></img>

</div>
<br />
<div id="ad">
</script>
<script type="text/javascript" src="js/jquery.jgrowl.js"></script>
</div>

<script>
function closemodal()
	{
		$('#myModal').css('display','none');
	}

function generate_modal_window(id)
	{
		$.post("ajax/get_episode_embed_code.php",{epi_id:id},function(data){
			$('#embedcodemodal').html(data);
		});
		$('#myModal').css('display','inherit');
	}

$(document).ready(function() {
	$("#latest_stuff").css('display','inherit');
	$("#body1").css('display','inherit');
	$('#loading')
    .hide()  // hide it initially
    .ajaxStart(function() {
        $(this).show();
    })
    .ajaxStop(function() {
        $(this).hide();
    })
;
	$('html').bind('keypress', function(e)
{
   if(e.keyCode == 13)
   {
      return false;
   }
});


	
	});
	
	$(function() {

    var $sidebar   = $("#movie_data"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.stop().animate({
                marginTop: $window.scrollTop() - offset.top + topPadding
            });
        } else {
            $sidebar.stop().animate({
                marginTop: 0
            });
        }
    });

});
	
$('#myModal').modal();
$('#myModal').modal('hide');
</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/index_tabs.js"></script>
<link type="text/css" href="css/box.css" rel="stylesheet" />
<link type="text/css" href="css/main.css" rel="stylesheet" />
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
	
	
	<div class="modal" id="myModal">
		<div class="modal-header">
			<h3>Mediaget - Watch Online</h3>
		</div>
		<div class="modal-body">
			<div id="embedcodemodal"></div>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" onclick="closemodal()">Close</a>
		</div>
	</div>
</body>
</html>
<?

?>