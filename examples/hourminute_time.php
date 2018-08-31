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

//Call time from hours and minutes

//12 hrs, 34 minutes
echo $yoruba->getTimeHour(12, 34);

echo $igbo->getTimeHour(12, 34);

echo $hausa->getTimeHour(12, 34);

echo $english->getTimeHour(12, 34);
