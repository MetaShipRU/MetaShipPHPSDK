<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Documents;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class LabelResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Documents
 */
class LabelResponse
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
