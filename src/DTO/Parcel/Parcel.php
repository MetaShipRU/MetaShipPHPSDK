<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Parcel;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Delivery\Delivery;
use MetaShipRU\MetaShipPHPSDK\DTO\Order\Order;

/**
 * Class Parcel
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Parcel
 */
class Parcel
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryServiceNumber")
     *
     * @var string|null
     */
    public $deliveryServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipmentDate")
     *
     * @var string|null
     */
    public $shipmentDate;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Delivery\Delivery")
     * @var Delivery
     */
    public $delivery;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Order\Order>")
     * @var Order[]
     */
    public $orders;
}
