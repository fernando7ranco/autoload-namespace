<?php
	
	require_once( realpath("autoload.php") );
	
	use Classes\A;
	use Classes\B;
	
	echo A::hello();
	echo B::hello();
