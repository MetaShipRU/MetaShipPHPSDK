<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Price;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class PriceDataRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/prices';
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
     * @Serializer\SerializedName("priceId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $priceId;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function __construct(string $shop, string $delivery, string $priceId, array $data)
    {
        $this->shop = $shop;
        $this->delivery = $delivery;
        $this->priceId = $priceId;
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

    public function getPriceId(): string
    {
        return $this->priceId;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
