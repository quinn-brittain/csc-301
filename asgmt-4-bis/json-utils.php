<?php

writeJSON('newjson.json',
	[['firstname'=>'Paul','lastname'=>'McCartney']]);

function writeAllJSON($file,$data){
	$h=fopen($file,'w');
	fwrite($h,json_encode($data));
	fclose($h);
}

function writeJSON($file,$data){
	$array=json_decode(file_get_contents($file),true);
	$array[]=$data;
	writeAllJSON($file,$array);	
}