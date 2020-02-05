<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Documents;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AcceptanceResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Documents
 */
class AcceptanceResponse
{
    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $resource;
}
