<?php

// Import Yoruba Time Class
require '../Languages/Yoruba/Yoruba.php';
use LanguageTime\Yoruba;

//Import Igbo Time Class
require '../Languages/Igbo/Igbo.php';
use LanguageTime\Igbo;

//Import Hausa Time Class
require '../Languages/Hausa/Hausa.php';
use LanguageTime\Hausa;

//Import English Time Class
require '../Languages/English/English.php';
use LanguageTime\English;

// Instantiate your classes

$yoruba = new Yoruba();
$igbo = new Igbo();
$hausa = new Hausa();
$english = new English();

//Call time from datestring
echo $yoruba->getTime("2017-10-09 12:34:00");

echo $igbo->getTime("2017-10-09 12:34:00");

echo $hausa->getTime("2017-10-09 12:34:00");

echo $english->getTime("2017-10-09 12:34:00");

?>