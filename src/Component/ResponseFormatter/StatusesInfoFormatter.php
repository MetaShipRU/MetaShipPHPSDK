<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Status\StatusesInfoResponse;
use Psr\Http\Message\ResponseInterface;

class StatusesInfoFormatter
{
    public static function format(ResponseInterface $statusesInfoResponse): StatusesInfoResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$statusesInfoResponse->getBody(), StatusesInfoResponse::class, 'json');
    }
}
