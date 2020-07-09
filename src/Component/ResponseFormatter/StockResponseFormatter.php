<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Stock\GetStockResponse;
use Psr\Http\Message\ResponseInterface;

class StockResponseFormatter
{
    public static function format(ResponseInterface $response): GetStockResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            GetStockResponse::class,
            'json'
        );
    }
}
