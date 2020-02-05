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
     * @var string|null
     */
    public $created;

    /**
     * @Serializer\SerializedName("shopServiceCode")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $shopServiceCode;

    /**
     * @Serializer\SerializedName("arrivedDate")
     * @var string|null
     */
    public $arrivedDate;

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
