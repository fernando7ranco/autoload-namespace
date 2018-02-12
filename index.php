<?php
	
	require_once( realpath("vendor/autoload.php") );
	
	use App\Classes\A;
	use App\Classes\B;
	
	echo A::hello();
	echo B::hello();
