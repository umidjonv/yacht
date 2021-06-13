<?php


namespace App\Common\Enums;

/**
 * Class ReservationConstants
 * @package App\Common\Enums
 */
class ReservationConstants
{

    const NEW = "new";
    const PAYED = "payed";
    const CONFIRMED = "confirmed";
    const COMPLETED = "completed";
    const CANCELED = "canceled";

    /**
     * @return array
     */
    public static function statuses(): array
    {
        return [
            self::NEW,
            self::PAYED,
            self::CONFIRMED,
            self::COMPLETED,
            self::CANCELED,
        ];
    }
}