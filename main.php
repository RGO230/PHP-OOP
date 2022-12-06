<?php
include 'cow.php';
include 'chicken.php';
$chicken = new Chicken;
$cow = new Cow;

$chicken->getInitial();
$cow->getInitial();
$chicken->harvest();
$cow->harvest();
$chicken->addAnimal();
$cow->addAnimal();
$chicken->harvest();
$cow->harvest();
