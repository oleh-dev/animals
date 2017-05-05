<?php 
	namespace Animals;
	
	class Dog extends BaseAnimal {
	    function says() {
			echo 'Cat '.$this->name.' says ruff<br/>';
		}
	}