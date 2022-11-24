<?php 

function is_palindrome( $str ) {
	// Challenge: define this function
	$str1 = preg_replace('/[[:punct:] ]/','',$str);
	//echo $str1, strrev($str1);
	return (strcasecmp($str1,strrev($str1)))? 0 : 1;
}

$strings = array( 'Race Car', 'Amore, Roma', 'Hello World!', 'Madam, in Eden, I\'m Adam.', 'Joe wore more than in store' );

foreach( $strings as $string ) {
	$is = is_palindrome($string) ? ' is ' : ' is not ';
	echo $string . $is . 'a palindrome.<br/>'; 
}