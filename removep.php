<link rel="stylesheet" type="text/css" media="screen and (min-width:1081px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1080px)" href="mobile.css">
<?php
$num = $_POST["number"];
$fhorse = "lists.json";
$file = "lists.json";
$p = json_decode(file_get_contents($fhorse), true);
$num= (int) $num;
$new = [];
for($x = 0; $x <= count($p)-1; $x++) {
	if($x != $num){
		$new[] = $p[$x];
	}
}
file_put_contents($fhorse, json_encode($new));

?>
<button onclick="location.href = 'index.html'">return to home page </button>