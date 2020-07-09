<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Stock;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;
/**
 * Class CreateStockRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Stock
 */
class CreateStockRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/stocks';
    const METHOD = 'POST';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shop")
     * @var string
     */
    public $shop;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("delivery")
     * @var string
     */
    public $delivery;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("externalId")
     * @var string
     */
    public $externalId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("productCode")
     * @var string
     */
    public $productCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("stockType")
     * @var string
     */
    public $stockType;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("quantity")
     * @var int
     */
    public $quantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("storageCode")
     * @var string
     */
    public $storageCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     * @var string
     */
    public $status;

}
