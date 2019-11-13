<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;


/**
 * Class SearchOrderTransactionsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchOrderTransactionsRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/order/transactions';

    /**
     * @Serializer\SerializedName("shopNumber")
     *
     * @var string
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dateTimeFrom")
     * @var string
     */
    public $dateTimeFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dateTimeTo")
     * @var string
     */
    public $dateTimeTo;

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
