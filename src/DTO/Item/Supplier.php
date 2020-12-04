<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Item;

use JMS\Serializer\Annotation as Serializer;

class Supplier
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $inn;
}
