<?

require 'login_slider.php';
require 'header.php';
if(isset($_POST['mobile_num']))
{
	$user_id = $_SESSION['id'];
	$mobile_num = mysql_real_escape_string($_POST['mobile_num']);
	if(!empty($mobile_num))
	{
		$query2 = "UPDATE members SET mobile_no='$mobile_num' WHERE id='$user_id'";
		mysql_query($query2);
		
	}
}
?>
<title>Account Settings | Mediaget</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.tzCheckbox/jquery.tzCheckbox.css" />
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/account_settings.css" rel="stylesheet" />
<style>
	#profile_settings {
			display : none;
		}
</style>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
$(document).ready(function(){
	$("#profile_settings").css('display','inherit');
	});

	$(function() {
				$( "#profile_settings" ).accordion({
					autoHeight: false
				});
				});
</script>
<div id="leftnav">
<?
require 'leftnav.php';
if(check_user())
{
?>
</div>
<div id="profile_settings">
<h3><a href="#">Account Details</a></h3>
<div>
<?
if(check_mobile_num())
{
	$id = $_SESSION['id'];
	$query = "SELECT mobile_no FROM members WHERE id='$id'";
	$query_result = mysql_query($query);
	while($user_data = mysql_fetch_assoc($query_result))
	{
		$mobile_num = $user_data['mobile_no'];
	}
	echo 'You are registered with the mobile number : '.$mobile_num;
}
else
{
	echo 'You do not have a mobile number registered with this account. Please note that the subscribe via SMS feature is only available to Indian users at the moment. </br>';
	?>
	<form id="mobile_number" action="account_settings.php" method="POST">
	<label>Enter your 10 Digit Number : </label><input type="text" id="mobile_num" name="mobile_num" />
	<input type="submit" value="Associate Number">
	</form>
	<?
}
?>
</div>
</div>
<?

}
else
{
	echo 'You need to be a member to view content here';
}
?>
</div>