<?php

require_once 'autoload.php';

$dog = new MyNamespace\Ashe\Dog();
echo 'Ashe\'s Dog => ' . $dog->bark().PHP_EOL;
$cat = new MyNamespace\Annie\Cat();
echo 'Annie\'s Cat => ' . $cat->bark().PHP_EOL;