<?
require 'includes/dbconnect.inc.php';
    if(isset($_GET['i']))
	{
$i = $_GET['i'];
$query = "SELECT * FROM tv_shows_list WHERE tv_show_id='$i'";
$result_query = mysql_query($query);
while($show = mysql_fetch_assoc($result_query))
{
	$tv_show_name_formatted = str_replace(' ', '+', $show[tv_show_name]);
	$id = $show[tv_show_id]; 
	$URL = 'http://www.imdbapi.com/?i=&t='.$tv_show_name_formatted;
	$json   = file_get_contents($URL);
	$result = json_decode($json, TRUE);
	$year = addslashes($result['Year']);
	$rated = addslashes($result['Rated']);
	$released = addslashes($result['Released']);
	$genre = addslashes($result['Genre']);
	$director = addslashes($result['Direector']);
	$actors = addslashes($result['Actors']);
	$plot = addslashes($result['Plot']);
	$rating = addslashes($result['Rating']);
	$query1 = "UPDATE tv_shows_list SET year='$year', rated='$rated', released='$released', genre='$genre', director='$director', actors='$actors', plot='$plot', rating='$rating' WHERE tv_show_id='$id'";
	if($query_run1=mysql_query($query1))
					{
					  echo 'IMDB Data Added for '.$show[tv_show_name].'<br />';     
						
					}
					else
					{
						echo mysql_error();
					}
	$url = $result['Poster'];
	$image = 'images/featured_image_tv_show_original/'.$id.'.jpg';
	file_put_contents($image, file_get_contents($url));
	$size = getimagesize('images/featured_image_tv_show_original/'.$id.'.jpg');
	$width = $size[0];
    $height = $size[1];
	$ratio = $height/$width;
	$new_width = 389;
	$new_height = $new_width*$ratio;
	$img = imagecreatefromjpeg('images/featured_image_tv_show_original/'.$id.'.jpg');
    $img389 = imagecreatetruecolor($new_width, $new_height);
    imagecopyresized($img389, $img,  0, 0, 0, 0, $new_width, $new_height, $width, $height );
    imagejpeg($img389, 'images/featured_image/'.$id.'.jpg');				
}
}
?>