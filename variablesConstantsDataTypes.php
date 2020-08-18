<?php
	//single line comment

	#another single line comment

	/*
	multi
	line
	comment
	*/

	$lineBreak = "<br />";

	$str1 = 'Hello';
	$str2 = 'World';
	$greeting = $str1.' '.$str2.'!';
	echo $greeting;
	echo($lineBreak);

	$greeting2 = "$str1 $str2!";
	echo $greeting2;
	echo($lineBreak);

	echo($lineBreak);

	$str3 = 'You\'re Welcome.';
	echo $str3;
	echo($lineBreak);

	$str4 = "You're Welcome.";
	echo $str4;
	echo($lineBreak);

	echo($lineBreak);

	$num1 = 8;
	echo $num1;
	echo $lineBreak;

	$num2 = 7.2;
	echo $num2;
	echo $lineBreak;

	$sum = $num1 + $num2;
	echo $sum;
	echo $lineBreak;

	echo($lineBreak);

	$bool1 = true;
	echo $bool1;
	echo $lineBreak;

	$bool2 = false;
	echo $bool2;
	echo $lineBreak;

	echo($lineBreak);

	define('GREETING', 'This is a case sensitive constant.');
	echo GREETING;
	echo $lineBreak;
	
	define('GREETING', 'This is a case insensitive constant.', true);
	echo greeting;
	echo($lineBreak);
?>