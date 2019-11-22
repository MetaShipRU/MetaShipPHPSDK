<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Delivery\DeliveriesResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class DeliveriesResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class DeliveriesResponseFormatter
{
    public static function format(ResponseInterface $deliveriesResponse): DeliveriesResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$deliveriesResponse->getBody(), DeliveriesResponse::class, 'json');
    }
}
