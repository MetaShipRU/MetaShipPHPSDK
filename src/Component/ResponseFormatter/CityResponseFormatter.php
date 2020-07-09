<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\City\GetCitiesResponse;
use Psr\Http\Message\ResponseInterface;

class CityResponseFormatter
{
    public static function format(ResponseInterface $getCitiesResponse): GetCitiesResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$getCitiesResponse->getBody(), GetCitiesResponse::class, 'json');
    }
}