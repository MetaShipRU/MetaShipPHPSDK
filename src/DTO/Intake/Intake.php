<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Intake;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;
use MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse;

class Intake
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("deliveryServiceNumber")
     * @var int
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipmentDate")
     *
     * @var string
     */
    public $shipmentDate;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $volume;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("seatsCount")
     * @var int
     */
    public $seatsCount;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @Serializer\SerializedName("warehouseFrom")
     * @var Warehouse
     */
    public $warehouseFrom;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @Serializer\SerializedName("warehouseTo")
     * @var Warehouse
     */
    public $warehouseTo;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $created;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule")
     * @var Schedule
     */
    public $schedule;
}