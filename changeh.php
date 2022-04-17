<link rel="stylesheet" type="text/css" media="screen and (min-width:1081px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1080px)" href="mobile.css">
<?php
$user = $_POST["name"];
$num = $_POST["num"];
$fhorse = "list.json";
$file = "list.json";
$horse = json_decode(file_get_contents($fhorse), true);
$name= (int) $user;
echo $user;
$horse[$name]["num"] = $num;

file_put_contents($fhorse, json_encode($horse));

?>
<button onclick="location.href = 'index.html'">return to home page </button>