<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Address;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateAddressRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Address
 */
class CreateAddressRequest
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $city;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrId")
     * @var string|null
     */
    public $kladrId;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $street;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $zip;

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
    public $building;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $apartment;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullAddress")
     * @var string|null
     */
    public $fullAddress;
}
