<?php


namespace App\Common\Enums;

/**
 * Class ReservationConstants
 * @package App\Common\Enums
 */
class ReservationConstants
{

    const PAYED = "payed";
    const CANCELED = "canceled";
    const RESERVED = "reserved";

    /**
     * @return array
     */
    public static function statuses(): array
    {
        return [
            self::PAYED,
            self::RESERVED,
            self::CANCELED,
        ];
    }
}