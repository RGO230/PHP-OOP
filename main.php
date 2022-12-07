<?php
include_once 'farm.php';
$farm = new Farm(new Cow,new Chicken);
$farm->getHarvest();
$farm->addAnimals();
$farm->getHarvest();