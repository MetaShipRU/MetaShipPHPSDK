<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentOrderPatchRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/orders';
    public const METHOD = 'PATCH';

    public const OP_REPLACE = 'replace';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $op;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $path;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    private $value;

    public function getPath(string $id = null): string
    {
        return null === $id
            ? self::PATH
            : self::PATH . '/' . $id;
    }
}
