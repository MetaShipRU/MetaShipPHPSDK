<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use DateTimeImmutable;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderStatusUpdate
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class OrderStatusUpdate
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     */
    public $deliveryName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     */
    public $shopNumber;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceCode")
     */
    public $shopServiceCode;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    public $status;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalStatus")
     */
    public $externalStatus;

    /**
     * @var DateTimeImmutable
     *
     * @Serializer\Type("DateTimeImmutable")
     * @Serializer\SerializedName("externalEventTime")
     */
    public $eventTime;
}
