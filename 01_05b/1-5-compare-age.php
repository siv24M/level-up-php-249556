<?php

class Person {
	private $name;
	private $dob;
	
	function __construct($name, $dob) {
		$this->name = $name;
		$this->dob = $dob;	
	}
	
	public function get_name() {
		return $this->name;
	}
	
	public function get_dob() {
		return $this->dob;
	}
	
	public function get_age() {
		//Calculate age
		$dob = new Datetime($this->dob);
		$today = new Datetime(date('Y-m-d'));
		$age = $today->diff($dob);
		
		//Return Age in Years
		return $age->y;
	}
}

function compare_ages( $p1, $p2) {
	// Challenge: define this function
	if ($p1->get_age() > $p2->get_age()){
		return $p1->get_name()." is older than ".$p2->get_name();
	} elseif ($p2->get_age() > $p1->get_age()){
		return $p2->get_name() . " is older than " . $p1->get_name();
	} else{
		return $p1->get_name()." and ".$p2->get_name()." are of same age";
	}
}


$joe = new Person('Joe', '1985-10-20');
$phil = new Person('Phil', '1987-07-12');
$erin = new Person('Erin', '1991-08-28');
$teresa = new Person('Teresa', '2017-03-06');
$mike = new Person('Mike', '1989-04-07');
$lou = new Person('Lou', '2020-07-12');
$rob = new Person('Rob', '1990-12-16');
$louis = new Person('Louis', '1952-05-20');
$marie = new Person('Marie', '1956-05-25');
$rose = new Person( 'Rose', '1985-10-20' );

echo compare_ages($joe, $erin) . '<br/>';
echo compare_ages($joe, $rose) . '<br/>';
echo compare_ages($lou, $teresa) . '<br/>';