<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Shipment\ShipmentsResponse;
use Psr\Http\Message\ResponseInterface;

final class ShipmentsResponseFormatter
{
    public static function format(ResponseInterface $response): ShipmentsResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            ShipmentsResponse::class,
            'json'
        );
    }
}
