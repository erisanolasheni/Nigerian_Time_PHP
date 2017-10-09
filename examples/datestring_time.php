<?php
// Import Yoruba Time Class
require '../Languages/Yoruba/Yoruba.php';
//Import Igbo Timw Class
require '../Languages/Igbo/Igbo.php';
//Import Hausa Time Class
require '../Languages/Hausa/Hausa.php';
//Import English Time Class
require '../Languages/English/English.php';

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