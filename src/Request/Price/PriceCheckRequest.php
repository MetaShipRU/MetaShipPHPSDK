<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Price;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class PriceCheckRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/prices/check';
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
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function __construct(string $shop, string $delivery, array $data)
    {
        $this->shop = $shop;
        $this->delivery = $delivery;
        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function addDataItem(): void
    {

    }
}
