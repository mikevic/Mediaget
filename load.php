<?php
?>

<form id="search" name="tv_search">
<input class="defaultText" type="text" id="tv_keyword" title="Type in a few letters to start filtering TV Shows" />
</form>
<div id="content"></div>
<style media="screen" type="text/css">
    .defaultText { width: 560px; }
    .defaultTextActive { color: #a1a1a1; font-style: italic; }
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/tvshow_load.js"></script>
<script type="text/javascript" src="js/jquery-ui.js" ></script>
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
<link type="text/css" href="css/dot-luv/jquery-ui.js" rel="stylesheet" />
<div id="tv_content">
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

<iframe src="https://www.google.com/calendar/b/0/embed?title=TV%20Show%20Timings&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23999999&amp;src=s9segmr8ras651cc2jds42qelqi0ulvl%40import.calendar.google.com&amp;color=%232F6309&amp;ctz=Asia%2FCalcutta" style=" border:solid 1px #777 " width="600" height="300" frameborder="0" scrolling="no"></iframe>
</br>
</br>
</div>
<?php
?>