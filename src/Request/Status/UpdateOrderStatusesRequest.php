<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Status;

use MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatusUpdate;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class UpdateOrderStatusesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Status
 */
class UpdateOrderStatusesRequest
{
    use RequestCore;

    const METHOD = 'PUT';
    const PATH = '/v1/statuses/update/batch';

    /**
     * @var OrderStatusUpdate[]
     *
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatusUpdate>")
     * @Serializer\SerializedName("orders")
     */
    public $orders;
}
