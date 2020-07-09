<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Stock;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Stock
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Stock
 */
class Stock
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalId")
     */
    public $externalId;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("productCode")
     */
    public $productCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("storageCode")
     */
    public $storageCode;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("stockType")
     */
    public $stockType;

    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("quantity")
     */
    public $quantity;
}
