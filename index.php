<?php

error_reporting(E_ALL);
ini_set("display_errors", true);

// Clever way of avoiding lots of includes
function __autoload($class_name) {
	// Remember that include doesn't just look
	// in one location in the directory structure
    include $class_name . ".class.php";
}

$page = new PageWithFooter("Employees");

$db = new MySQL('localhost', 'test', 'user', 'password');
$employees = $db->selectRows("SELECT * FROM employees ORDER BY name ASC");

foreach ($employees as $employee) {
	$page->addContent(
		"<p>" . $employee['name'] . " is our " . $employee['job'] . ".</p>"
	);
}

/*
 * An alterative approach?:
 *
 * $list = Page::newList('ul');
 * foreach ($employees as $e) {
 *     $list->add($e['name'] . " is our " . $e['job']);
 * }
 * $page->addContent( $list->render() );
 */

$page->render();
?>
