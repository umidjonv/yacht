<?php


namespace App\Common\Arrays;


class Area
{
    private static $area = array('인천',    '화성',   '목포',    '여수',
                                '통영',    '거제',   '부산',     '포항',
                                '강릉',    '속초',   '제주',     '기타');

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