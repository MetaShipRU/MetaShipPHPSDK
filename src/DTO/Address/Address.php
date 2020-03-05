<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Address;

use JMS\Serializer\Annotation as Serializer;

class Address
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $city;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $street;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $house;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $housing;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $region;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $zip;

    /**
     * @Serializer\SerializedName("kladrId")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $kladrId;

    /**
     * @Serializer\SerializedName("fullAddress")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $fullAddress;
}
