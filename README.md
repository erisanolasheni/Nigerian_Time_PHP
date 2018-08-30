# Language Time PHP

A library that converts Time to its equivalent local languages starting with three basic Nigeria languages(Yoruba, Hausa, Igbo and English)


**********

## Usage
``` php
// Import Yoruba Time Class
require '../Languages/Yoruba/Yoruba.php';
//Import Igbo Time Class
require '../Languages/Igbo/Igbo.php';
//Import Hausa Time Class
require '../Languages/Hausa/Hausa.php';
//Import English Time Class
require '../Languages/English/English.php';

//Call time from timestamp
echo $yoruba->getTime(time());

echo $igbo->getTime(time());

echo $hausa->getTime(time());

echo $english->getTime(time());

//Call time from datestring
echo $yoruba->getTime("now");
echo $yoruba->getTime("today");
echo $yoruba->getTime("yesterday");
echo $yoruba->getTime("+ 7 days");

echo $yoruba->getTime("2017-10-09 12:34:00");


echo $igbo->getTime("now");
echo $igbo->getTime("today");
echo $igbo->getTime("yesterday");
echo $igbo->getTime("+ 7 days");
echo $igbo->getTime("2017-10-09 12:34:00");

echo $hausa->getTime("now");
echo $hausa->getTime("today");
echo $hausa->getTime("yesterday");
echo $hausa->getTime("+ 7 days");
echo $hausa->getTime("2017-10-09 12:34:00");

echo $english->getTime("now");
echo $english->getTime("today");
echo $english->getTime("yesterday");
echo $english->getTime("+ 7 days");
echo $english->getTime("2017-10-09 12:34:00");

//Call time from hours and minutes
//12 hrs, 34 minutes
echo $yoruba->getTimeHour(12,34);

echo $igbo->getTimeHour(12,34);

echo $hausa->getTimeHour(12,34);

echo $english->getTimeHour(12,34);
