<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\City;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

class GetCitiesRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/cities';

    /**
     * @var string|null
     * @Serializer\SerializedName("start")
     * @Serializer\Type("string")
     */
    public $start;
}