<?php

namespace App\Models;

require 'PrintableBE.php';

class BaseElement implements PrintableBE {
    
    private $phones;
    private $email;
    private $salary;

    public function __construct($phones, $email, $salary) {
        $this->phones = $phones;
        $this->email = $email;
        $this->salary = $salary;
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