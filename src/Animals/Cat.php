<?php 
	namespace Animals;
  
	class Cat extends BaseAnimal {
		function says() {
			echo 'My Cat '.$this->name.' says meoow<br/>';
		}
	}