<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\ShipmentOrder\ShipmentOrderResponse;
use Psr\Http\Message\ResponseInterface;

final class ShipmentOrderResponseFormatter
{
    public static function format(ResponseInterface $response): ShipmentOrderResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            ShipmentOrderResponse::class,
            'json'
        );
    }
}
