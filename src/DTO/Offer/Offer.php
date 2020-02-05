<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Offer;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Delivery\Delivery;
use MetaShipRU\MetaShipPHPSDK\DTO\Delivery\DeliveryCost;
use MetaShipRU\MetaShipPHPSDK\DTO\Delivery\DeliveryTariff;

/**
 * Class Offer
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Offer
 */
class Offer
{
    /**
     * @var Delivery
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Delivery\Delivery")
     * @Serializer\SerializedName("delivery")
     */
    public $delivery;

    /**
     * @var DeliveryCost
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Delivery\DeliveryCost")
     */
    public $cost;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("daysMin")
     * @var int|null
     */
    public $daysMin;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("daysMax")
     * @var int|null
     */
    public $daysMax;

    /**
     * @var DeliveryTariff
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Delivery\DeliveryTariff")
     */
    public $tariff;
}
