<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Delivery;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\CourierSchedule;

/**
 * Class Delivery
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Delivery
 */
class Delivery
{
    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uniqueName")
     *
     * @var string|null
     */
    public $uniqueName;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Schedule\CourierSchedule>")
     * @Serializer\SerializedName("courierSchedules")
     * @var CourierSchedule[]
     */
    public $courierSchedules;
}
