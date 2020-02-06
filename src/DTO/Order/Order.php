<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Item\Item;
use MetaShipRU\MetaShipPHPSDK\DTO\Place\Place;
use MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient;
use MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatus;
use MetaShipRU\MetaShipPHPSDK\DTO\Transaction\Transaction;

/**
 * Class Order
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Order
 */
class Order
{
    const DELIVERY_TYPE_COURIER = 'courier';
    const DELIVERY_TYPE_PICKUP = 'pickup';
    const DELIVERY_TYPE_POST = 'post';

    const PAYMENT_METHOD_CASH = 0;
    const PAYMENT_METHOD_CARD = 1;
    const PAYMENT_METHOD_PREPAID = 2;

    const STATUS_DRAFT = 'draft';
    const STATUS_CREATED = 'created';
    const STATUS_PENDING = 'pending';
    const STATUS_WAIT_DELIVERY = 'wait_delivery';

    const STATUS_DELIVERY_PREPARED = 'delivery_prepared';
    const STATUS_DELIVERY_PREPARED_TO_SEND = 'delivery_prepared_to_send';
    const STATUS_DELIVERY_INTRANSIT = 'delivery_intransit';
    const STATUS_DELIVERY_ARRIVED = 'delivery_arrived';
    const STATUS_DELIVERY_STORAGE_PERIOD_EXPIRED = 'delivery_storage_period_expired';

    const STATUS_INTRANSIT = 'intransit';
    const STATUS_ARRIVED = 'arrived';
    const STATUS_STORED = 'stored';
    const STATUS_TRANSPORTATION_RECIPIENT = 'transportation_recipient';
    const STATUS_TRANSMITTED_RECIPIENT = 'transmitted_recipient';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_NOT_RECEIVED = 'not_received';

    const STATUS_EXPECTED_FULL_RETURN = 'expected_full_return';
    const STATUS_EXPECTED_PARTIAL_RETURN = 'expected_partial_return';
    const STATUS_RETURN_ARRIVED_WAREHOUSE = 'return_arrived_warehouse';
    const STATUS_RETURN_COMPLETED = 'return_completed';
    const STATUS_RETURN_TRANSMITTED_FULFILLMENT = 'return_transmitted_fulfillment';
    const STATUS_DELIVERY_ATTEMPT_FAILED = 'delivery_attempt_failed';

    const STATUS_DELIVERY_CANCELLED = 'delivery_cancelled';
    const STATUS_DELIVERY_DATE_CHANGED = 'delivery_date_changed';
    const STATUS_RECIPIENT_DATE_CHANGED = 'recipient_date_changed';
    const STATUS_SHOP_DATE_CHANGED = 'shop_date_changed';

    const STATUS_UNKNOWN = 'unknown';
    const STATUS_ERROR = 'error';
    const STATUS_DELETED = 'deleted';
    const STATUS_CANCELLED = 'cancelled';

    const STATUSES_TITLE = [
        self::STATUS_DRAFT => 'Заказ черновик',
        self::STATUS_PENDING => 'Заказ создан в информационной системе службы',
        self::STATUS_WAIT_DELIVERY => 'Заказ подготовлен к отправке',
        self::STATUS_DELIVERY_PREPARED => 'Заказ на складе службы',
        self::STATUS_DELIVERY_PREPARED_TO_SEND => 'Заказ на складе СД, готовится к передаче на доставку',
        self::STATUS_DELIVERY_INTRANSIT => 'Заказ доставляется в филиал СД',
        self::STATUS_DELIVERY_ARRIVED => 'Заказ прибыл в филиал СД',
        self::STATUS_DELIVERY_STORAGE_PERIOD_EXPIRED => 'Заказ в филиале СД, срок его хранения закончился',
        self::STATUS_SHOP_DATE_CHANGED => 'Доставка заказа перенесена по инициативе магазина',
        self::STATUS_INTRANSIT => 'Заказ доставляется',
        self::STATUS_ARRIVED => 'Заказ в городе получателя',
        self::STATUS_STORED => 'Заказ поступил в пункт выдачи',
        self::STATUS_TRANSPORTATION_RECIPIENT => 'Заказ доставляется получателю',
        self::STATUS_TRANSMITTED_RECIPIENT => 'Заказ передан получателю',
        self::STATUS_EXPECTED_FULL_RETURN => 'Заказ готовится к возврату',
        self::STATUS_EXPECTED_PARTIAL_RETURN => 'Заказ готовится к частичному возврату',
        self::STATUS_RETURN_ARRIVED_WAREHOUSE => 'Заказ возвращен на склад службы',
        self::STATUS_RETURN_COMPLETED => 'Заказ возвращен в интернет-магазин',
        self::STATUS_RETURN_TRANSMITTED_FULFILLMENT => 'Заказ возвращен на склад сортировочного центра',
        self::STATUS_DELIVERY_ATTEMPT_FAILED => 'Неудачная попытка вручения заказа получателю',
        self::STATUS_ERROR => 'Заказ создан с ошибкой',
        self::STATUS_DELIVERED => 'Заказ доставлен',
        self::STATUS_DELETED => 'Заказ удален',
        self::STATUS_DELIVERY_CANCELLED => 'Заказ отменен службой',
        self::STATUS_CANCELLED => 'Заказ отменен',
        self::STATUS_DELIVERY_DATE_CHANGED => 'Дата заказа перенесена по просьбе службы',
        self::STATUS_RECIPIENT_DATE_CHANGED => 'Дата заказа перенесена по просьбе получателя',
        self::STATUS_NOT_RECEIVED => 'Заказ не вручен'
    ];

    /**
     * @Serializer\Type("integer")
     * @var int|null
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("trackNumber")
     * @var string|null
     */
    public $trackNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fulfillmentServiceNumber")
     * @var string|null
     */
    public $fulfillmentServiceNumber;

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
     * @Serializer\Type("float")
     * @Serializer\SerializedName("deliveryCost")
     * @var float|null
     */
    public $deliveryCost;

    /**
     * @Serializer\SerializedName("totalCost")
     * @Serializer\Type("float")
     * @var float|null
     */
    public $totalCost;

    /**
     * @Serializer\SerializedName("paymentSum")
     * @Serializer\Type("float")
     * @var float|null
     */
    public $paymentSum;

    /**
     * @Serializer\SerializedName("assessedValue")
     * @Serializer\Type("float")
     * @var float|null
     */
    public $assessedValue;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("statusName")
     * @var string|null
     */
    public $statusName;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $status;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("desiredDeliveryDate")
     * @var string
     */
    public $desiredDeliveryDate;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("expectedDeliveryDate")
     * @var string|null
     */
    public $expectedDeliveryDate;

    /**
     * @Serializer\SerializedName("timeFrom")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $timeFrom;

    /**
     * @Serializer\SerializedName("timeTo")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $timeTo;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $created;

    /**
     * @Serializer\SerializedName("externalCreated")
     * @Serializer\Type("string")
     * @var string|null
     */
    public $externalCreated;

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
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Place\Place>")
     * @var Place[]
     */
    public $places;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\OrderStatus>")
     * @Serializer\SerializedName("statusHistory")
     * @var OrderStatus[]
     */
    public $statusHistory;

    /**
     * @var float|null
     * @Serializer\Type("float")
     */
    public $weight;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    public $width;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    public $length;

    /**
     * @var int|null
     * @Serializer\Type("integer")
     */
    public $height;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("additionalServiceNumber")
     * @var string|null
     */
    public $additionalServiceNumber;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Transaction\Transaction>")
     * @var Transaction[]
     */
    public $transactions;
}
