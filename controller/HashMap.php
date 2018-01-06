<?php
	Class HashMap{
		public $key = array();
		public $value = array();

		public get($key){
			return $this->key, $this->value;
		}
		public set($k, $v){
			$this->key = $k;
			$this->value = $v;
		}
	}
	
$map = new Hashmap();



?>