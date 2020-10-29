<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentOrderGetByExternalIdPatternRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/orders/external_id_pattern/%s/%s';
    public const METHOD = 'GET';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $pattern;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $shop;

    public function __construct(string $pattern, string $shop)
    {
        $this->pattern = $pattern;
        $this->shop = $shop;
    }

    public function getPath(): string
    {
        return sprintf(self::PATH, $this->pattern, $this->shop);
    }
}
