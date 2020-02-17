<?php

function readJSON($file, $index = null)
{
	$array = json_decode(file_get_contents($file), true);
	if (isset($index)) return $array[$index];
	return $array;
}

function deleteJSON($file, $index)
{
	$array = json_decode(file_get_contents($file), true);
	array_splice($array, $index, 1);
	writeAllJSON($file, $array);
}

function modifyJSON($file, $index, $data)
{
	$array = json_decode(file_get_contents($file), true);
	$array[$index] = $data;
	writeAllJSON($file, $array);
}

function writeAllJSON($file, $data)
{
	$h = fopen($file, 'w');
	fwrite($h, json_encode($data, JSON_PRETTY_PRINT));
	fclose($h);
}

function writeJSON($file, $data)
{
	$array = json_decode(file_get_contents($file), true);
	$array[] = $data;
	writeAllJSON($file, $array);
}
