<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Intake;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;
use MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse;

/**
 * Class Intake
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Intake
 */
class Intake
{
    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("deliveryServiceNumber")
     * @var int|null
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipmentDate")
     *
     * @var string|null
     */
    public $shipmentDate;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $volume;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("seatsCount")
     * @var int|null
     */
    public $seatsCount;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $comment;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @Serializer\SerializedName("warehouseFrom")
     * @var Warehouse|null
     */
    public $warehouseFrom;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Warehouse\Warehouse")
     * @Serializer\SerializedName("warehouseTo")
     * @var Warehouse|null
     */
    public $warehouseTo;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $created;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule")
     * @var Schedule|null
     */
    public $schedule;

    /**
     * @Serializer\SerializedName("shopServiceNumber")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $shopServiceNumber;
}
