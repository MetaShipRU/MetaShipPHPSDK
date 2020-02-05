<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Status
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class Status
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uniqueName")
     * @var string|null
     */
    public $uniqueName;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $date;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryServiceName")
     * @var string|null
     */
    public $deliveryServiceName;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\StatusItem>")
     * @var StatusItem[]
     */
    public $items;
}
