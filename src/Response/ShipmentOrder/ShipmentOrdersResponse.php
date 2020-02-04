<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Response\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\ShipmentOrder\ShipmentOrder;

final class ShipmentOrdersResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\ShipmentOrder\ShipmentOrder>")
     *
     * @var ShipmentOrder[]
     */
    public $orders;
}
