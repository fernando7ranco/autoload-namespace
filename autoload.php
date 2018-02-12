<?php

	function __autoload($class){
	
		//$class = str_replace('\\', '/', $class);
		
		$realpath = realpath("{$class}.php");
		
		//echo $realpath . '<br>';
		
		try{
		
			if($realpath)
				require_once( realpath("{$class}.php") );
			else
				throw new \Exception("arquivo class {$class} não encontrado");
			
		}catch(Exception $e){
			echo $e->getMessage();
		}	
	}