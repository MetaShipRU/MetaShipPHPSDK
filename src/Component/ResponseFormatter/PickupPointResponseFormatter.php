<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint;
use Psr\Http\Message\ResponseInterface;

class PickupPointResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): PickupPoint
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), PickupPoint::class, 'json');
    }
}
