<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Package;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetPackagesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Package
 */
class GetPackagesRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/packages';
}
