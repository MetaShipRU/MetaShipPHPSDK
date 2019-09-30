<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrderResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrderStatusHistoryResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrderStatusHistoryResponseFormatter
{
    public static function format(ResponseInterface $orderStatusHistoryResponse): OrderResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($orderStatusHistoryResponse->getBody()->getContents(),
            OrderResponse::class,
            'json');
    }
}