<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Shipment\ShipmentResponse;
use Psr\Http\Message\ResponseInterface;

final class ShipmentResponseFormatter
{
    public static function format(ResponseInterface $response): ShipmentResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            ShipmentResponse::class,
            'json'
        );
    }
}
