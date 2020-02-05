<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\PickupPoint;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class GetPickupPointsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\PickupPoint
 */
class GetPickupPointsRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/pickuppoints';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrId")
     * @var string|null
     */
    public $kladrId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string|null
     */
    public $deliveryName;
}
