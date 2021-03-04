<?php

namespace Company;

class Employee extends Person {
    public const COMPANY = 'Software Company';
    protected string $position;
    public function __construct (int $id, string $firstName, string $lastName, int $age, string $position) {
        parent ::__construct ($id, $firstName, $lastName, $age);
        $this->position = $position;
    }
    public function __toString(): string {
        $output = parent ::__toString().', company: '.self::COMPANY.', position: '.$this->position.PHP_EOL;
        return $output;
    }
    public function __sleep() {
        return ['id', 'firstName', 'lastName', 'age', 'position'];
    }
}