<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Error\ErrorResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ErrorResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class ErrorResponseFormatter
{
    public static function format(ResponseInterface $errorResponse): ErrorResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize((string)$errorResponse->getBody(), ErrorResponse::class, 'json');
    }
}
