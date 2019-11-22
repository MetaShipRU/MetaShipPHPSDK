<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Documents\AcceptanceResponse;
use MetaShipRU\MetaShipPHPSDK\Response\Documents\LabelResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class AcceptanceResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class AcceptanceResponseFormatter
{
    public static function format(ResponseInterface $acceptanceResponse): AcceptanceResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$acceptanceResponse->getBody(), AcceptanceResponse::class, 'json');
    }
}
