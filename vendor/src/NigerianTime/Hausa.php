<?php
// Declare the Language Time Namespace
namespace NigerianTime;

// require the language constants
require_once "HausaConstants.php";

class Hausa
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
        $description = HausaConstants::number30;
        if ($minute == 45) {
            $description = HausaConstants::number45;
        } elseif ($minute > 30) {
            $description = HausaConstants::BEFORE_POINTER . $this->getNumber(60 - $minute);
        } elseif ($minute == 15) {
            $description = HausaConstants::number15;
        } elseif ($minute <= 30) {
            $description = HausaConstants::AFTER_POINTER . $this->getNumber($minute);
        }

        return $description;
    }
    public function getHour($hour)
    {
        if ($hour > 12) {
            return HausaConstants::TIME_POINTER . $this->getNumber($hour - 12);
        } else {
            return HausaConstants::TIME_POINTER . $this->getNumber($hour);
        }

    }

    public function getNumber($number)
    {
        $switch = [
            HausaConstants::number1,
            HausaConstants::number2,
            HausaConstants::number3,
            HausaConstants::number4,
            HausaConstants::number5,
            HausaConstants::number6,
            HausaConstants::number7,
            HausaConstants::number8,
            HausaConstants::number9,
            HausaConstants::number10,
            HausaConstants::number11,
            HausaConstants::number12,
            HausaConstants::number13,
            HausaConstants::number14,
            HausaConstants::number15,
            HausaConstants::number16,
            HausaConstants::number17,
            HausaConstants::number18,
            HausaConstants::number19,
            HausaConstants::number20,
            HausaConstants::number21,
            HausaConstants::number22,
            HausaConstants::number23,
            HausaConstants::number24,
            HausaConstants::number25,
            HausaConstants::number26,
            HausaConstants::number27,
            HausaConstants::number28,
            HausaConstants::number29,
            HausaConstants::number30,
            HausaConstants::number45,
        ];

        return $switch[$number - 1];
    }
}
