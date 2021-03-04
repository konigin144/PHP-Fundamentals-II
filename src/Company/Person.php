<?php

namespace Company;

abstract class Person {
    public $id;
    protected $firstName, $lastName, $age;
    public function __construct (int $id, string $firstName, string $lastName, int $age) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function __toString(): string {
        return $this->id.': '.$this->firstName.' '.$this->lastName.', age '.$this->age;
    }
    public function __get($value) {
        return $this->$value;
    }
    public abstract function __sleep();
    public function setName(string $firstName, string $lastName) :void {
        $this->firstName = $firstName;
    }
    public function getName() :array {
        return array($this->firstName, $this->lastName);
    }
    public function setAge(int $age) :void {
        $this->age = $age;
    }
    public function getAge() :int {
        return $this->age;
    }
}