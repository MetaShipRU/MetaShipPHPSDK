<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Item;

use JMS\Serializer\Annotation as Serializer;

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
}
