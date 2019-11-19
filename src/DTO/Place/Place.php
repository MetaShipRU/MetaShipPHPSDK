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
     * @Serializer("string")
     * @var string
     */
    public $shopServiceNumber;

    /**
     * @Serializer("string")
     * @var string
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer("integer")
     * @var int
     */
    public $width;

    /**
     * @Serializer("integer")
     * @var int
     */
    public $length;

    /**
     * @Serializer("integer")
     * @var int
     */
    public $height;
}