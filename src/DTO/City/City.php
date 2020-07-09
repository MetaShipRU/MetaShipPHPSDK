<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\City;

use JMS\Serializer\Annotation as Serializer;

class City
{
    /**
     * @var int
     * @Serializer\SerializedName("cityId")
     * @Serializer\Type("integer")
     */
    public $cityId;

    /**
     * @var string
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    public $name;

    /**
     * @var string
     * @Serializer\SerializedName("fullName")
     * @Serializer\Type("string")
     */
    public $fullName;

    /**
     * @var string
     * @Serializer\SerializedName("region")
     * @Serializer\Type("string")
     */
    public $region;

    /**
     * @var string
     * @Serializer\SerializedName("district")
     * @Serializer\Type("string")
     */
    public $district;

    /**
     * @var string
     * @Serializer\SerializedName("prefix")
     * @Serializer\Type("string")
     */
    public $prefix;

    /**
     * @var string
     * @Serializer\SerializedName("kladrId")
     * @Serializer\Type("string")
     */
    public $kladrId;

    /**
     * @var string
     * @Serializer\SerializedName("fiasId")
     * @Serializer\Type("string")
     */
    public $fiasId;

    /**
     * @var string
     * @Serializer\SerializedName("combinedName")
     * @Serializer\Type("string")
     */
    public $combinedName;

    /**
     * @var array
     * @Serializer\SerializedName("stations")
     * @Serializer\Type("array<string>")
     */
    public $stations;
}