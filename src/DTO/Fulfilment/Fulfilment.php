<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Fulfilment;

use JMS\Serializer\Annotation as Serializer;

final class Fulfilment
{
    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $total;

    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $rest;

    /**
     * @Serializer\Type("integer")
     *
     * @var int|null
     */
    private $waiting;
}
