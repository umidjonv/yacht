<?php


namespace App\Common\Arrays;


class Area
{
    private static $area = array("Area 1", "Area 2", "Area 3");

    public static function get()
    {
        return Area::$area;
    }

    public static function name($index)
    {
        if(count(Area::$area) > $index)
            return Area::$area[$index];
        else
            return null;
    }

}