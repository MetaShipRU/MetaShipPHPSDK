<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Status;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StatusInfo
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Status
 */
class StatusInfo
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $code;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $description;
}
