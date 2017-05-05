<?php 
	namespace Animals;
  
	class Cat extends BaseAnimal {
		function says() {
			echo "supercat -> ";
			echo 'Cat '.$this->name.' says meoow<br/>';
		}
	}