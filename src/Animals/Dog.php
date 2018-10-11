<?php 
	namespace Animals;
	
	class Dog extends BaseAnimal {
	    function says() {
			echo 'Dog '.$this->name.' says ruff<br/>';
		}
	}