<?php
namespace LanguageTime;

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

//Call time from timestamp
echo $yoruba->getTime(time());

echo $igbo->getTime(time());

echo $hausa->getTime(time());

echo $english->getTime(time());

?>