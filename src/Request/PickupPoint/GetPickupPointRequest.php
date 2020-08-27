<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\PickupPoint;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetPickupPointRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\PickupPoint
 */
class GetPickupPointRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/pickuppoints';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}
