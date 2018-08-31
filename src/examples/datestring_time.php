<?php
namespace NigerianTime;

// Import Yoruba Time Class
require_once '../Languages/Yoruba/Yoruba.php';

//Import Igbo Time Class
require_once '../Languages/Igbo/Igbo.php';

//Import Hausa Time Class
require_once '../Languages/Hausa/Hausa.php';

//Import English Time Class
require_once '../Languages/English/English.php';

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