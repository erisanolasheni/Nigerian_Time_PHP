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

$yoruba = new Yoruba();
$igbo = new Igbo();
$hausa = new Hausa();
$english = new English();

//Call time from hours and minutes

//12 hrs, 34 minutes
echo $yoruba->getTimeHour(12,34);

echo $igbo->getTimeHour(12,34);

echo $hausa->getTimeHour(12,34);

echo $english->getTimeHour(12,34);

?>