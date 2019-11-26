<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\PickupPoint;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint;

/**
 * Class PickupPointsResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\PickupPoint
 */
class PickupPointsResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint>")
     * @var PickupPoint[]
     */
    public $pickupPoints;

}