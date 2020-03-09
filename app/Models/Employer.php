<?php

namespace App\Models;

require 'BaseElement.php';
require 'PrintableEmployer.php';

class Employer extends BaseElement implements PrintableEmployer {

    private $idEmployer;
    private $names;
    private $typeId;

    public function __construct($idEmployer, $names, $typeId, $phones, $email, $salary) {
        $this->idEmployer = $idEmployer;
        $this->names = $names;
        $this->typeId = $typeId;
        parent::__construct($phones, $email, $salary);
    }

    public function getIdEmployer() {
        return $this->idEmployer;
    }

    public function getNames() {
        return $this->names;
    }

    public function getTypeId() {
        return $this->typeId;
    }

}