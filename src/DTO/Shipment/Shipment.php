<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Shipment;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Product\Products;

final class Shipment
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $id;

    /**
     * @Serializer\Type("boolean")
     *
     * @var bool|null
     */
    private $arrived;

    /**
     * @Serializer\SerializedName("awaitingCount")
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $awaitingCount;

    /**
     * @Serializer\SerializedName("awaitingProductCount")
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $awaitingProductCount;

    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $stock;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Product\Products>")
     *
     * @var Products[]|null
     */
    private $products;
}
