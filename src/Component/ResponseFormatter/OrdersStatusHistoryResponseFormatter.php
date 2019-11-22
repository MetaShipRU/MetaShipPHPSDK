<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrdersResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrdersStatusHistoryResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrdersStatusHistoryResponseFormatter
{
    public static function format(ResponseInterface $orderStatusHistoryResponse): OrdersResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderStatusHistoryResponse->getBody(),
            OrdersResponse::class,
            'json');
    }
}
