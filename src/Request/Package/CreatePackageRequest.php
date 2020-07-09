<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Package;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;
/**
 * Class CreatePackageRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Package
 */
class CreatePackageRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/packages';
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
     * @Serializer\SerializedName("barcode")
     * @var string
     */
    public $barcode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     * @var string
     */
    public $status;
}
