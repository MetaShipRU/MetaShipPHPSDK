<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Shipment;

use JMS\Serializer\Annotation as Serializer;

final class ShipmentStatus
{
    /**
     * @Serializer\Type("integer")
     * @var int|null
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
     * @Serializer\Type("string")
     * @var string|null
     */
    private $comment;

    /**
     * @Serializer\Type("array")
     * @var array
     */
    private $data = [];

    public function getId(): int
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

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
