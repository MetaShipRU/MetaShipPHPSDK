<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Status;

use MetaShipRU\MetaShipPHPSDK\DTO\Status\StatusInfo;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class StatusesInfoResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Status
 */
class StatusesInfoResponse
{
    /**
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\StatusInfo>")
     * @var StatusInfo[]
     */
    public $statusesInfo = [];
}
