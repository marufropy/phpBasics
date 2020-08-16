<?php
	//Indexed
	$name = array('maruf', 'ropy');
	$cars = ['audi', 'bmw', 'mercedes'];
	$name[2] = 'abdullah';
	$cars[] = 'cadillac';
	$numbers = array(2, 7, 8);
	
	echo count($cars);
	print_r($cars);
	var_dump($cars);

	//Associative
	$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
	$people['Jill'] = 42;
	$ids[42] = 'Jill';

	echo $people['Jill'];
	echo $ids[42];

	//Multidimentional
	$shop = array(
		['laptops', 50, 10],
		['cellphones', 100, 30],
		['headphones', 500, 120]
	);
	
	echo $shop[1][2];
	var_dump($shop);
?>