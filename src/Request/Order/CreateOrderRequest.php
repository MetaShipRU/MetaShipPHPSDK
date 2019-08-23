<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Item\CreateItemRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Recipient\CreateRecipientRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CreateOrderRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Order
 */
class CreateOrderRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'POST';
    const PATH = '/v1/orders';

    /** @var string Вскрытие заказа */
    const SERVICE_OPEN = 'open';
    /** @var string Дополнительный звонок клиенту */
    const SERVICE_CALL = 'call';
    /** @var string Возврат документов по заказу */
    const SERVICE_RETURN_DOCS = 'return_docs';
    /** @var string Частичный выкуп */
    const SERVICE_PARTIAL_BUY = 'partial_buy';
    /** @var string Примерка */
    const SERVICE_DRESS_FITTING = 'dress_fitting';
    /** @var string Подъем груза */
    const SERVICE_LIFTING = 'lifting';
    /** @var string Обмен товара на другой */
    const SERVICE_CHANGE = 'change';
    /** @var string SMS информирование */
    const SERVICE_SMS = 'sms';
    /** @var string Возврату не подлежит */
    const SERVICE_NO_RETURN = 'no_return';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $length;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $shopId;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $warehouseId;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $width;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $height;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string
     */
    public $deliveryName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceCode")
     * @var string
     */
    public $shopServiceCode;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("assessedValue")
     * @var float
     */
    public $assessedValue;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("paymentSum")
     * @var float
     */
    public $paymentSum;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     * @var string
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryType")
     * @var string
     */
    public $deliveryType;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("deliveryCost")
     * @var float
     */
    public $deliveryCost;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("prepaidValue")
     * @var float
     */
    public $prepaidValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tariffId")
     * @var float
     */
    public $tariffId;

    /**
     * @Serializer\Type("array<string>")
     *
     * @var array
     */
    public $services;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\Request\Recipient\CreateRecipientRequest")
     * @var CreateRecipientRequest
     */
    public $recipient;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\Request\Item\CreateItemRequest>")
     * @var CreateItemRequest[]
     */
    public $items;
}