<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Status;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class UpdateOrderStatusesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Status
 */
class UpdateOrderStatusesRequest
{
    use RequestCore;

    const METHOD = 'PUT';
    const PATH = '/v1/statuses/update/batch';
}
