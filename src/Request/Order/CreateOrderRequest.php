<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Place\Place;
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
     * @var int|null
     */
    public $length;

    /**
     * @Serializer\SerializedName("shopId")
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $shopId;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("warehouseId")
     * @var int|null
     */
    public $warehouseId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fulfillmentServiceNumber")
     * @var string|null
     */
    public $fulfillmentServiceNumber;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $width;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $volume;

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $height;

    /**
     * @Serializer\Type("float")
     * @var float|null
     */
    public $weight;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string|null
     */
    public $deliveryName;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $status;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopServiceCode")
     * @var string|null
     */
    public $shopServiceCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("warehouseServiceCode")
     * @var string
     */
    public $warehouseServiceCode;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("assessedValue")
     * @var float|null
     */
    public $assessedValue;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("paymentSum")
     * @var float
     */
    public $paymentSum;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("paymentMethod")
     * @var int|null
     */
    public $paymentMethod;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     * @var string|null
     */
    public $shopNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryType")
     * @var string|null
     */
    public $deliveryType;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("desiredDeliveryDate")
     * @var string|null
     */
    public $desiredDeliveryDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("expectedDeliveryDate")
     * @var string|null
     */
    public $expectedDeliveryDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeFrom")
     * @var string|null
     */
    public $timeFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("timeTo")
     * @var string
     */
    public $timeTo;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("deliveryCost")
     * @var float|null
     */
    public $deliveryCost;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("prepaidValue")
     * @var float|null
     */
    public $prepaidValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tariffId")
     * @var string|null
     */
    public $tariffId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shipmentDate")
     * @var string|null
     */
    public $shipmentDate;

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

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Place\Place>")
     * @var Place[]
     */
    public $places;

    /**
     * @Serializer\SerializedName("created")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $created;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("trackNumber")
     * @var string|null
     */
    public $trackNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("stockId")
     * @var string|null
     */
    public $stockId;
}
