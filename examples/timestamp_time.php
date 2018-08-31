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

//Call time from timestamp
echo $yoruba->getTime(time());

echo $igbo->getTime(time());

echo $hausa->getTime(time());

echo $english->getTime(time());
