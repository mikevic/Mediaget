<?

require 'login_slider.php';
require 'header.php';
?>
<title>Contact Us</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/tv-show.css" rel="stylesheet" />
<style>
#body_data {
display : none;
}
</style>
<script>
$(document).ready(function() {
	$("#body_data").css('display','inherit');
    })
</script>
<div id="container">
<div id="leftnav">
<?
require 'leftnav.php';
?>
</div>
<div id="body_data">
				<!-- Do not change code! -->
<table cellspacing="0" cellpadding="0" border="0"><tr><td><iframe width="400" height="440" frameborder="0" src="http://www.foxyform.com/form.php?id=200807&sec_hash=daa799c7464"></iframe></td></tr><tr><td align="center"></td></tr></table>
<!-- Do not change code! -->
</div>
<div id="body_picture">
<img src="http://mediaget.info/images/contact.jpg" width="518px">
</div>
<div id="footer">
<a href="dmca.html">DMCA Takedown</a>
</div>
<?	
echo '</div>';

		echo '<script>
			
		$(function() {
				$( "#about" ).accordion({
					autoHeight: false
				});
				});
		</script>';

?>