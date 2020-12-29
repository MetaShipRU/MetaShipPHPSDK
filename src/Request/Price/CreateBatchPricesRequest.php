<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Price;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class CreateBatchPricesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Price
 */
class CreateBatchPricesRequest
{
    use RequestCore;

    const PATH = '/v1/batch/prices';
    const METHOD = 'POST';

    /**
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Request\Price\PriceDataRequest>")
     * @var PriceDataRequest[]
     */
    public $prices;
}
