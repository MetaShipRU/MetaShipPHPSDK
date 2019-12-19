<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Product;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Fulfilment\Fulfilment;

final class Product
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $id;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $name;

    /**
     * @Serializer\SerializedName("englishName")
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $englishName;


    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $brand;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $barcode;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $article;

    /**
     * @Serializer\SerializedName("shopArticle")
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $shopArticle;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $url;

    /**
     * @Serializer\Type("double")
     *
     * @var float|null
     */
    private $length;

    /**
     * @Serializer\Type("double")
     *
     * @var float|null
     */
    private $width;

    /**
     * @Serializer\Type("double")
     *
     * @var float|null
     */
    private $height;

    /**
     * @Serializer\Type("double")
     *
     * @var float|null
     */
    private $weight;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $price;

    /**
     * @Serializer\SerializedName("retailPrice")
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $retailPrice;

    /**
     * @Serializer\Type("boolean")
     *
     * @var bool|null
     */
    private $fragile;

    /**
     * @Serializer\Type("boolean")
     *
     * @var bool|null
     */
    private $danger;

    /**
     * @Serializer\Type("boolean")
     *
     * @var bool|null
     */
    private $perishable;

    /**
     * @Serializer\Type("boolean")
     *
     * @var bool|null
     */
    private $needBox;

    /**
     * @Serializer\Type("boolean")
     *
     * @var bool|null
     */
    private $adult;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Fulfilment\Fulfilment")
     *
     * @var Fulfilment|null
     */
    private $fulfilment;
}
