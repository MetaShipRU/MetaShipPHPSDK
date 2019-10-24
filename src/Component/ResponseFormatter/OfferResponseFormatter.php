<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Offer\OfferResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OfferResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OfferResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): OfferResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($orderResponse->getBody()->getContents(), OfferResponse::class, 'json');
    }
}