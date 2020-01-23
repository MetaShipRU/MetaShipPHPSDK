<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Status;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetStatusesInfoRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Status
 */
class GetStatusesInfoRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/statuses';
}
