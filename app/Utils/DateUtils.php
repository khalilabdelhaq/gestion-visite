<?php

namespace App\Utils;


class DateUtils
{
    public static function stringToDate($date){
        return \Carbon\Carbon::parse($date);
    }
}
