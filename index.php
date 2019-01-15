<?php
require_once __DIR__.'/src/English.php';
require_once __DIR__.'/src/Yoruba.php';
require_once __DIR__.'/src/Hausa.php';
require_once __DIR__.'/src/Igbo.php';


// Import Yoruba Time Class
use LanguageTime\English;

//Import Hausa Time Class
use LanguageTime\Hausa;

//Import Igbo Time Class
use LanguageTime\Igbo;

//Import English Time Class
use LanguageTime\Yoruba;

echo new Yoruba();
// Aago Márùn-ún Ku ìsẹ́jú Méjì
echo new Hausa();
// Karfe Biyar Sauran Minti Biyu
echo new Igbo();
// Elekere  Ise O foro nkeji
echo new English();