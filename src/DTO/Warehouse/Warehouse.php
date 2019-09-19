<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Warehouse;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Address\Address;

/**
 * Class Warehouse
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Warehouse
 */
class Warehouse
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Address\Address")
     * @var Address
     */
    public $address;
}