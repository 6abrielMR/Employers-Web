<?php

class BaseElement {
    
    private idEmployer;
    private names;
    private typeId;
    private phones;
    private email;
    private salary;

    public function __construct() {}

    public function getIdEmployer() {
        return $this->idEmployer;
    }

    public function getNames() {
        return $this->names;
    }

    public function getTypeId() {
        return $this->typeId;
    }

    public function getPhones() {
        return $this->phones;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSalary() {
        return $this->salary;
    }

}