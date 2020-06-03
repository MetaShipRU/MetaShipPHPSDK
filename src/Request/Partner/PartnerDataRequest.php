<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Partner;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class PartnerDataRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/partners';
    public const METHOD = 'POST';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $shop;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $delivery;

    /**
     * @Serializer\SerializedName("partnerId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $partnerId;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function __construct(string $shop, string $delivery, string $partnerId, array $data)
    {
        $this->shop = $shop;
        $this->delivery = $delivery;
        $this->partnerId = $partnerId;
        $this->data = $data;
    }

    public function getShop(): string
    {
        return $this->shop;
    }

    public function getDelivery(): string
    {
        return $this->delivery;
    }

    public function getPartnerId(): string
    {
        return $this->partnerId;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
