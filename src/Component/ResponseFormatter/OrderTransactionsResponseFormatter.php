<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrderResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrderTransactionsResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrderTransactionsResponseFormatter
{
    /**
     * @param ResponseInterface $response
     * @return OrderResponse
     */
    public static function format(ResponseInterface $response): OrderResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            $response->getBody()->getContents(),
            OrderResponse::class,
            'json'
        );
    }
}
