<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Search;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
/**
 * Class SearchShipmentOrdersRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Search
 */
class SearchShipmentOrdersRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/search/shipment/orders';

    public const TYPE_FAILOVER = 'failover';
    public const DEFAULT_LIMIT = 10;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    public $shop;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    public $status = null;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    public $type = null;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    public $statusesIn = [];

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    public $statusesNotIn = [];

    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    public $limit = null;
}
