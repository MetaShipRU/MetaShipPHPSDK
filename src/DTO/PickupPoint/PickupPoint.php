<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Photo\Photo;
use MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule;

/**
 * Class PickupPoint
 * @package MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint
 */
class PickupPoint
{
    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("cityId")
     * @var int|null
     */
    public $cityId;

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
    public $name;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $lat;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $lng;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isOnlyPrepaid")
     * @var bool|null
     */
    public $isOnlyPrepaid;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isAcquiringAvailable")
     * @var bool|null
     */
    public $isAcquiringAvailable;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isCashAllowed")
     * @var bool|null
     */
    public $isCashAllowed;

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
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("postCode")
     * @var int|null
     */
    public $postCode;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $region;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryUniqueName")
     * @var string|null
     */
    public $deliveryUniqueName;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $type;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("workTimeRaw")
     * @var string|null
     */
    public $workTimeRaw;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $phone;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Photo\Photo>")
     * @var Photo[]
     */
    public $photos;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Schedule\Schedule>")
     * @Serializer\SerializedName("workTime")
     * @var Schedule[]
     */
    public $workTime;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weightMax")
     * @var float|null
     */
    public $weightMax;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("widthMax")
     * @var int|null
     */
    public $widthMax;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("lengthMax")
     * @var int|null
     */
    public $lengthMax;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("heightMax")
     * @var int|null
     */
    public $heightMax;
}
