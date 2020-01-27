<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CreateBatchOrdersRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Order
 */
class CreateBatchOrdersRequest
{
    use RequestCore;

    const PATH = '/v1/batch/orders';
    const METHOD = 'POST';

    /**
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Request\Order\CreateOrderRequest>")
     * @var CreateOrderRequest[]
     */
    public $orders;
}
