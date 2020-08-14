<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderStatuses
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class OrderStatuses
{
    /**
     * @var array
     *
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\OrderStatusUpdate>")
     * @Serializer\SerializedName("orders")
     *
     * @Assert\NotBlank()
     */
    public $orders;
}
