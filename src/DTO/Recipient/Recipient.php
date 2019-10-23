<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Recipient;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Address\Address;

/**
 * Class Recipient
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Recipient
 */
class Recipient
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstName")
     * @var string
     */
    public $firstName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("middleName")
     * @var string
     */
    public $middleName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastName")
     * @var string
     */
    public $lastName;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Address\Address")
     * @var Address
     */
    public $address;

    /**
     * @var int
     */
    public $pickupPointId;

    /**
     * @var string
     */
    public $pickupPointServiceNumber;

    /**
     * @Serializer\SerializedName("additionalPhones")
     * @Serializer\Type("array<string>")
     * @var string[]
     */
    public $additionalPhones;
}