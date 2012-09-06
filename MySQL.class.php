<?php

class MySQL implements Database {
	
	// This class and any other classes that
	// inherit this one will have a $conx variable
	protected $conx;
	
	function __construct($host, $name, $user, $password) {
		$this->conx = new mysqli($host, $user, $password, $name);
		// Throw exception or...
		if ($this->conx->connect_error) {
			error_reporting("Database connection error: " . $this->conx->connect_error);
		}
	}
	
	function select($query) {
		$result = $this->conx->query($query);
		if ($result !== false) {
			if ($result->num_rows > 0) {
				return $result->fetch_assoc();
			} else {
				// Throw exception or...
				return false;
			}
		} else {
			// Throw exception or...
			return false;
		}
	}
	
	function selectRows($query) {
		$resultSet = array();
		$result = $this->conx->query($query);
		if ($result !== false) {
			if ($result->num_rows > 0) {
				while ($row = ($result->fetch_assoc())) {
					$resultSet[] = $row;
				}
			} else {
				// Throw exception or...
				return false;
			}
		} else {
			// Throw exception or...
			return false;
		}
		return $resultSet;
	}
}

?>
