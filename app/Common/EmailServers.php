<?php


namespace App\Common;


class EmailServers
{
    public static function GetEmailServers()
    {
        return [
            1=>'Direct',
            2=>'naver.com',
            3=>'daum.net',
        ];
    }

}