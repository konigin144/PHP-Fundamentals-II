<?php

define('BASE_DIR', __DIR__);
spl_autoload_register(
    function ($class) {
        $fn = str_replace('\\', '/', $class) . '.php';
        require(BASE_DIR . '/src/' . $fn);
    }
);

use \Company\Person;
use \Company\Employee;

$employee1 = new Employee(1, 'John', 'Watson', 32, 'CEO');
$employee2 = new Employee(2, 'Mary', 'Smith', 41, 'Senior Developer');

echo 'Employee 1: '.serialize($employee1).PHP_EOL;
echo 'Employee 2: '.serialize($employee2).PHP_EOL;
$employee1->setAge($employee1->getAge()+1);
echo 'Employee 1 updated age: '.$employee1->age;

