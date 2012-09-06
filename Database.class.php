<?php

abstract class Database {

	abstract public function __construct($host, $name, $user, $password);

	abstract public function select($query);
	abstract public function selectRows($query);
	
}
?>
