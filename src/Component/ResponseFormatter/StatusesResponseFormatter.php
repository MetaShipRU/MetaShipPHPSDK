<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Status\StatusesResponse;
use Psr\Http\Message\ResponseInterface;

class StatusesResponseFormatter
{
    public static function format(ResponseInterface $statusesResponse): StatusesResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$statusesResponse->getBody(), StatusesResponse::class, 'json');
    }
}
