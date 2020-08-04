<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;
use MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest;

class CreateWarehouseRequest
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("contactPerson")
     * @var string
     */
    public $contactPerson;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $phone;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest")
     * @var CreateAddressRequest
     */
    public $address;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule>")
     * @var Schedule[]
     */
    public $schedules;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceNumber")
     * @var string
     */
    public $serviceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceNumber")
     * @var string
     */
    public $shopServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string|null
     */
    public $deliveryName;
}
