<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Parcel\ParcelsResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ParcelsResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class ParcelsResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): ParcelsResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), ParcelsResponse::class, 'json');
    }
}
