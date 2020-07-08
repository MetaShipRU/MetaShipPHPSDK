<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Package\GetPackagesResponse;
use Psr\Http\Message\ResponseInterface;

class PackageResponseFormatter
{
    public static function format(ResponseInterface $response): GetPackagesResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            (string)$response->getBody(),
            GetPackagesResponse::class,
            'json'
        );
    }
}
