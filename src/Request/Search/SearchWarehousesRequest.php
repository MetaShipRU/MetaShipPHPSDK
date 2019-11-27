<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchWarehousesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchWarehousesRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/search/warehouses';
    const METHOD = 'GET';

    /**
     * @Serializer\SerializedName("shopNumbers")
     * @Serializer\Type("array")
     * @var array
     */
    public $shopNumbers = [];
}