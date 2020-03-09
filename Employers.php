<?php 

require 'app/Models/Employer.php';
require_once 'app/Models/PrintableEmployer.php';
require_once 'app/Models/PrintableBE.php';

use App\Models\Employer;

$employer1 = new Employer('0001', 'Gabriel Omar Montes Rodriguez', 'CC', '314 445 6753', 'gabriel.montes716@gmail.com', '2.000.000 COP');
$employer2 = new Employer('0002', 'Omar David Montes Rodriguez', 'TI', '311 537 5511', 'montesdavid121@gmail.com', '2.500.000 COP');
$employer3 = new Employer('0003', 'Paula Andrea Torres Villalba', 'TI', '321 222 1043', 'paulavil@gmail.com', '3.500.000 COP');

$employers = [
    $employer1,
    $employer2,
    $employer3
  ];

function printEmployers($employer) {

    echo '<div class="row employer">';
    echo '<div id="field-title" class="col s12 m10 l1">';
    echo '<h3>';
    echo '<label>';
    echo '<input type="checkbox" class="filled-in"/>';
    echo '<span id="id-ct">'.$employer->getIdEmployer().'</span>';
    echo '</label>';
    echo '</h3>';
    echo '</div>';
    echo '<div id="field-title" class="col s12 m10 l2"><h3>'.$employer->getNames().'</h3></div>';
    echo '<div id="field-title" class="col s12 m10 l1"><h3>'.$employer->getTypeId().'</h3></div>';
    echo '<div id="field-title" class="col s12 m10 l2"><h3>'.$employer->getPhones().'</h3></div>';
    echo '<div id="field-title" class="col s12 m10 l2"><h3>'.$employer->getEmail().'</h3></div>';
    echo '<div id="field-title" class="col s12 m10 l2"><h3>'.$employer->getSalary().'</h3></div>';
    echo '<div id="field-title" class="col s12 m10 l2"><h3>Acciones</h3></div>';
    echo '</div>';
    echo '<div class="separator"></div>';

}