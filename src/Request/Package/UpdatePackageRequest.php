<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Package;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class UpdatePackageRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Package
 */
class UpdatePackageRequest implements IRequest
{
    use RequestCore;

    const PATH = '/v1/packages';
    const METHOD = 'PUT';

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("id")
     * @var string
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     * @var string
     */
    public $status;
}
