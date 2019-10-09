<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Address;

use JMS\Serializer\Annotation as Serializer;

class Address
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $city;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $street;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $house;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $region;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $zip;
}