<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Warehouse;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class WarehouseRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Warehouse
 */
class WarehouseRequest extends CreateWarehouseRequest
{
    use RequestCore;

    const PATH = '/v1/warehouses';
    const METHOD = 'POST';
}
