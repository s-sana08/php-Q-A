<?php
require_once('teacher.php');
require_once('student.php');

use php\ns\teacher as tea;
use php\ns\student as std;

$t = new tea\details();
echo '<br>';
$s = new std\details();

/*
Q:What are namespaces in PHP?
A:“Namespaces in PHP are used to organize code into logical groups and avoid naming conflicts between classes, functions, and constants.”

Q:Why are namespaces used?
A:“To prevent name conflicts when two classes or functions have the same name, especially in large applications or when using third-party libraries.”
*/
?>