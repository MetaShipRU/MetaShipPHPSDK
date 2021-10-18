<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Product;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

final class GetProductRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/products/external_id';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $shop;

    /**
     * @Serializer\SerializedName("productId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $productId;

    public function __construct(string $shop, string $productId)
    {
        $this->shop = $shop;
        $this->productId = $productId;
    }

    public function getShop(): string
    {
        return $this->shop;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }
}
