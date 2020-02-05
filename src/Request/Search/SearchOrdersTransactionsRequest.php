<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;


/**
 * Class SearchOrdersTransactionsRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchOrdersTransactionsRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/orders/transactions';

    /**
     * @Serializer\Type("array")
     * @Serializer\SerializedName("shopNumber")
     *
     * @var array
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dateTimeFrom")
     * @var string|null
     */
    public $dateTimeFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("dateTimeTo")
     * @var string|null
     */
    public $dateTimeTo;

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
