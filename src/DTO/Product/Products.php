<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Product;

use JMS\Serializer\Annotation as Serializer;

final class Products
{
    /**
     * @Serializer\SerializedName("awaitingCount")
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $awaitingCount;

    /**
     * @Serializer\SerializedName("arrivedCount")
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $arrivedCount;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Product\Product")
     *
     * @var Product|null
     */
    private $product;
}
