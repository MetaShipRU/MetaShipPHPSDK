<?php


namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;


use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\PickupPoint\PickupPointsResponse;
use Psr\Http\Message\ResponseInterface;

class PickupPointsResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): PickupPointsResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), PickupPointsResponse::class, 'json');
    }
}
