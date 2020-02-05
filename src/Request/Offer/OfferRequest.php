<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Offer;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class OfferRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Offer
 */
class OfferRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/offers';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cityFrom")
     * @var string|null
     */
    public $cityFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cityTo")
     * @var string|null
     */
    public $cityTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("regionFrom")
     * @var string|null
     */
    public $regionFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("regionTo")
     * @var string|null
     */
    public $regionTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrIdFrom")
     * @var int|null
     */
    public $kladrIdFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrIdTo")
     * @var int|null
     */
    public $kladrIdTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiasIdFrom")
     * @var string
     */
    public $fiasIdFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiasIdTo")
     * @var string|null
     */
    public $fiasIdTo;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("zipFrom")
     * @var integer|null
     */
    public $zipFrom;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("zipTo")
     * @var integer|null
     */
    public $zipTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tariffId")
     * @var string|null
     */
    public $tariffId;

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
     * @Serializer\Type("float")
     * @Serializer\SerializedName("itemsSum")
     * @var float|null
     */
    public $itemsSum;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("paymentSum")
     * @var float|null
     */
    public $paymentSum;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("assessedValue")
     * @var float|null
     */
    public $assessedValue;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pickupPointId")
     * @var int|null
     */
    public $pickupPointId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryType")
     * @var string|null
     */
    public $deliveryType;
}
