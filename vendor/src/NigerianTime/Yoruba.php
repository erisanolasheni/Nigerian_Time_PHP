<?php
// Declare the Language Time Namespace
namespace NigerianTime;

// require the language constants
require_once "YorubaConstants.php";

class Yoruba
{
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
        $description = YorubaConstants::number30;
        if ($minute > 30) {
            $description = YorubaConstants::BEFORE_POINTER . $this->getNumber(60 - $minute);
        } elseif ($minute < 30) {
            $description = YorubaConstants::AFTER_POINTER . $this->getNumber($minute);
        }

        return $description;
    }
    public function getHour($hour)
    {
        if ($hour > 12) {
            return YorubaConstants::TIME_POINTER . $this->getNumber($hour - 12);
        } else {
            return YorubaConstants::TIME_POINTER . $this->getNumber($hour);
        }

    }

    public function getNumber($number)
    {
        $switch = [
            YorubaConstants::number1,
            YorubaConstants::number2,
            YorubaConstants::number3,
            YorubaConstants::number4,
            YorubaConstants::number5,
            YorubaConstants::number6,
            YorubaConstants::number7,
            YorubaConstants::number8,
            YorubaConstants::number9,
            YorubaConstants::number10,
            YorubaConstants::number11,
            YorubaConstants::number12,
            YorubaConstants::number13,
            YorubaConstants::number14,
            YorubaConstants::number15,
            YorubaConstants::number16,
            YorubaConstants::number17,
            YorubaConstants::number18,
            YorubaConstants::number19,
            YorubaConstants::number20,
            YorubaConstants::number21,
            YorubaConstants::number22,
            YorubaConstants::number23,
            YorubaConstants::number24,
            YorubaConstants::number25,
            YorubaConstants::number26,
            YorubaConstants::number27,
            YorubaConstants::number28,
            YorubaConstants::number29,
        ];

        return $switch[$number - 1];
    }
}
