<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

use JMS\Serializer\Annotation as Serializer;

class SearchOrderStatusHistoryBatchRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/batch/statuses';

    /**
     * @Serializer\SerializedName("shopNumbers>")
     * @Serializer\Type("array<string>")
     *
     * @var array
     */
    public $shopNumbers;
}
