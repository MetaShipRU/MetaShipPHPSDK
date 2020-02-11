<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Error;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrdersBatchErrorResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Error
 */
class OrdersBatchErrorResponse
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("additionalServiceNumber")
     * @var string|null
     */
    public $additionalServiceNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     * @var string|null
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $message;
}
