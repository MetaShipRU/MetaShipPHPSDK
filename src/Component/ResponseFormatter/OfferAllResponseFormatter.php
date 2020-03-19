<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Offer\OfferAllResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OfferAllResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OfferAllResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): OfferAllResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), OfferAllResponse::class, 'json');
    }
}
