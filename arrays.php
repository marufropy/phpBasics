<?php
	$lineBreak = "<br />";

	//Indexed Array
	$name = array('abdullah', 'al', 'maruf');
	$name[3] = 'ropy';
	var_dump($name);
	echo($lineBreak);

	echo($lineBreak);

	$cars = ['audi', 'bmw', 'mercedes'];
	$cars[] = 'cadillac';	
	echo count($cars);
	echo($lineBreak);

	print_r($cars);
	echo($lineBreak);

	var_dump($cars);
	echo($lineBreak);

	echo($lineBreak);

	$numbers = array(2, 7, 8);
	var_dump($numbers);
	echo($lineBreak);

	echo($lineBreak);

	//Associative Array
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	var_dump($people);
	echo($lineBreak);

	$people['Jill'] = 42;
	var_dump($people);
	echo($lineBreak);

	echo($lineBreak);

	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	var_dump($ids);
	echo($lineBreak);

	$ids[42] = 'Jill';
	var_dump($ids);
	echo($lineBreak);

	echo($lineBreak);
	
	//Multidimensional Array
	$shop = array(
		['laptops', 50, 10],
		['cellphones', 100, 30],
		['headphones', 500, 120]
	);
	var_dump($shop);
	echo($lineBreak);

	echo $shop[1][2];
	echo($lineBreak);
?>