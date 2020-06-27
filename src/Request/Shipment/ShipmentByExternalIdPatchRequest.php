<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\Request\Shipment;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

final class ShipmentByExternalIdPatchRequest implements IRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/external_id';
    public const METHOD = 'PATCH';

    public const OP_REPLACE = 'replace';

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $op;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $path;

    /**
     * @Serializer\Type("string")
     *
     * @var string|null
     */
    private $value;

    public function getPath(string $id = null): string
    {
        return null === $id
            ? self::PATH
            : self::PATH . '/' . $id;
    }
}
