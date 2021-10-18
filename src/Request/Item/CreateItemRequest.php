<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Item;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Item\Supplier;

/**
 * Class CreateItemRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Item
 */
class CreateItemRequest
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $name;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $cost;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $quantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vendorCode")
     * @var string|null
     */
    public $vendorCode;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $weight;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vatCode")
     * @var string|null
     */
    public $vatCode;

    /**
     * @Serializer\Type("array<string>")
     *
     * @var array
     */
    public $barcodes;

    /**
     * @Serializer\SerializedName("placeShopServiceNumber")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $placeShopServiceNumber;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $marking;

    /**
     * @var Supplier|null
     *
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Item\Supplier")
     */
    public $supplier;
}
