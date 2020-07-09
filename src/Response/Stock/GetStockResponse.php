<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Stock;

use MetaShipRU\MetaShipPHPSDK\DTO\Stock\Stock;
use JMS\Serializer\Annotation as Serializer;
/**
 * Class GetStockResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Stock
 */
class GetStockResponse
{
    /**
     * @var Stock[]
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Stock\Stock>")
     */
    public $stocks;
}
