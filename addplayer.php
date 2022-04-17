<html>
  <head>
	  <link rel="stylesheet" type="text/css" media="screen and (min-width:1081px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1080px)" href="mobile.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="style.css">
    <title>odds</title>
  </head>
  <body>
<?php

$user = $_POST["name"];
if ($user == ""){$suc = False;echo "must fill al fiedls";}else{
$file = "lists.json";

$json = json_decode(file_get_contents($file), true);

$json[count($json)] = array("user" => $user,);

file_put_contents($file, json_encode($json));
}
if($suc == False){}else{
echo "was scucses";}
?>
<button onclick="location.href = 'index.html'">return to home page </button>results must be re sorted to include new player
  </body>
</html>