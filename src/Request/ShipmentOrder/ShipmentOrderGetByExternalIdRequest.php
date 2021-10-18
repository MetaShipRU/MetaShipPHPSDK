<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentOrderGetByExternalIdRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/orders/external_id';
    public const METHOD = 'GET';

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
