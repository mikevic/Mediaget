<?php

require "connect.php";
require "suggestion.class.php";
require "../header.php";

?>
<div id="container">
<?
// Converting the IP to a number. This is a more effective way
// to store it in the database:

$ip	= sprintf('%u',ip2long($_SERVER['REMOTE_ADDR']));


// The following query uses a left join to select
// all the suggestions and in the same time determine
// whether the user has voted on them.

$result = $mysqli->query("
	SELECT s.*, if (v.ip IS NULL,0,1) AS have_voted
	FROM suggestions AS s
	LEFT JOIN suggestions_votes AS v
	ON(
		s.id = v.suggestion_id
		AND v.day = CURRENT_DATE
		AND v.ip = $ip
	)
	ORDER BY s.rating DESC, s.id DESC
");

$str = '';

if(!$mysqli->error)
{
	// Generating the UL
	
	$str = '<ul class="suggestions">';
	
	// Using MySQLi's fetch_object method to create a new
	// object and populate it with the columns of the result query:
	
	while($suggestion = $result->fetch_object('Suggestion')){
		
		$str.= $suggestion;	// Using the __toString() magic method.
		
	}
	
	$str .='</ul>';
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Requests | MediaGet</title>

<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

<div id="page">

    <div id="heading" class="rounded">

    </div>

	<?php
		echo $str;
	?>
    
    <form id="suggest" action="" method="post">
        <p>
            <input type="text" id="suggestionText" class="rounded" maxlength="255" />
            <input type="submit" value="Submit" id="submitSuggestion" />
        </p>
	</form>

</div>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
