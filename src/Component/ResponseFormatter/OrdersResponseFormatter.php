<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrdersResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrdersResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrdersResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): OrdersResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), OrdersResponse::class, 'json');
    }
}
