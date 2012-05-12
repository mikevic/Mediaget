<?

require 'login_slider.php';
require 'header.php';
?>
<title>Subscribe | MediaGet</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/ga.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.tzCheckbox/jquery.tzCheckbox.css" />
<link type="text/css" href="css/dot-luv/jquery-ui.css" rel="stylesheet" />
<link type="text/css" href="css/subscription.css" rel="stylesheet" />
<style>
	#add_subscription_result
        {
            width: 300px;
            display:inline-block;
            background-color: #90EE90;
			color : black;
        }
	#user_id {
			display : none;
		}
	#subscribe {
			display : none;
		}
	#current_subscriptions {
			display : none;
		}
	td {
			padding:15px;
			text-align:left;
		}
	th {
			padding:15px;
			text-align:left;
		}
		
</style>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>

$(document).ready(function(){
	
	$("#subscribe").css('display','inherit');
	$("#current_subscriptions").css('display','inherit');
	$('input[type=checkbox]').tzCheckbox({labels:['Enable','Disable']});
	$("img.cross").click(function() {
	var id = $(this).attr("id");
	$("#"+id).remove();
	$.post('ajax/delete_subscription.php', {'id':id});
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
<div id="current_subscriptions">
<h3><a href="#">Your current subscriptions</a></h3>
<div>
<div id="sub_table">
<? 

$user_id = $_SESSION['id'];
$query4 = "SELECT * FROM subscriptions WHERE user_id='$user_id'";
$result_query4 = mysql_query($query4);
if(mysql_num_rows($result_query4) == 0)
		{
			echo 'You are not subscribed to any TV shows yet.';
		}
else
{
?>

<table>
<tr>
<th>Show Name</th>
<th>Frequency</th>
<th>Mail</th>
<th>Mobile</th>
<th>Cancel Subscription</th>
</tr>
<?
while ($sub_details = mysql_fetch_assoc($result_query4))
{
	$sub_id = $sub_details['subscription_id'];
	$show_id = $sub_details['tv_show_id'];
	$frequency = $sub_details['frequency'];
	$mail = $sub_details['mail'];
	$mobile = $sub_details['mobile'];
	$query6 = "SELECT tv_show_name FROM tv_shows_list WHERE tv_show_id='$show_id'";
	$result_query6 = mysql_query($query6);
	while($show_details = mysql_fetch_assoc($result_query6))
	{
		$show_name = $show_details['tv_show_name'];
	}
	?>
	<tr id="<? echo $sub_id; ?>">
		<td><? echo $show_name; ?></td>
		<td><? if($frequency == 1)
				{
					echo 'Instantly';
				}
				else if($frequency == 2)
				{
					echo 'Daily';
				}
				else if($frequency == 3)
				{
					echo 'Weekly';
				}
				else if($frequency == 4)
				{
					echo 'Monthly';
				}
			?>
		</td>
		<td><? if($mail == 1)
				{
					echo 'Yes';
				}
				else if($mail == 0)
				{
					echo 'No';
				} ?>
		</td>
		<td><? if($mobile == 1)
				{
					echo 'Yes';
				}
				else if($mobile == 0)
				{
					echo 'No';
				} ?>
		</td>
		<td><img src="images/cross.png" class="cross" id="<? echo $sub_id; ?>"></img></td>
		</tr>
<?
}
?>
</table>
<? } ?>
</div>
<?

?>
</div>
</div>
<div id="subscribe">
<h3><a href="#">Subscribe to a new show</a></h3>
<div>
<div id="add_subscription_result"></div>
<form id="add_subscription"  method="POST">
<?
$query = "SELECT * FROM tv_shows_list ORDER BY tv_show_name ASC";
$result_query = mysql_query($query);
?>
<ul>
<li><label>Show Name : </label><select name="show_name" id="show_name">
<?
while($show_details = mysql_fetch_assoc($result_query))
                    {
                        
                            echo '<option value="'.$show_details['tv_show_id'].'">'.$show_details['tv_show_name'].'</option>';
                    }
?>
</select></li>
<li><label>Frequency of updates : </label><select name="frequency" id="frequency">
						<option value="2">Daily</option>
						<option value="3">Weekly</option>
						<option value="4">Montly</option>
					</select></li>
<li><label>Subscribe by mail : </label><input type="checkbox" id="mail" name="mail" value="yes_mail" data-on="YES" data-off="NO"/></li>
<?
if(check_mobile_num())
{	
	echo '<li><label>Subscribe by mobile : </label><input type="checkbox" id="mobile" name="mobile" value="yes_mobile" data-on="YES" data-off="NO"/></li>';
}
else
{
	echo '<li><label>There is no number associated with this account, please update your account settings. You may add it <a href="account_settings.php">here</a></label></li>';
}

?>
<li><label><input type="submit" value="Subscribe!"></label></li>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery.tzCheckbox.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script>
		$("#add_subscription").validate({
				rules: {
                    
                    show_name: {
                        required: true,
                    },
                 
                },
                 submitHandler: function() {
                 $.post('http://mediaget.info/includes/add_subscription_server.php', $("#add_subscription").serialize(), function(data) {
					$("#add_subscription_result").html(data);
                 });
   	             }
           });	
		$(function() {
				$( "#subscribe" ).accordion({
					autoHeight: false
				});
				});
		$(function() {
				$( "#current_subscriptions" ).accordion({
					autoHeight: false
				});
				});
		</script>
<?
}

else
{
	echo "You need to be logged in to veiw content here";
}
?>
