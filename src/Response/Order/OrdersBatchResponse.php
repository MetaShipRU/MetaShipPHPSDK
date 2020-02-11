<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Order\Order;
use MetaShipRU\MetaShipPHPSDK\Response\Error\OrdersBatchErrorResponse;

/**
 * Class OrdersBatchResponse
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrdersBatchResponse
{
    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Order\Order>")
     * @var Order[]
     */
    public $success;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Response\Error\OrdersBatchErrorResponse>")
     * @var OrdersBatchErrorResponse[]
     */
    public $errors;
}
