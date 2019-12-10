<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Product;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ProductDataRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/products';
    public const METHOD = 'POST';

    /**
     * @Serializer\SerializedName("shopId")
     * @Serializer\Type("integer")
     *
     * @var int
     */
    private $shopId;

    /**
     * @Serializer\SerializedName("productId")
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $productId;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    private $data;

    public function __construct(int $shopId, string $productId, array $data)
    {
        $this->shopId = $shopId;
        $this->productId = $productId;
        $this->data = $data;
    }

    public function getShopId(): int
    {
        return $this->shopId;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
