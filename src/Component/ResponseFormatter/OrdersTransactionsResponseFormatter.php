<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrdersResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrdersTransactionsResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrdersTransactionsResponseFormatter
{
    /**
     * @param ResponseInterface $response
     * @return OrdersResponse
     */
    public static function format(ResponseInterface $response): OrdersResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            OrdersResponse::class,
            'json'
        );
    }
}
