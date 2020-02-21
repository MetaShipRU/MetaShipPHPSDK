<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class SearchOrderStatusHistoryRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchOrderStatusHistoryRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/order/status/history';

    /**
     * @Serializer\SerializedName("id")
     *
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\SerializedName("shopNumber")
     *
     * @var string|null
     */
    public $shopNumber;

    /**
     * @Serializer\SerializedName("trackNumber")
     *
     * @var string|null
     */
    public $trackNumber;

    /**
     * @Serializer\SerializedName("additionalServiceNumber")
     *
     * @var array
     */
    public $additionalServiceNumber = [];
}
