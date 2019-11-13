<?php

declare(strict_types=1);

namespace MetaShipRU\MetaShipPHPSDK\DTO\Transaction;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Transaction
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Transaction
 */
final class Transaction
{
    private const DATA_TYPE__DELIVERY = 'DELIVERY';
    private const DATA_TYPE__UNKNOWN = 'UNKNOWN';

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $id;

    /**
     * @Serializer\SerializedName("dateTime")
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $dateTime;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $type;

    /**
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $amount;

    /**
     * @Serializer\Type("array")
     *
     * @var array
     */
    public $data;
}
