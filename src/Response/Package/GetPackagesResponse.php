<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Package;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Package\Package;

/**
 * Class GetPackagesResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Package
 */
class GetPackagesResponse
{
    /**
     * @var Package[]
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Package\Package>")
     */
    public $packages;
}
