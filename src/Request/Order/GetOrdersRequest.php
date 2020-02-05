<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

class GetOrdersRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/orders';

    /**
     * @Serializer\SerializedName("shopNumber")
     * @var string|null
     */
    public $shopNumber;

    /**
     * @var string|null
     */
    public $created;

    /**
     * @var int|null
     */
    public $start;

    /**
     * @Serializer\SerializedName("batchSize")
     * @var int|null
     */
    public $batchSize;
}
