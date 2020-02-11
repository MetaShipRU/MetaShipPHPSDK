<?php


namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;


use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Order\OrdersBatchResponse;
use Psr\Http\Message\ResponseInterface;

class OrdersBatchResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): OrdersBatchResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$orderResponse->getBody(), OrdersBatchResponse::class, 'json');
    }
}
