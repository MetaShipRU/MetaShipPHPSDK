<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Schedule;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Schedule
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Schedule
 */
class Schedule
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("day")
     * @var string|null
     */
    public $day;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeFrom")
     * @var string|null
     */
    public $timeFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeTo")
     * @var string|null
     */
    public $timeTo;
}
