<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchOrdersRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchOrdersRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/orders';

    /**
     * @Serializer\SerializedName("shopNumber")
     *
     * @var array
     */
    public $shopNumber = [];

    /**
     * @Serializer\SerializedName("trackNumber")
     *
     * @var array
     */
    public $trackNumber = [];

    /**
     * @var int
     */
    public $start;

    /**
     * @Serializer\SerializedName("batchSize")
     * @var int
     */
    public $batchSize;
}