<?php
require 'login_slider.php';
if(check_admin())
{

if(isset($_POST['show_name']))
{
	$show_name = $_POST['show_name'];
	$season_num = $_POST['season_num'];
	$episode_num = $_POST['episode_num'];
	if(!empty($show_name) && !empty($season_num) )
	{
		        if(isset($_POST['ddl_link1']) && !empty($_POST['ddl_link1']))
				{	$ddl_link1 = $_POST['ddl_link1'];
					$ddl_link1_2 = $_POST['ddl_link1_2'];
					$ddl_link1_3 = $_POST['ddl_link1_3'];
					$ddl_link1_4 = $_POST['ddl_link1_4'];
					$ddl_link1_5 = $_POST['ddl_link1_5'];
					$ddl_link1_6 = $_POST['ddl_link1_6'];
					$ddl_link1_7 = $_POST['ddl_link1_7'];
					$ddl_link1_8 = $_POST['ddl_link1_8'];
					$embed_code1 = $_POST['embed_code1'];
				$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '1', '$ddl_link1', '$ddl_link1_2', '$ddl_link1_3', '$ddl_link1_4', '$ddl_link1_5', '$ddl_link1_6', '$ddl_link1_7', '$ddl_link1_8','$embed_code1')";
				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 1 added to database.';     

					
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link2']) && !empty($_POST['ddl_link2']))
				{	$ddl_link2 = $_POST['ddl_link2'];
					$ddl_link2_2 = $_POST['ddl_link2_2'];
					$ddl_link2_3 = $_POST['ddl_link2_3'];
					$ddl_link2_4 = $_POST['ddl_link2_4'];
					$ddl_link2_5 = $_POST['ddl_link2_5'];
					$ddl_link2_6 = $_POST['ddl_link2_6'];
					$ddl_link2_7 = $_POST['ddl_link2_7'];
					$ddl_link2_8 = $_POST['ddl_link2_8'];
					$embed_code2 = $_POST['embed_code2'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '2', '$ddl_link2', '$ddl_link2_2', '$ddl_link2_3', '$ddl_link2_4', '$ddl_link2_5', '$ddl_link2_6', '$ddl_link2_7', '$ddl_link2_8','$embed_code2')";				
				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 2 added to database.';    
					
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link3']) && !empty($_POST['ddl_link3']))
				{
					$ddl_link3 = $_POST['ddl_link3'];
					$ddl_link3_2 = $_POST['ddl_link3_2'];
					$ddl_link3_3 = $_POST['ddl_link3_3'];
					$ddl_link3_4 = $_POST['ddl_link3_4'];
					$ddl_link3_5 = $_POST['ddl_link3_5'];
					$ddl_link3_6 = $_POST['ddl_link3_6'];
					$ddl_link3_7 = $_POST['ddl_link3_7'];
					$ddl_link3_8 = $_POST['ddl_link3_8'];
					$embed_code3 = $_POST['embed_code3'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '3', '$ddl_link3', '$ddl_link3_2', '$ddl_link3_3', '$ddl_link3_4', '$ddl_link3_5', '$ddl_link3_6', '$ddl_link3_7', '$ddl_link3_8','$embed_code3')";				
				if($query_run=mysql_query($query1))
				
				{
				  echo 'Episode 3 added to database.';   
					
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link4']) && !empty($_POST['ddl_link4']))
				{	$ddl_link4 = $_POST['ddl_link4'];
					$ddl_link4_2 = $_POST['ddl_link4_2'];
					$ddl_link4_3 = $_POST['ddl_link4_3'];
					$ddl_link4_4 = $_POST['ddl_link4_4'];
					$ddl_link4_5 = $_POST['ddl_link4_5'];
					$ddl_link4_6 = $_POST['ddl_link4_6'];
					$ddl_link4_7 = $_POST['ddl_link4_7'];
					$ddl_link4_8 = $_POST['ddl_link4_8'];
					$embed_code4 = $_POST['embed_code4'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '4', '$ddl_link4', '$ddl_link4_2', '$ddl_link4_3', '$ddl_link4_4', '$ddl_link4_5', '$ddl_link4_6', '$ddl_link4_7', '$ddl_link4_8','$embed_code4')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 4 added to database.';  
					
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link5']) && !empty($_POST['ddl_link5']))
				{	$ddl_link5 = $_POST['ddl_link5'];
					$ddl_link5_2 = $_POST['ddl_link5_2'];
					$ddl_link5_3 = $_POST['ddl_link5_3'];
					$ddl_link5_4 = $_POST['ddl_link5_4'];
					$ddl_link5_5 = $_POST['ddl_link5_5'];
					$ddl_link5_6 = $_POST['ddl_link5_6'];
					$ddl_link5_7 = $_POST['ddl_link5_7'];
					$ddl_link5_8 = $_POST['ddl_link5_8'];
					$embed_code5 = $_POST['embed_code5'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '5', '$ddl_link5', '$ddl_link5_2', '$ddl_link5_3', '$ddl_link5_4', '$ddl_link5_5', '$ddl_link5_6', '$ddl_link5_7', '$ddl_link5_8','$embed_code5')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 5 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link6']) && !empty($_POST['ddl_link6']))
				{	$ddl_link6 = $_POST['ddl_link6'];
					$ddl_link6_2 = $_POST['ddl_link6_2'];
					$ddl_link6_3 = $_POST['ddl_link6_3'];
					$ddl_link6_4 = $_POST['ddl_link6_4'];
					$ddl_link6_5 = $_POST['ddl_link6_5'];
					$ddl_link6_6 = $_POST['ddl_link6_6'];
					$ddl_link6_7 = $_POST['ddl_link6_7'];
					$ddl_link6_8 = $_POST['ddl_link6_8'];
					$embed_code6 = $_POST['embed_code6'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '6', '$ddl_link6', '$ddl_link6_2', '$ddl_link6_3', '$ddl_link6_4', '$ddl_link6_5', '$ddl_link6_6', '$ddl_link6_7', '$ddl_link6_8','$embed_code6')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 6 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link7']) && !empty($_POST['ddl_link7']))
				{	$ddl_link7 = $_POST['ddl_link7'];
					$ddl_link7_2 = $_POST['ddl_link7_2'];
					$ddl_link7_3 = $_POST['ddl_link7_3'];
					$ddl_link7_4 = $_POST['ddl_link7_4'];
					$ddl_link7_5 = $_POST['ddl_link7_5'];
					$ddl_link7_6 = $_POST['ddl_link7_6'];
					$ddl_link7_7 = $_POST['ddl_link7_7'];
					$ddl_link7_8 = $_POST['ddl_link7_8'];
					$embed_code7 = $_POST['embed_code7'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '7', '$ddl_link7', '$ddl_link7_2', '$ddl_link7_3', '$ddl_link7_4', '$ddl_link7_5', '$ddl_link7_6', '$ddl_link7_7', '$ddl_link7_8','$embed_code7')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 7 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link8']) && !empty($_POST['ddl_link8']))
				{	$ddl_link8 = $_POST['ddl_link8'];
					$ddl_link8_2 = $_POST['ddl_link8_2'];
					$ddl_link8_3 = $_POST['ddl_link8_3'];
					$ddl_link8_4 = $_POST['ddl_link8_4'];
					$ddl_link8_5 = $_POST['ddl_link8_5'];
					$ddl_link8_6 = $_POST['ddl_link8_6'];
					$ddl_link8_7 = $_POST['ddl_link8_7'];
					$ddl_link8_8 = $_POST['ddl_link8_8'];
					$embed_code8 = $_POST['embed_code8'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '8', '$ddl_link8', '$ddl_link8_2', '$ddl_link8_3', '$ddl_link8_4', '$ddl_link8_5', '$ddl_link8_6', '$ddl_link8_7', '$ddl_link8_8','$embed_code8')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 8 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link9']) && !empty($_POST['ddl_link9']))
				{	$ddl_link9 = $_POST['ddl_link9'];
					$ddl_link9_2 = $_POST['ddl_link9_2'];
					$ddl_link9_3 = $_POST['ddl_link9_3'];
					$ddl_link9_4 = $_POST['ddl_link9_4'];
					$ddl_link9_5 = $_POST['ddl_link9_5'];
					$ddl_link9_6 = $_POST['ddl_link9_6'];
					$ddl_link9_7 = $_POST['ddl_link9_7'];
					$ddl_link9_8 = $_POST['ddl_link9_8'];
					$embed_code9 = $_POST['embed_code9'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '9', '$ddl_link9', '$ddl_link9_2', '$ddl_link9_3', '$ddl_link9_4', '$ddl_link9_5', '$ddl_link9_6', '$ddl_link9_7', '$ddl_link9_8','$embed_code9')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 9 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link10']) && !empty($_POST['ddl_link10']))
				{	$ddl_link10 = $_POST['ddl_link10'];
					$ddl_link10_2 = $_POST['ddl_link10_2'];
					$ddl_link10_3 = $_POST['ddl_link10_3'];
					$ddl_link10_4 = $_POST['ddl_link10_4'];
					$ddl_link10_5 = $_POST['ddl_link10_5'];
					$ddl_link10_6 = $_POST['ddl_link10_6'];
					$ddl_link10_7 = $_POST['ddl_link10_7'];
					$ddl_link10_8 = $_POST['ddl_link10_8'];
					$embed_code10 = $_POST['embed_code10'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '10', '$ddl_link10', '$ddl_link10_2', '$ddl_link10_3', '$ddl_link10_4', '$ddl_link10_5', '$ddl_link10_6', '$ddl_link10_7', '$ddl_link10_8','$embed_code10')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 10 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link11']) && !empty($_POST['ddl_link11']))
				{	$ddl_link11 = $_POST['ddl_link11'];
					$ddl_link11_2 = $_POST['ddl_link11_2'];
					$ddl_link11_3 = $_POST['ddl_link11_3'];
					$ddl_link11_4 = $_POST['ddl_link11_4'];
					$ddl_link11_5 = $_POST['ddl_link11_5'];
					$ddl_link11_6 = $_POST['ddl_link11_6'];
					$ddl_link11_7 = $_POST['ddl_link11_7'];
					$ddl_link11_8 = $_POST['ddl_link11_8'];
					$embed_code11 = $_POST['embed_code11'];
				$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '11', '$ddl_link11', '$ddl_link11_2', '$ddl_link11_3', '$ddl_link11_4', '$ddl_link11_5', '$ddl_link11_6', '$ddl_link11_7', '$ddl_link11_8','$embed_code11')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 11 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link12']) && !empty($_POST['ddl_link12']))
				{	$ddl_link12 = $_POST['ddl_link12'];
					$ddl_link12_2 = $_POST['ddl_link12_2'];
					$ddl_link12_3 = $_POST['ddl_link12_3'];
					$ddl_link12_4 = $_POST['ddl_link12_4'];
					$ddl_link12_5 = $_POST['ddl_link12_5'];
					$ddl_link12_6 = $_POST['ddl_link12_6'];
					$ddl_link12_7 = $_POST['ddl_link12_7'];
					$ddl_link12_8 = $_POST['ddl_link12_8'];
					$embed_code12 = $_POST['embed_code12'];
				$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '12', '$ddl_link12', '$ddl_link12_2', '$ddl_link12_3', '$ddl_link12_4', '$ddl_link12_5', '$ddl_link12_6', '$ddl_link12_7', '$ddl_link12_8','$embed_code12')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 12 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link13']) && !empty($_POST['ddl_link13']))
				{	$ddl_link13 = $_POST['ddl_link13'];
					$ddl_link13_2 = $_POST['ddl_link13_2'];
					$ddl_link13_3 = $_POST['ddl_link13_3'];
					$ddl_link13_4 = $_POST['ddl_link13_4'];
					$ddl_link13_5 = $_POST['ddl_link13_5'];
					$ddl_link13_6 = $_POST['ddl_link13_6'];
					$ddl_link13_7 = $_POST['ddl_link13_7'];
					$ddl_link13_8 = $_POST['ddl_link13_8'];
					$embed_code13 = $_POST['embed_code13'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '13', '$ddl_link13', '$ddl_link13_2', '$ddl_link13_3', '$ddl_link13_4', '$ddl_link13_5', '$ddl_link13_6', '$ddl_link13_7', '$ddl_link13_8','$embed_code13')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 13 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link14']) && !empty($_POST['ddl_link14']))
				{	$ddl_link14 = $_POST['ddl_link14'];
					$ddl_link14_2 = $_POST['ddl_link14_2'];
					$ddl_link14_3 = $_POST['ddl_link14_3'];
					$ddl_link14_4 = $_POST['ddl_link14_4'];
					$ddl_link14_5 = $_POST['ddl_link14_5'];
					$ddl_link14_6 = $_POST['ddl_link14_6'];
					$ddl_link14_7 = $_POST['ddl_link14_7'];
					$ddl_link14_8 = $_POST['ddl_link14_8'];
					$embed_code14 = $_POST['embed_code14'];
				$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '14', '$ddl_link14', '$ddl_link14_2', '$ddl_link14_3', '$ddl_link14_4', '$ddl_link14_5', '$ddl_link14_6', '$ddl_link14_7', '$ddl_link14_8','$embed_code14')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 14 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link15']) && !empty($_POST['ddl_link15']))
				{	$ddl_link15 = $_POST['ddl_link15'];
					$ddl_link15_2 = $_POST['ddl_link15_2'];
					$ddl_link15_3 = $_POST['ddl_link15_3'];
					$ddl_link15_4 = $_POST['ddl_link15_4'];
					$ddl_link15_5 = $_POST['ddl_link15_5'];
					$ddl_link15_6 = $_POST['ddl_link15_6'];
					$ddl_link15_7 = $_POST['ddl_link15_7'];
					$ddl_link15_8 = $_POST['ddl_link15_8'];
					$embed_code15 = $_POST['embed_code15'];
				$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '15', '$ddl_link15', '$ddl_link15_2', '$ddl_link15_3', '$ddl_link15_4', '$ddl_link15_5', '$ddl_link15_6', '$ddl_link15_7', '$ddl_link15_8','$embed_code15')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 15 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link16']) && !empty($_POST['ddl_link16']))
				{	$ddl_link16 = $_POST['ddl_link16'];
					$ddl_link16_2 = $_POST['ddl_link16_2'];
					$ddl_link16_3 = $_POST['ddl_link16_3'];
					$ddl_link16_4 = $_POST['ddl_link16_4'];
					$ddl_link16_5 = $_POST['ddl_link16_5'];
					$ddl_link16_6 = $_POST['ddl_link16_6'];
					$ddl_link16_7 = $_POST['ddl_link16_7'];
					$ddl_link16_8 = $_POST['ddl_link16_8'];
					$embed_code16 = $_POST['embed_code16'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '16', '$ddl_link16', '$ddl_link16_2', '$ddl_link16_3', '$ddl_link16_4', '$ddl_link16_5', '$ddl_link16_6', '$ddl_link16_7', '$ddl_link16_8','$embed_code16')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 16 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link17']) && !empty($_POST['ddl_link17']))
				{	$ddl_link17 = $_POST['ddl_link17'];
					$ddl_link17_2 = $_POST['ddl_link17_2'];
					$ddl_link17_3 = $_POST['ddl_link17_3'];
					$ddl_link17_4 = $_POST['ddl_link17_4'];
					$ddl_link17_5 = $_POST['ddl_link17_5'];
					$ddl_link17_6 = $_POST['ddl_link17_6'];
					$ddl_link17_7 = $_POST['ddl_link17_7'];
					$ddl_link17_8 = $_POST['ddl_link17_8'];
					$embed_code17 = $_POST['embed_code17'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '17', '$ddl_link17', '$ddl_link17_2', '$ddl_link17_3', '$ddl_link17_4', '$ddl_link17_5', '$ddl_link17_6', '$ddl_link17_7', '$ddl_link17_8','$embed_code17')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 17 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link18']) && !empty($_POST['ddl_link18']))
				{	$ddl_link18 = $_POST['ddl_link18'];
					$ddl_link18_2 = $_POST['ddl_link18_2'];
					$ddl_link18_3 = $_POST['ddl_link18_3'];
					$ddl_link18_4 = $_POST['ddl_link18_4'];
					$ddl_link18_5 = $_POST['ddl_link18_5'];
					$ddl_link18_6 = $_POST['ddl_link18_6'];
					$ddl_link18_7 = $_POST['ddl_link18_7'];
					$ddl_link18_8 = $_POST['ddl_link18_8'];
					$embed_code18 = $_POST['embed_code18'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '18', '$ddl_link18', '$ddl_link18_2', '$ddl_link18_3', '$ddl_link18_4', '$ddl_link18_5', '$ddl_link18_6', '$ddl_link18_7', '$ddl_link18_8','$embed_code18')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 18 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link19']) && !empty($_POST['ddl_link19']))
				{	$ddl_link19 = $_POST['ddl_link19'];
					$ddl_link19_2 = $_POST['ddl_link19_2'];
					$ddl_link19_3 = $_POST['ddl_link19_3'];
					$ddl_link19_4 = $_POST['ddl_link19_4'];
					$ddl_link19_5 = $_POST['ddl_link19_5'];
					$ddl_link19_6 = $_POST['ddl_link19_6'];
					$ddl_link19_7 = $_POST['ddl_link19_7'];
					$ddl_link19_8 = $_POST['ddl_link19_8'];
					$embed_code19 = $_POST['embed_code19'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '19', '$ddl_link19', '$ddl_link19_2', '$ddl_link19_3', '$ddl_link19_4', '$ddl_link19_5', '$ddl_link19_6', '$ddl_link19_7', '$ddl_link19_8','$embed_code19')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 19 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link20']) && !empty($_POST['ddl_link20']))
				{	$ddl_link20 = $_POST['ddl_link20'];
				$ddl_link20_2 = $_POST['ddl_link20_2'];
				$ddl_link20_3 = $_POST['ddl_link20_3'];
				$ddl_link20_4 = $_POST['ddl_link20_4'];
				$ddl_link20_5 = $_POST['ddl_link20_5'];
				$ddl_link20_6 = $_POST['ddl_link20_6'];
				$ddl_link20_7 = $_POST['ddl_link20_7'];
				$ddl_link20_8 = $_POST['ddl_link20_8'];
					$embed_code20 = $_POST['embed_code20'];
				$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '20', '$ddl_link20', '$ddl_link20_2', '$ddl_link20_3', '$ddl_link20_4', '$ddl_link20_5', '$ddl_link20_6', '$ddl_link20_7', '$ddl_link20_8','$embed_code20')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 20 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link21']) && !empty($_POST['ddl_link21']))
				{	$ddl_link21 = $_POST['ddl_link21'];
					$ddl_link21_2 = $_POST['ddl_link21_2'];
					$ddl_link21_3 = $_POST['ddl_link21_3'];
					$ddl_link21_4 = $_POST['ddl_link21_4'];
					$ddl_link21_5 = $_POST['ddl_link21_5'];
					$ddl_link21_6 = $_POST['ddl_link21_6'];
					$ddl_link21_7 = $_POST['ddl_link21_7'];
					$ddl_link21_8 = $_POST['ddl_link21_8'];
					$embed_code21 = $_POST['embed_code21'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '21', '$ddl_link21', '$ddl_link21_2', '$ddl_link21_3', '$ddl_link21_4', '$ddl_link21_5', '$ddl_link21_6', '$ddl_link21_7', '$ddl_link21_8','$embed_code21')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 21 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link22']) && !empty($_POST['ddl_link22']))
				{	$ddl_link22 = $_POST['ddl_link22'];
					$ddl_link22_2 = $_POST['ddl_link22_2'];
					$ddl_link22_3 = $_POST['ddl_link22_3'];
					$ddl_link22_4 = $_POST['ddl_link22_4'];
					$ddl_link22_5 = $_POST['ddl_link22_5'];
					$ddl_link22_6 = $_POST['ddl_link22_6'];
					$ddl_link22_7 = $_POST['ddl_link22_7'];
					$ddl_link22_8 = $_POST['ddl_link22_8'];
					$embed_code22 = $_POST['embed_code22'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '22', '$ddl_link22', '$ddl_link22_2', '$ddl_link22_3', '$ddl_link22_4', '$ddl_link22_5', '$ddl_link22_6', '$ddl_link22_7', '$ddl_link22_8','$embed_code22')";							if($query_run=mysql_query($query1))	
				  echo 'Episode 22 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link23']) && !empty($_POST['ddl_link23']))
				{	$ddl_link23 = $_POST['ddl_link23'];
					$ddl_link23_2 = $_POST['ddl_link23_2'];
					$ddl_link23_3 = $_POST['ddl_link23_3'];
					$ddl_link23_4 = $_POST['ddl_link23_4'];
					$ddl_link23_5 = $_POST['ddl_link23_5'];
					$ddl_link23_6 = $_POST['ddl_link23_6'];
					$ddl_link23_7 = $_POST['ddl_link23_7'];
					$ddl_link23_8 = $_POST['ddl_link23_8'];
					$embed_code23 = $_POST['embed_code23'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '23', '$ddl_link23', '$ddl_link23_2', '$ddl_link23_3', '$ddl_link23_4', '$ddl_link23_5', '$ddl_link23_6', '$ddl_link23_7', '$ddl_link23_8','$embed_code23')";				if($query_run=mysql_query($query1))	
				{
				  echo 'Episode 23 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link24']) && !empty($_POST['ddl_link24']))
				{	$ddl_link24 = $_POST['ddl_link24'];
					$ddl_link24_2 = $_POST['ddl_link24_2'];
					$ddl_link24_3 = $_POST['ddl_link24_3'];
					$ddl_link24_4 = $_POST['ddl_link24_4'];
					$ddl_link24_5 = $_POST['ddl_link24_5'];
					$ddl_link24_6 = $_POST['ddl_link24_6'];
					$ddl_link24_7 = $_POST['ddl_link24_7'];
					$ddl_link24_8 = $_POST['ddl_link24_8'];
					$embed_code24 = $_POST['embed_code24'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '24', '$ddl_link24', '$ddl_link24_2', '$ddl_link24_3', '$ddl_link24_4', '$ddl_link24_5', '$ddl_link24_6', '$ddl_link24_7', '$ddl_link24_8','$embed_code24')";				if($query_run=mysql_query($query1))
				{
				  echo 'Episode 24 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
				if(isset($_POST['ddl_link25']) && !empty($_POST['ddl_link25']))
				{	$ddl_link25 = $_POST['ddl_link25'];
					$ddl_link25_2 = $_POST['ddl_link25_2'];
					$ddl_link25_3 = $_POST['ddl_link25_3'];
					$ddl_link25_4 = $_POST['ddl_link25_4'];
					$ddl_link25_5 = $_POST['ddl_link25_5'];
					$ddl_link25_6 = $_POST['ddl_link25_6'];
					$ddl_link25_7 = $_POST['ddl_link25_7'];
					$ddl_link25_8 = $_POST['ddl_link25_8'];
					$embed_code25 = $_POST['embed_code25'];
					$query1 = "INSERT INTO episodes (show_id, season_num, episode_num, link1, link2, link3, link4, link5, link6, link7, link8, embed_code) VALUES ('$show_name', '$season_num', '25', '$ddl_link25', '$ddl_link25_2', '$ddl_link25_3', '$ddl_link25_4', '$ddl_link25_5', '$ddl_link25_6', '$ddl_link25_7', '$ddl_link25_8','$embed_code25')";	if($query_run=mysql_query($query1))	
				{
				  echo 'Episode 25 added to database.';     
				}
				else
				{
					echo mysql_error();
				}
				}
	}


?>
<form action="add.php" method="POST">
<?
$query = "SELECT * FROM tv_shows_list ORDER BY tv_show_name ASC";
$result_query = mysql_query($query);
?>
<br />
<br />
<br />
<br />
<br />
<br />
Show Name : <select name="show_name" >
<?
while($show_details = mysql_fetch_assoc($result_query))
                    {
                        
                            echo '<option value="'.$show_details['tv_show_id'].'">'.$show_details['tv_show_name'].'</option>';
                    }
?>
</select></br>

Season Number : <input type="text" name="season_num" /><br />
Episode 1 : DDL Link : <input type="text" name="ddl_link1" /><input type="text" name="ddl_link1_2" /><input type="text" name="ddl_link1_3" /><input type="text" name="ddl_link1_4" /><input type="text" name="ddl_link1_5" /><input type="text" name="ddl_link1_6" /><input type="text" name="ddl_link1_7" /><input type="text" name="ddl_link1_8" /><br /> Embed Code : <input type="text" name="embed_code1" /><br />
Episode 2 : DDL Link : <input type="text" name="ddl_link2" /><input type="text" name="ddl_link2_2" /><input type="text" name="ddl_link2_3" /><input type="text" name="ddl_link2_4" /><input type="text" name="ddl_link2_5" /><input type="text" name="ddl_link2_6" /><input type="text" name="ddl_link2_7" /><input type="text" name="ddl_link2_8" /><br /> Embed Code : <input type="text" name="embed_code2" /><br />
Episode 3 : DDL Link : <input type="text" name="ddl_link3" /><input type="text" name="ddl_link3_2" /><input type="text" name="ddl_link3_3" /><input type="text" name="ddl_link3_4" /><input type="text" name="ddl_link3_5" /><input type="text" name="ddl_link3_6" /><input type="text" name="ddl_link3_7" /><input type="text" name="ddl_link3_8" /><br /> Embed Code : <input type="text" name="embed_code3" /><br />
Episode 4 : DDL Link : <input type="text" name="ddl_link4" /><input type="text" name="ddl_link4_2" /><input type="text" name="ddl_link4_3" /><input type="text" name="ddl_link4_4" /><input type="text" name="ddl_link4_5" /><input type="text" name="ddl_link4_6" /><input type="text" name="ddl_link4_7" /><input type="text" name="ddl_link4_8" /><br /> Embed Code : <input type="text" name="embed_code4" /><br />
Episode 5 : DDL Link : <input type="text" name="ddl_link5" /><input type="text" name="ddl_link5_2" /><input type="text" name="ddl_link5_3" /><input type="text" name="ddl_link5_4" /><input type="text" name="ddl_link5_5" /><input type="text" name="ddl_link5_6" /><input type="text" name="ddl_link5_7" /><input type="text" name="ddl_link5_8" /><br /> Embed Code : <input type="text" name="embed_code5" /><br />
Episode 6 : DDL Link : <input type="text" name="ddl_link6" /><input type="text" name="ddl_link6_2" /><input type="text" name="ddl_link6_3" /><input type="text" name="ddl_link6_4" /><input type="text" name="ddl_link6_5" /><input type="text" name="ddl_link6_6" /><input type="text" name="ddl_link6_7" /><input type="text" name="ddl_link6_8" /><br /> Embed Code : <input type="text" name="embed_code6" /><br />
Episode 7 : DDL Link : <input type="text" name="ddl_link7" /><input type="text" name="ddl_link7_2" /><input type="text" name="ddl_link7_3" /><input type="text" name="ddl_link7_4" /><input type="text" name="ddl_link7_5" /><input type="text" name="ddl_link7_6" /><input type="text" name="ddl_link7_7" /><input type="text" name="ddl_link7_8" /><br /> Embed Code : <input type="text" name="embed_code7" /><br />
Episode 8 : DDL Link : <input type="text" name="ddl_link8" /><input type="text" name="ddl_link8_2" /><input type="text" name="ddl_link8_3" /><input type="text" name="ddl_link8_4" /><input type="text" name="ddl_link8_5" /><input type="text" name="ddl_link8_6" /><input type="text" name="ddl_link8_7" /><input type="text" name="ddl_link8_8" /><br /> Embed Code : <input type="text" name="embed_code8" /><br />
Episode 9 : DDL Link : <input type="text" name="ddl_link9" /><input type="text" name="ddl_link9_2" /><input type="text" name="ddl_link9_3" /><input type="text" name="ddl_link9_4" /><input type="text" name="ddl_link9_5" /><input type="text" name="ddl_link9_6" /><input type="text" name="ddl_link9_7" /><input type="text" name="ddl_link9_8" /><br /> Embed Code : <input type="text" name="embed_code9" /><br />
Episode 10 : DDL Link : <input type="text" name="ddl_link10" /><input type="text" name="ddl_link10_2" /><input type="text" name="ddl_link10_3" /><input type="text" name="ddl_link10_4" /><input type="text" name="ddl_link10_5" /><input type="text" name="ddl_link10_6" /><input type="text" name="ddl_link10_7" /><input type="text" name="ddl_link10_8" /><br /> Embed Code : <input type="text" name="embed_code10" /><br />
Episode 11 : DDL Link : <input type="text" name="ddl_link11" /><input type="text" name="ddl_link11_2" /><input type="text" name="ddl_link11_3" /><input type="text" name="ddl_link11_4" /><input type="text" name="ddl_link11_5" /><input type="text" name="ddl_link11_6" /><input type="text" name="ddl_link11_7" /><input type="text" name="ddl_link11_8" /><br /> Embed Code : <input type="text" name="embed_code11" /><br />
Episode 12 : DDL Link : <input type="text" name="ddl_link12" /><input type="text" name="ddl_link12_2" /><input type="text" name="ddl_link12_3" /><input type="text" name="ddl_link12_4" /><input type="text" name="ddl_link12_5" /><input type="text" name="ddl_link12_6" /><input type="text" name="ddl_link12_7" /><input type="text" name="ddl_link12_8" /><br /> Embed Code : <input type="text" name="embed_code12" /><br />
Episode 13 : DDL Link : <input type="text" name="ddl_link13" /><input type="text" name="ddl_link13_2" /><input type="text" name="ddl_link13_3" /><input type="text" name="ddl_link13_4" /><input type="text" name="ddl_link13_5" /><input type="text" name="ddl_link13_6" /><input type="text" name="ddl_link13_7" /><input type="text" name="ddl_link13_8" /><br /> Embed Code : <input type="text" name="embed_code13" /><br />
Episode 14 : DDL Link : <input type="text" name="ddl_link14" /><input type="text" name="ddl_link14_2" /><input type="text" name="ddl_link14_3" /><input type="text" name="ddl_link14_4" /><input type="text" name="ddl_link14_5" /><input type="text" name="ddl_link14_6" /><input type="text" name="ddl_link14_7" /><input type="text" name="ddl_link14_8" /><br /> Embed Code : <input type="text" name="embed_code14" /><br />
Episode 15 : DDL Link : <input type="text" name="ddl_link15" /><input type="text" name="ddl_link15_2" /><input type="text" name="ddl_link15_3" /><input type="text" name="ddl_link15_4" /><input type="text" name="ddl_link15_5" /><input type="text" name="ddl_link15_6" /><input type="text" name="ddl_link15_7" /><input type="text" name="ddl_link15_8" /><br /> Embed Code : <input type="text" name="embed_code15" /><br />
Episode 16 : DDL Link : <input type="text" name="ddl_link16" /><input type="text" name="ddl_link16_2" /><input type="text" name="ddl_link16_3" /><input type="text" name="ddl_link16_4" /><input type="text" name="ddl_link16_5" /><input type="text" name="ddl_link16_6" /><input type="text" name="ddl_link16_7" /><input type="text" name="ddl_link16_8" /><br /> Embed Code : <input type="text" name="embed_code16" /><br />
Episode 17 : DDL Link : <input type="text" name="ddl_link17" /><input type="text" name="ddl_link17_2" /><input type="text" name="ddl_link17_3" /><input type="text" name="ddl_link17_4" /><input type="text" name="ddl_link17_5" /><input type="text" name="ddl_link17_6" /><input type="text" name="ddl_link17_7" /><input type="text" name="ddl_link17_8" /><br /> Embed Code : <input type="text" name="embed_code17" /><br />
Episode 18 : DDL Link : <input type="text" name="ddl_link18" /><input type="text" name="ddl_link18_2" /><input type="text" name="ddl_link18_3" /><input type="text" name="ddl_link18_4" /><input type="text" name="ddl_link18_5" /><input type="text" name="ddl_link18_6" /><input type="text" name="ddl_link18_7" /><input type="text" name="ddl_link18_8" /><br /> Embed Code : <input type="text" name="embed_code18" /><br />
Episode 19 : DDL Link : <input type="text" name="ddl_link19" /><input type="text" name="ddl_link19_2" /><input type="text" name="ddl_link19_3" /><input type="text" name="ddl_link19_4" /><input type="text" name="ddl_link19_5" /><input type="text" name="ddl_link19_6" /><input type="text" name="ddl_link19_7" /><input type="text" name="ddl_link19_8" /><br /> Embed Code : <input type="text" name="embed_code19" /><br />
Episode 20 : DDL Link : <input type="text" name="ddl_link20" /><input type="text" name="ddl_link20_2" /><input type="text" name="ddl_link20_3" /><input type="text" name="ddl_link20_4" /><input type="text" name="ddl_link20_5" /><input type="text" name="ddl_link20_6" /><input type="text" name="ddl_link20_7" /><input type="text" name="ddl_link20_8" /><br /> Embed Code : <input type="text" name="embed_code20" /><br />
Episode 21 : DDL Link : <input type="text" name="ddl_link21" /><input type="text" name="ddl_link21_2" /><input type="text" name="ddl_link21_3" /><input type="text" name="ddl_link21_4" /><input type="text" name="ddl_link21_5" /><input type="text" name="ddl_link21_6" /><input type="text" name="ddl_link21_7" /><input type="text" name="ddl_link21_8" /><br /> Embed Code : <input type="text" name="embed_code21" /><br />
Episode 22 : DDL Link : <input type="text" name="ddl_link22" /><input type="text" name="ddl_link22_2" /><input type="text" name="ddl_link22_3" /><input type="text" name="ddl_link22_4" /><input type="text" name="ddl_link22_5" /><input type="text" name="ddl_link22_6" /><input type="text" name="ddl_link22_7" /><input type="text" name="ddl_link22_8" /><br /> Embed Code : <input type="text" name="embed_code22" /><br />
Episode 23 : DDL Link : <input type="text" name="ddl_link23" /><input type="text" name="ddl_link23_2" /><input type="text" name="ddl_link23_3" /><input type="text" name="ddl_link23_4" /><input type="text" name="ddl_link23_5" /><input type="text" name="ddl_link23_6" /><input type="text" name="ddl_link23_7" /><input type="text" name="ddl_link23_8" /><br /> Embed Code : <input type="text" name="embed_code23" /><br />
Episode 24 : DDL Link : <input type="text" name="ddl_link24" /><input type="text" name="ddl_link24_2" /><input type="text" name="ddl_link24_3" /><input type="text" name="ddl_link24_4" /><input type="text" name="ddl_link24_5" /><input type="text" name="ddl_link24_6" /><input type="text" name="ddl_link24_7" /><input type="text" name="ddl_link24_8" /><br /> Embed Code : <input type="text" name="embed_code24" /><br />
Episode 25 : DDL Link : <input type="text" name="ddl_link25" /><input type="text" name="ddl_link25_2" /><input type="text" name="ddl_link25_3" /><input type="text" name="ddl_link25_4" /><input type="text" name="ddl_link25_5" /><input type="text" name="ddl_link25_6" /><input type="text" name="ddl_link25_7" /><input type="text" name="ddl_link25_8" /><br /> Embed Code : <input type="text" name="embed_code25" /><br />

<input type="submit" value="Add to database!">
</form>
<?
}
?>