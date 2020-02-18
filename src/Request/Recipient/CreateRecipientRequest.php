<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Recipient;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest;

/**
 * Class CreateRecipientRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Recipient
 */
class CreateRecipientRequest
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstName")
     * @var string|null
     */
    public $firstName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("middleName")
     * @var string|null
     */
    public $middleName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastName")
     * @var string|null
     */
    public $lastName;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $phone;

    /**
     * @Serializer\SerializedName("additionalPhones")
     * @Serializer\Type("array<string>")
     * @var array|null
     */
    public $additionalPhones;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $email;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pickupPointId")
     * @var int|null
     */
    public $pickupPointId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("pickupPointServiceNumber")
     * @var string|null
     */
    public $pickupPointServiceNumber;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest")
     * @var CreateAddressRequest
     */
    public $address;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fioRaw")
     * @var string|null
     */
    public $fioRaw;
}
