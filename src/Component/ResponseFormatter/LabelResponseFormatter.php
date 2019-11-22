<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Documents\LabelResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class LabelResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class LabelResponseFormatter
{
    public static function format(ResponseInterface $labelResponse): LabelResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$labelResponse->getBody(), LabelResponse::class, 'json');
    }
}
