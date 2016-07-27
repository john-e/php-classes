<?php

class A {
	protected $x;
	private $y;
	public $z;
	var $v;

	function __construct() {
		$this->x = 1;
		$this->y = 2;
		$this->z = 3;
		$this->w = 4;
		$this->v = 5;
	}
}

class B extends A {
	function __construct() {
		parent::__construct();
		echo "X: ".$this->x."\n";
		echo "Y: ".$this->y."\n";
		echo "Z: ".$this->z."\n";
		echo "W: ".$this->w."\n";
		echo "V: ".$this->v."\n";
	}
}

new B();
