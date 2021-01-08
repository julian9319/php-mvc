<?php

require_once('Routes.php');

function __autoload($className) {

	if (file_exists('./classes/'.$className.'.php')) {

		require_once './classes/'.$className.'.php';

	} elseif ('./controller/'.$className.'.php') {

		require_once './controller/'.$className.'.php';

	}

}