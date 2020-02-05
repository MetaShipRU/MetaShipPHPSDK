<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Address\Address;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;

/**
 * Class Warehouse
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Warehouse
 */
class Warehouse
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
     * @Serializer\SerializedName("shopServiceNumber")
     * @var string|null
     */
    public $shopServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceNumber")
     * @var string|null
     */
    public $serviceNumber;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $phone;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $created;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contactPerson")
     * @var string|null
     */
    public $contactPerson;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Address\Address")
     * @var Address
     */
    public $address;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule>")
     * @Serializer\SerializedName("schedules")
     * @var Schedule[]
     */
    public $schedules;
}
