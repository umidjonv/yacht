<?php


namespace App\Common\Arrays;


class Area
{
    private static $area = array("Area 1", "Area 2", "Area 3",
                                "Area 4", "Area 5", "Area 6",
                                "Area 7", "Area 8", "Area 9",
                                "Area 10", "Area 11", "Area 12");

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