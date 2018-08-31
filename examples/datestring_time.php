<?php
require __DIR__ . '/../vendor/autoload.php';

// Import Yoruba Time Class
use LanguageTime\English;

//Import Igbo Time Class
use LanguageTime\Hausa;

//Import Hausa Time Class
use LanguageTime\Igbo;

//Import English Time Class
use LanguageTime\Yoruba;

// Instantiate your classes

// For Yoruba
$yoruba = new Yoruba();
// For Igbo
$igbo = new Igbo();
// For Hausa
$hausa = new Hausa();
// For English
$english = new English();

//Call time from datestring
echo $yoruba->getTime("2017-10-09 12:34:00");

echo $igbo->getTime("2017-10-09 12:34:00");

echo $hausa->getTime("2017-10-09 12:34:00");

echo $english->getTime("2017-10-09 12:34:00");
