<?php


namespace MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;

class ShipmentOrderByExternalIdPatchRequest
{
    use RequestCore;

    public const PATH = '/v1/shipments/orders/external_id';
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

    /**
     * @Serializer\Type("array")
     * @var array
     */
    private $data;

    public function getPath(string $id = null): string
    {
        return null === $id
            ? self::PATH
            : self::PATH . '/' . $id;
    }
}
