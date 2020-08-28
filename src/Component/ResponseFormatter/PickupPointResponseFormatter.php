<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint;
use Psr\Http\Message\ResponseInterface;

class PickupPointResponseFormatter
{
    public static function format(ResponseInterface $pickupPointResponse): PickupPoint
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$pickupPointResponse->getBody(), PickupPoint::class, 'json');
    }
}
