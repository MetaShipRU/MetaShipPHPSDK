<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Place;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Place
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Place
 */
class Place
{
    /**
     * @Serializer\SerializedName("shopServiceNumber")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $shopServiceNumber;

    /**
     * @Serializer\SerializedName("deliveryServiceNumber")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer\SerializedName("assessedValue")
     * @Serializer\Type("float")
     * @var float|null
     */
    public $assessedValue;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $width;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $length;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $height;
}
