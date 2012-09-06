<?php

interface Database {

	public function __construct($host, $name, $user, $password);

	public function select($query);
	public function selectRows($query);
	
}
?>
