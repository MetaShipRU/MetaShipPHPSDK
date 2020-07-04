<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Schedule;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CourierSchedule
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Schedule
 */
class CourierSchedule
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $date;

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
