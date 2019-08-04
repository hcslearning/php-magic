<?php

class A {

	private $p1 = "p1";
	private $p2	= "p2";
	
	public function getP1(){return $this->p1;}
	public function getP2(){return $this->p2;}
	
	public function __get($name) {
		return $name;
	}
	
	public function __call($method, $args) {
		return [$method, $args];
	}
}

$a = new A();
var_dump($a->getP1());
var_dump($a->getP2());

var_dump($a->nombre); // se invoca el método mágico __get()

var_dump($a->getTelefono()); // se invoca el método mágico __call()
var_dump($a->setTelefono('9 9999 9999')); // se invoca el método mágico __call()
