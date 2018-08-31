<?php
// Declare the Language Time Namespace
namespace NigerianTime;

// require the language constants
require_once "IgboConstants.php";

class Igbo
{
    public function __toString()
    {
        // Construct to return the current time
        return $this->getTime(time());
    }

    public function getTime($param)
    {
        $param = !is_numeric($param) ? strtotime($param) : $param;
        $param = date("H:i", $param);
        $hour = explode(":", $param)[0];
        $minute = explode(":", $param)[1];
        return $this->getTimeHour($hour, $minute);
    }
    public function getCurrentTime()
    {
        return $this->getTime(time());
    }

    public function getTimeHour($hour, $minute)
    {
        if (!(int) $hour) {
            $hour = 24;
        }

        $yor_minute = "";
        if ((int) $minute) {
            $yor_minute = $this->getMinute($minute);
        }

        if ($minute > 30) {
            $yor_hour = $this->getHour($hour + 1);
        } else {
            $yor_hour = $this->getHour($hour);
        }

        // yor_minute + yor_hour
        return $yor_hour . $yor_minute;
    }
    public function getMinute($minute)
    {
        $description = IgboConstants::number30;
        if ($minute > 30) {
            $description = IgboConstants::BEFORE_POINTER . $this->getNumber(60 - $minute);
        } elseif ($minute < 30) {
            $description = IgboConstants::AFTER_POINTER . $this->getNumber($minute);
        }

        return $description;
    }
    public function getHour($hour)
    {
        if ($hour > 12) {
            return IgboConstants::TIME_POINTER . $this->getNumber($hour - 12);
        } else {
            return IgboConstants::TIME_POINTER . $this->getNumber($hour);
        }

    }

    public function getNumber($number)
    {
        $switch = [
            IgboConstants::number1,
            IgboConstants::number2,
            IgboConstants::number3,
            IgboConstants::number4,
            IgboConstants::number5,
            IgboConstants::number6,
            IgboConstants::number7,
            IgboConstants::number8,
            IgboConstants::number9,
            IgboConstants::number10,
            IgboConstants::number11,
            IgboConstants::number12,
            IgboConstants::number13,
            IgboConstants::number14,
            IgboConstants::number15,
            IgboConstants::number16,
            IgboConstants::number17,
            IgboConstants::number18,
            IgboConstants::number19,
            IgboConstants::number20,
            IgboConstants::number21,
            IgboConstants::number22,
            IgboConstants::number23,
            IgboConstants::number24,
            IgboConstants::number25,
            IgboConstants::number26,
            IgboConstants::number27,
            IgboConstants::number28,
            IgboConstants::number29,
        ];

        return $switch[$number - 1];
    }
}
echo new Igbo();