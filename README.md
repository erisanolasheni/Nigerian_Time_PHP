# Nigerian Time PHP

A library that converts Time to its equivalent local languages of 4 basic Nigerian languages(Yoruba, Hausa, Igbo and English)


**********
## Installation
Nigeria Time PHP can be installed with composer:
```
composer require erisanolasheni/nigerian-time
```

## Usage
To use this library, autoload it's classes:
``` php
require __DIR__."/vendor/autoload.php";

// Import Yoruba Time Class
use LanguageTime\English;

//Import Hausa Time Class
use LanguageTime\Hausa;

//Import Igbo Time Class
use LanguageTime\Igbo;

//Import English Time Class
use LanguageTime\Yoruba;
```
### Call Instance of the Class to Display Current Time
```php
echo new Yoruba();
// Aago Márùn-ún Ku ìsẹ́jú Méjì
echo new Hausa();
// Karfe Biyar Sauran Minti Biyu
echo new Igbo();
// Elekere  Ise O foro nkeji
echo new English();
// Two minutes to Five
```


### Call time from timestamp

```php
echo $yoruba->getTime(time());
echo $igbo->getTime(time());
echo $hausa->getTime(time());
echo $english->getTime(time());
```
### Call time Yoruba from datestring

```php
echo $yoruba->getTime("now");
echo $yoruba->getTime("today");
echo $yoruba->getTime("yesterday");
echo $yoruba->getTime("+ 7 days");
echo $yoruba->getTime("2017-10-09 12:50:00");
// Aago Kan Ku ìsẹ́jú Mẹ́wàá
```
### Call time Igbo from datestring

```php
echo $igbo->getTime("now");
echo $igbo->getTime("today");
echo $igbo->getTime("yesterday");
echo $igbo->getTime("+ 7 days");
echo $igbo->getTime("2017-10-09 12:50:00");
// Elekere  Otu O foro nkeji  Iri
```
### Call time Hausa from datestring

```php
echo $hausa->getTime("now");
echo $hausa->getTime("today");
echo $hausa->getTime("yesterday");
echo $hausa->getTime("+ 7 days");
echo $hausa->getTime("2017-10-09 12:50:00");
// Karfe Daya Sauran Minti Goma
```
### Call time English from datestring

```php
echo $english->getTime("now");
echo $english->getTime("today");
echo $english->getTime("yesterday");
echo $english->getTime("+ 7 days");

echo $english->getTime("2017-10-09 12:50:00");
// Ten minutes to One
```
### Call time from hours and minutes

```php
//12 hrs, 34 minutes
echo $yoruba->getTimeHour(12,34);
echo $igbo->getTimeHour(12,34);
echo $hausa->getTimeHour(12,34);
echo $english->getTimeHour(12,34);
```