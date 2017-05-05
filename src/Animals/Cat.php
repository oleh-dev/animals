<?php 
	namespace Animals;
  
	class Cat extends BaseAnimal {
		function says() {
			echo 'Cat '.$this->name.' says meoow<br/>';
		}
	}