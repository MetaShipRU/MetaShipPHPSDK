<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Delivery;

use JMS\Serializer\Annotation\Type;

/**
 * Class DeliveryTariff
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Delivery
 */
class DeliveryTariff
{
    /**
     * @Type("integer")
     * @var int|null
     */
    public $id;
    /**
     * @Type("string")
     * @var string|null
     */
    public $name;
}
