<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Offer;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Offer\Offer;
use MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint;

/**
 * Class OfferAllResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Offer
 */
class OfferAllResponse
{
    /**
     * @var PickupPoint[]
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint>")
     */
    public $pickup;

    /**
     * @var Offer[]
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Offer\Offer>")
     */
    public $courier;

    /**
     * @var Offer[]
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Offer\Offer>")
     */
    public $post;
}
