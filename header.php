<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet/less" href="less/style.less">
<script src="js/libs/less-1.3.0.min.js"></script>
<link rel=”image_src” href=”http://mediaget.info/images/mediaget.jpg” />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
#menu {
display : none;
}
</style>
<script>
$(document).ready(function() {
	$("#menu").css('display','inherit');
	});

</script>
<script src="js/libs/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="http://radarurl.com/js/radarurl_widget.js"></script><script type="text/javascript">radarurl_call_radar_widgetv2({edition:"Dynamic",location:"bottomleft"})</script><noscript><a href="http://radarurl.com/">RadarURL</a></noscript>
</head>

<body>
<?php
require 'includes/dbconnect.inc.php';
?>

<div id="container">
<div id="header">
<img src="images/logo.png" width="456" height="99" />
</div>
<?
if(check_user())
{
?>
<div id="menu">
<? require 'menu.php'; ?>
</div>
<?
}
?>