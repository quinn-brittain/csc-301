<?php

$data = [
	[
		"name" => "Sid Meier’s Civilization® VI",
		"summary" => "Civilization VI offers new ways to interact with your world, expand your empire across the map, advance your culture, and compete against history’s greatest leaders to build a civilization that will stand the test of time. Play as one of 20 historical leaders including Roosevelt (America) and Victoria (England). ",
		"picture" => "img/civilization-6.jpg",
		"release-date" => "Oct 21, 2016",
		"price" => 59.99,
		"sale" => 75,
		"platform" => [
			"fa-windows",
			"fa-apple",
			"fa-linux"
		],
		"rating" => 92,
		"developer" => "Firaxis Games, Aspyr",
		"publisher" => "2K, Aspyr",
		"tags" => [
			"Strategy",
			"Turn-Based Strategy",
			"Historical",
			"4X"
		]
	],
	[
		"name" => "Sid Meier’s Civilization® VI",
		"summary" => "Civilization VI offers new ways to interact with your world, expand your empire across the map, advance your culture, and compete against history’s greatest leaders to build a civilization that will stand the test of time. Play as one of 20 historical leaders including Roosevelt (America) and Victoria (England). ",
		"picture" => "img/civilization-6.jpg",
		"release-date" => "Oct 21, 2016",
		"price" => 59.99,
		"sale" => 75,
		"platform" => [
			"fa-windows",
			"fa-apple",
			"fa-linux"
		],
		"rating" => 92,
		"developer" => "Firaxis Games, Aspyr",
		"publisher" => "2K, Aspyr",
		"tags" => [
			"Strategy",
			"Turn-Based Strategy",
			"Historical",
			"4X"
		]
	]
];

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
