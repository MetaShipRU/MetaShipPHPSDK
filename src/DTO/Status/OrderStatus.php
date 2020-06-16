<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderStatus
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class OrderStatus
{
    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $date;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalDate")
     * @var string|null
     */
    public $externalDate;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $code;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $description;
}
