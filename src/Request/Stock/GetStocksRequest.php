<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Stock;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

class GetStocksRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/stocks';
}
