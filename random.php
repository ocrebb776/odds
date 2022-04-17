<link rel="stylesheet" type="text/css" media="screen and (min-width:1081px)" href="style.css">
<link rel="stylesheet" type="text/css" media="screen and (max-width:1080px)" href="mobile.css">
<style>
	html{
		text-align:center;
	}
</style>
<?php
echo "wa";
$file = "list.json";
$p = json_decode(file_get_contents("lists.json"), true);
$horse = json_decode(file_get_contents($file), true);
$max = intdiv(count($horse),count($p));
shuffle($horse);
$on = 0;
$ext = array_chunk($horse,$max);
for($x = 0; $x <= count($p)-1; $x++) {
	$p[$x]["horse"] = $ext[$x];
}
echo $x;
// 6
// 4
if ($x < count($ext)){
	echo count($ext);
	for($y = 0; $y <=count($ext)-$x-1; $y++){
		$p[$y]["horse"] = array_merge($p[$y]["horse"], $ext[$y+$x]);
	} 
}
file_put_contents("output.json", json_encode($p));
file_put_contents("l.json", json_encode($ext));
$txt = "";
for($y = 0; $y <=count($p)-1; $y++){
	$user = $p[$y]["user"];
	$txt = "$txt <div class='name'>$user</div><span style='font-size:19px'>";
	for($r = 0; $r <=count($p[$r]["horse"])-1; $r++){
		$horsed=$p[$y]["horse"][$r]["name"];
		$odds = $p[$y]["horse"][$r]["num"];
		$txt ="$txt $horsed <br> odds: $odds /1<br><br>";
	}
}
echo $txt;
/*
		let txt2 = ""
					fetch('output.json').then(results => results.json()).then(data => {
		dataa = Object.assign({}, data);
						for (x in dataa){
					txt2 += "<div class='name'>"+dataa[x].user+"</div><span style='font-size:19px'>"
							for (yer in dataa[x].horse){
								txt2+= dataa[x].horse[yer].name+" ods:"+dataa[x].horse[yer].num+"/1<br><br>"
							}
						}document.getElementById("deemo").innerHTML = txt2
					console.log(dataa)});
*/
?>