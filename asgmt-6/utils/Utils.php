<?php

class	Utils {

	static public function readJSON($file, $index = null)
	{
		$array = json_decode(file_get_contents($file), true);
		if (isset($index)) return $array[$index];
		return $array;
	}

	static public function deleteJSON($file, $index)
	{
		$array = json_decode(file_get_contents($file), true);
		array_splice($array, $index, 1);
		self::writeAllJSON($file, $array);
	}

	static public function modifyJSON($file, $index, $data)
	{
		$array = json_decode(file_get_contents($file), true);
		$array[$index] = $data;
		self::writeAllJSON($file, $array);
	}

	static public function writeAllJSON($file, $data)
	{
		$h = fopen($file, 'w');
		fwrite($h, json_encode($data, JSON_PRETTY_PRINT));
		fclose($h);
	}

	static public function writeJSON($file, $data)
	{
		$array = json_decode(file_get_contents($file), true);
		$array[] = $data;
		self::writeAllJSON($file, $array);
	}

	static public function readCSV($file, $index = null, $delimiter = ';')
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


	static public function deleteCSV($file, $index, $delimiter = ';')
	{
		$array = readCSV($file);
		if ($index > count($array) - 1) return false;
		unset($array[$index]);
		self::writeAllCSV($file, $array, $delimiter);
		return true;
	}

	static public function modifyCSV($file, $index, $data, $delimiter = ';')
	{
		$array = readCSV($file);
		if ($index > count($array) - 1) return false;
		$array[$index] = $data;
		self::writeAllCSV($file, $array, $delimiter);
		return true;
	}


	static public function writeCSV($file, $data, $delimiter = ';')
	{
		$h = fopen($file, file_exists($file) ? 'a' : 'w');
		fwrite($h, implode($delimiter, $data) . PHP_EOL);
		fclose($h);
	}

	static public function writeAllCSV($file, $data, $delimiter = ';')
	{
		$h = fopen($file, 'w');
		foreach ($data as $row) {
			fwrite($h, implode($delimiter, $row) . PHP_EOL);
		}
		fclose($h);
	}

}