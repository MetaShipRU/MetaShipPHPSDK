<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Transaction\TransactionsResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class OrderTransactionsResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class OrderTransactionsResponseFormatter
{
    /**
     * @param ResponseInterface $response
     * @return TransactionsResponse
     */
    public static function format(ResponseInterface $response): TransactionsResponse
    {
        return SerializerBuilder::create()->build()->deserialize(
            $response->getBody()->getContents(),
            TransactionsResponse::class,
            'json'
        );
    }
}
