<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Warehouse\WarehousesResponse;
use Psr\Http\Message\ResponseInterface;

class WarehousesResponseFormatter
{
    public static function format(ResponseInterface $statusesResponse): WarehousesResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($statusesResponse->getBody()->getContents(), WarehousesResponse::class, 'json');
    }
}