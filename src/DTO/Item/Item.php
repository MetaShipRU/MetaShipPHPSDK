<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Item;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Item
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Item
 */
class Item
{
    private const VAT_CODE_20 = '20';
    private const VAT_CODE_10 = '10';
    private const VAT_CODE_0 = '0';
    private const VAT_CODE_NO_VAT = 'no_vat';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vendorCode")
     * @var string|null
     */
    public $vendorCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vatCode")
     * @var string|null
     */
    public $vatCode;

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
     * @Serializer\Type("float")
     * @var float|null
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $quantity;
}
