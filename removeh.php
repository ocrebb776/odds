<link rel="stylesheet" type="text/css" media="screen and (min-width:1081px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1080px)" href="mobile.css">
<?php
$num = $_POST["number"];
$fhorse = "list.json";
$file = "list.json";
$horse = json_decode(file_get_contents($fhorse), true);
$num= (int) $num;
$new = [];
for($x = 0; $x <= count($horse)-1; $x++) {
	if($x != $num){
		$new[] = $horse[$x];
	}
}
file_put_contents($fhorse, json_encode($new));
?>

<button onclick="location.href = 'index.html'">return to home page </button>