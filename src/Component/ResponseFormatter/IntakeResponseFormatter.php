<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Intake\IntakeResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class IntakeResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class IntakeResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): IntakeResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), IntakeResponse::class, 'json');
    }
}
