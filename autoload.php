<?php 
spl_autoload_register(function ($class_name) {

	$folder = 'classes/';

    include 'classes/'. $class_name . '.php';
});
