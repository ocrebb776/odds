<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<style>
	table{
	border:3px solid black ;
	width:89vw;
	text-align:center;
	margin:0px;
}
		td{
			border:3px solid black ;
	}button{
	min-width:40vw;
	font-size:50px
}
</style>
    <title>odds</title>
<?php
echo "there must be more than 5 players is that true ? ";
$final = "output";
$fpeople = "lists.json";
$fhorse = "list.json";
$people = json_decode(file_get_contents($fpeople), true);
$horse = json_decode(file_get_contents($fhorse), true);
$cat1 = [];
$cat2 = [];
$cat3 = [];
$cat4 = [];
$cat5 = [];
$cat6 = [];
$cat7 = [];
$cat8 = [];
$cat9 = [];
$cat10 = [];
for($x = 0; $x <= count($horse)-1; $x++) {
  if(floatval($horse[$x]['num']) <= 10){
	  $cat1[count($cat1)] = $horse[$x];

  }else if(floatval($horse[$x]['num']) <= 20){
	  $cat2[count($cat2)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 30){
	  $cat3[count($cat3)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 40){
	  $cat4[count($cat4)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 50){
	  $cat5[count($cat5)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 60){
	  $cat6[count($cat6)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 70){
	  $cat7[count($cat7)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 80){
	  $cat8[count($cat8)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) <= 90){
	  $cat9[count($cat9)] = $horse[$x];

  }
  else if(floatval($horse[$x]['num']) > 90){
	  	  $cat10[count($cat10)] = $horse[$x];

  }
}
echo'<table>';
function catdis($cats,$x){
echo "<tr><th>Cat $x = </th>";
for ($x = 0; $x <= count($cats)-1;$x++){
	$es = $cats[$x]["name"];
	echo "<td>$es</td>";
}}
catdis($cat1,"1");
catdis($cat2,"2");
catdis($cat3,"3");
catdis($cat4,"4");
catdis($cat5,"5");
catdis($cat6,"6");
catdis($cat7,"7");
catdis($cat8,"8");
catdis($cat9,"9");
catdis($cat10,"10");

$personon = 0;
$for = True;
$start = False;
function share($ca){
for ($x = 0; $x <= count($ca)-1;$x++){
	global $people;
	global $for;
	global $start;
	global $personon;
	$people[floatval($personon)]["horse"][] = $ca[$x];
	if($personon == count($people)-1){
		$for = False;

	}else if($personon == 0 or $start == True){
		$for = True;
}
	
	
		if ($for == True){
	$personon += 1;
			$start = true;
}else{
			$personon -= 1;}
}
}
share($cat1);
share($cat2);
share($cat3);
share($cat4);
share($cat5);
share($cat6);
share($cat7);
share($cat8);
share($cat9);
share($cat10);
file_put_contents("output.json", json_encode($people));
?><button onclick="location.href = 'index.html'">return to home page </button>