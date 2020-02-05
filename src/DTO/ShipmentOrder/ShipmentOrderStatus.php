<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;

final class ShipmentOrderStatus
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    private $id;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    private $timestamp;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    private $status;

    /**
     * @Serializer\SerializedName("extendedStatus")
     * @Serializer\Type("string")
     * @var string|null
     */
    private $extendedStatus;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    private $comment;

    public function getId(): string
    {
        return $this->id;
    }

    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getExtendedStatus(): ?string
    {
        return $this->extendedStatus;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }
}
