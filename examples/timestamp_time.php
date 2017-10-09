<?php
// Import Yoruba Time Class
require '../Languages/Yoruba/Yoruba.php';
//Import Igbo Time Class
require '../Languages/Igbo/Igbo.php';
//Import Hausa Time Class
require '../Languages/Hausa/Hausa.php';
//Import English Time Class
require '../Languages/English/English.php';

$yoruba = new Yoruba();
$igbo = new Igbo();
$hausa = new Hausa();
$english = new English();

//Call time from timestamp
echo $yoruba->getTime(time());

echo $igbo->getTime(time());

echo $hausa->getTime(time());

echo $english->getTime(time());

?>