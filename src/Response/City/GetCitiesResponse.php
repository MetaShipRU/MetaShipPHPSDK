<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\City;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\City\City;

class GetCitiesResponse
{
    /**
     * @var City[]
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\City\City>")
     */
    public $city;
}