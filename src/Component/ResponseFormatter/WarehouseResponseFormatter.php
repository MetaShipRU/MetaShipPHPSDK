<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Warehouse\WarehouseResponse;
use Psr\Http\Message\ResponseInterface;

class WarehouseResponseFormatter
{
    public static function format(ResponseInterface $warehousesResponse): WarehouseResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$warehousesResponse->getBody(), WarehouseResponse::class, 'json');
    }
}
