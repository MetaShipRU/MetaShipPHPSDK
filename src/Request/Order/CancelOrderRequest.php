<?php

declare(strict_types=1);


namespace MetaShipRU\MetaShipPHPSDK\Request\Order;


use JMS\Serializer\Annotation as Serializer;

class CancelOrderRequest
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     * @var string|null
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string|null
     */
    public $deliveryName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceCode")
     * @var string|null
     */
    public $shopServiceCode;
}
