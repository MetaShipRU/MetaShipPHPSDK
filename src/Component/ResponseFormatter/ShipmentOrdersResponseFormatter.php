<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\ShipmentOrder\ShipmentOrdersResponse;
use Psr\Http\Message\ResponseInterface;

final class ShipmentOrdersResponseFormatter
{
    public static function format(ResponseInterface $response): ShipmentOrdersResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            ShipmentOrdersResponse::class,
            'json'
        );
    }
}
