<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StatusItem
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 *
 */
class StatusItem
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vendorCode")
     * @var string|null
     */
    public $vendorCode;

    /**
     * @Serializer\Type("integer")
     * @var integer|null
     */
    public $quantity;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("deliveredQuantiy")
     * @var int|null
     */
    public $deliveredQuantity;
}
