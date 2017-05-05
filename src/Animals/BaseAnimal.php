<?php 
	namespace Animals;
	
	class BaseAnimal {
		public $name = '';
		
		function __construct($name){
			$this->name = $name;
		}
	}