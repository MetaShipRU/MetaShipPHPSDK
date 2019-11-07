<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

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
     * @var string
     */
    public $created;

    /**
     * @Serializer\SerializedName("shopServiceCode")
     * @Serializer\Type("string")
     * @var string
     */
    public $shopServiceCode;

    /**
     * @Serializer\SerializedName("arrivedDate")
     * @var string
     */
    public $arrivedDate;

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
