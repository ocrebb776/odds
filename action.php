<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" media="screen and (min-width:1081px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1080px)" href="mobile.css">
  <head>
    <title>odds</title>
  </head>
  <body>
<?php

$user = $_POST["name"];
$num = $_POST["num"];
if ($user == "" or $num == ""){echo "must fill out entire form";$suc = False;}else{
$file = "list.json";

$json = json_decode(file_get_contents($file), true);

$json[count($json)] = array("name"=> $user ,"num" => $num);

file_put_contents($file, json_encode($json));
}
if($suc == False){}else{
echo "was scucses";}
?>
<button onclick="location.href = 'index.html'">return to home page </button>
	  results must be re sorted to include new horse
  </body>
</html>