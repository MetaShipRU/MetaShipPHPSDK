<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Stock;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class UpdateStockRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Stock
 */
class UpdateStockRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/stocks';
    const METHOD = 'PUT';

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     * @var string
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     * @var string
     */
    public $status;
}
