<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Item\Item;
use MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient;
use MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatus;

/**
 * Class Order
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Order
 */
class Order
{
    const DELIVERY_TYPE_COURIER = 'courier';
    const DELIVERY_TYPE_PICKUP = 'pickup';
    const DELIVERY_TYPE_POST = 'post';

    const STATUS_DRAFT = 'draft';
    const STATUS_CREATED = 'created';
    const STATUS_PENDING = 'pending';
    const STATUS_WAIT_DELIVERY = 'wait_delivery';
    const STATUS_DELIVERY_PREPARED = 'delivery_prepared';
    const STATUS_DELIVERY_PREPARED_TO_SEND = 'delivery_prepared_to_send';
    const STATUS_INTRANSIT = 'intransit';
    const STATUS_ARRIVED = 'arrived';
    const STATUS_STORED = 'stored';
    const STATUS_TRANSPORTATION_RECIPIENT = 'transportation_recipient';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_EXPECTED_FULL_RETURN = 'expected_full_return';
    const STATUS_EXPECTED_PARTIAL_RETURN = 'expected_partial_return';
    const STATUS_RETURN_ARRIVED_WAREHOUSE = 'return_arrived_warehouse';
    const STATUS_RETURN_COMPLETED = 'return_completed';
    const STATUS_DELIVERY_CANCELLED = 'delivery_cancelled';

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_ERROR = 'error';
    const STATUS_DELETED = 'deleted';
    const STATUS_CANCELLED = 'cancelled';

    const STATUSES_TITLE = [
        self::STATUS_DRAFT => 'Заказ черновик',
        self::STATUS_CREATED => 'Заказ создан c полной информацией',
        self::STATUS_PENDING => 'Заказ создан в информационной системе службы',
        self::STATUS_WAIT_DELIVERY => 'Заказ подготовлен к отправке',
        self::STATUS_DELIVERY_PREPARED => 'Заказ на складе службы',
        self::STATUS_DELIVERY_PREPARED_TO_SEND => 'Заказ на складе службы, готов к отправке',
        self::STATUS_INTRANSIT => 'Заказ доставляется',
        self::STATUS_ARRIVED => 'Заказ в городе получателя',
        self::STATUS_STORED => 'Заказ поступил в пункт выдачи',
        self::STATUS_TRANSPORTATION_RECIPIENT => 'Заказ доставляется получателю',
        self::STATUS_EXPECTED_FULL_RETURN => 'Заказ готовится к возврату',
        self::STATUS_EXPECTED_PARTIAL_RETURN => 'Заказ готовится к частичному возврату',
        self::STATUS_RETURN_ARRIVED_WAREHOUSE => 'Заказ возвращен на склад службы',
        self::STATUS_RETURN_COMPLETED => 'Заказ возвращен в интернет-магазин',
        self::STATUS_ERROR => 'Заказ создан с ошибкой',
        self::STATUS_DELIVERED => 'Заказ доставлен',
        self::STATUS_DELETED => 'Заказ удален',
        self::STATUS_UNKNOWN => 'Неизвестный статус',
        self::STATUS_DELIVERY_CANCELLED => 'Заказ отменен службой',
        self::STATUS_CANCELLED => 'Заказ отменен'
    ];

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("trackNumber")
     * @var string
     */
    public $trackNumber;

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
     * @Serializer\SerializedName("totalCost")
     * @Serializer\Type("float")
     * @var float
     */
    public $totalCost;

    /**
     * @Serializer\SerializedName("paymentSum")
     * @Serializer\Type("float")
     * @var float
     */
    public $paymentSum;

    /**
     * @Serializer\SerializedName("assessedValue")
     * @Serializer\Type("float")
     * @var float
     */
    public $assessedValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("statusName")
     * @var string
     */
    public $statusName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $status;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("desiredDeliveryDate")
     * @var string
     */
    public $desiredDeliveryDate;

    /**
     * @Serializer\SerializedName("timeFrom")
     * @Serializer\Type("string")
     * @var string
     */
    public $timeFrom;

    /**
     * @Serializer\SerializedName("timeTo")
     * @Serializer\Type("string")
     * @var string
     */
    public $timeTo;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $created;

    /**
     * @Serializer\SerializedName("externalCreatedAt")
     * @Serializer\Type("string")
     * @var string
     */
    public $externalCreatedAt;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient")
     * @var Recipient
     */
    public $recipient;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Item\Item>")
     * @var Item[]
     */
    public $items;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatus>")
     * @Serializer\SerializedName("statusHistory")
     * @var OrderStatus[]
     */
    public $statusHistory;
}