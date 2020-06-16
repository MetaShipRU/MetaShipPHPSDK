<?php

declare(strict_types=1);


namespace MetaShipRU\MetaShipPHPSDK\Request\Order;


use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

class CancelBatchOrdersRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/batch/orders/cancel';
    const METHOD = 'PUT';

    /**
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Request\Order\CancelOrderRequest>")
     * @var CancelOrderRequest[]
     */
    public $orders;
}
