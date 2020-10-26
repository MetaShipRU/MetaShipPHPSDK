<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentOrderOrderInStatusRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/orders/status/%s/%s';
    public const METHOD = 'GET';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $status;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    private $shopServiceNumber;

    public function __construct(string $status, string $shopServiceNumber)
    {
        $this->status = $status;
        $this->shopServiceNumber = $shopServiceNumber;
    }

    public function getPath(): string
    {
        return sprintf(self::PATH, $this->status, $this->shopServiceNumber);
    }
}
