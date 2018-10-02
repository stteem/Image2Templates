<pre>
<?php 

//ARRAYS
$stuff = array("name" => "Chuck", "course" => "S1664");
foreach($stuff as $k => $v ) {
	echo "Key=",$k, " Val=",$v, "<br>";
}
	echo '<br>';

$products = array(
	'paper' => array('copier' => "Copier & Multipurpose",
					'inkjet' => "Inkjet Printer",
					'laser' => "Laser Printer"),
	'pens' => array('ball' => "Ball Point",
					'hilite' => "Highlighters")
);

	print "Count: " . count($products). "<br>";

	echo $products["pens"]["hilite"];
	echo '<br>';

	if(array_key_exists('paper', $products)){
		echo("Course exists");
		echo '<br>';

	}

	//Tenary operator in php5.x
	echo isset($products['paper']) ? "paper is set" : "name is not set";
	echo '<br>';
	echo isset($products['addr']) ? "address is set" : "addr is not set";
	echo '<br>';
	
	//There will be no output
	echo isset($products['addr']);

	//ARRAYS php5
	$xa = array();
	$xa["Name"] = "Uwem";
	$xa["Course"] = "WA4E";
	$xa["Topic"] = "PHP";

	print_r($xa);

	ksort($xa);
	echo "<br>";
	print_r($xa);
	echo "<br>";
	asort($xa);
	print_r($xa);
	echo "<br>";


	//Counts number of key value pairs
	print "Count: " . count($xa) . "<br>";

	//Checks if variable is an array
	echo is_array($xa) ? 'Array' : 'not an Array';
	echo "<br>";

	$no = 'this is a string';
	echo is_array($no) ? 'Array' : 'not an Array';
	echo "<br>";


	//Null Coalesce < php7.0.0 equivalent
	$topic = isset($xa['Topic']) ? $xa['Topic'] : 'not found';
		echo "Topic = $topic <br>";	


	//Null Coalesce only in php7.0.0 only
	$name = $xa['Name'] ?? 'not found';
	$addr = $xa['addr'] ?? 'not found';

	echo("Name = $name <br>");
	echo("Addr = $addr <br>");

	$xa = $_GET['user'] ?? 'nobody';
	echo "$xa <br>";
		
	//Also
	$xa = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
	echo "$xa <br>";

	//Exploding Arrays
	$inp = "This is a sentence with seven words";
	$temp = explode(' ', $inp);
	print_r($temp);
	echo "<br>";
	var_dump(explode(' ', $inp));
?>
</pre>
