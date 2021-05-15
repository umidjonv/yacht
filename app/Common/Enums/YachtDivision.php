<?php


namespace App\Common\Enums;


use App\Common\Helpers\VariableName;

class YachtDivision extends Enumerator
{
    const tour = 1;
    const lodgement = 2;
    const theme = 3;

    public function __construct()
    {
        $arr = array();

        $arr = array_add($arr, (string)self::tour, 'tour');
        $arr = array_add($arr, (string)self::lodgement, 'lodgement');
        $arr = array_add($arr, (string)self::theme, 'theme');

        parent::__construct($arr);
    }

}
