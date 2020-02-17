<?php

function readCSV($file, $index = null, $delimiter = ';')
{
	$handle = fopen($file, 'r');
	$output = [];
	$count = 0;
	while (!feof($handle)) {
		$line = trim(fgets($handle), PHP_EOL);
		if (!isset($line[0])) continue;
		if (isset($index) && $index == $count) {
			fclose($handle);
			return explode($delimiter, $line);
		}
		$output[] = explode($delimiter, $line);
		$count++;
	}
	fclose($handle);
	if (isset($index)) return null;
	return $output;
}


function deleteCSV($file, $index, $delimiter = ';')
{
	$array = readCSV($file);
	if ($index > count($array) - 1) return false;
	unset($array[$index]);
	writeAllCSV($file, $array, $delimiter);
	return true;
}

function modifyCSV($file, $index, $data, $delimiter = ';')
{
	$array = readCSV($file);
	if ($index > count($array) - 1) return false;
	$array[$index] = $data;
	writeAllCSV($file, $array, $delimiter);
	return true;
}


function writeCSV($file, $data, $delimiter = ';')
{
	$h = fopen($file, file_exists($file) ? 'a' : 'w');
	fwrite($h, implode($delimiter, $data) . PHP_EOL);
	fclose($h);
}

function writeAllCSV($file, $data, $delimiter = ';')
{
	$h = fopen($file, 'w');
	foreach ($data as $row) {
		fwrite($h, implode($delimiter, $row) . PHP_EOL);
	}
	fclose($h);
}
