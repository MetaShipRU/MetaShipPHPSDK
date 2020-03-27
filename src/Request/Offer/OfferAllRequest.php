<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Offer;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class OfferAllRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Offer
 */
class OfferAllRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/offers/all';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("paymentSum")
     * @var int|null
     */
    public $paymentSum;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullAddressTo")
     * @var string|null
     */
    public $fullAddressTo;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     * @var float|null
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     * @var int|null
     */
    public $width;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("length")
     * @var int|null
     */
    public $length;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     * @var int|null
     */
    public $height;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("assessedValue")
     * @var string|null
     */
    public $assessedValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("distance")
     * @var string|null
     */
    public $distance;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $radius;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryUniqueName")
     * @var string|null
     */
    public $deliveryUniqueName;
}
