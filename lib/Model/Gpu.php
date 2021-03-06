<?php
/**
 * Gpu
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hive OS API
 *
 * App API for Hive OS 2.0
 *
 * OpenAPI spec version: 2.1-beta
 * Contact: brain@hiveos.farm
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Gpu Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Gpu implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Gpu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bus_id' => 'string',
        'bus_number' => 'int',
        'brand' => 'string',
        'model' => 'string',
        'short_name' => 'string',
        'details' => 'object',
        'power_limit' => 'object',
        'index' => 'int',
        'stats' => '\Swagger\Client\Model\GpuStats',
        'flashing_state' => '\Swagger\Client\Model\GpuFlashingState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bus_id' => null,
        'bus_number' => null,
        'brand' => null,
        'model' => null,
        'short_name' => null,
        'details' => null,
        'power_limit' => null,
        'index' => null,
        'stats' => null,
        'flashing_state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bus_id' => 'bus_id',
        'bus_number' => 'bus_number',
        'brand' => 'brand',
        'model' => 'model',
        'short_name' => 'short_name',
        'details' => 'details',
        'power_limit' => 'power_limit',
        'index' => 'index',
        'stats' => 'stats',
        'flashing_state' => 'flashing_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bus_id' => 'setBusId',
        'bus_number' => 'setBusNumber',
        'brand' => 'setBrand',
        'model' => 'setModel',
        'short_name' => 'setShortName',
        'details' => 'setDetails',
        'power_limit' => 'setPowerLimit',
        'index' => 'setIndex',
        'stats' => 'setStats',
        'flashing_state' => 'setFlashingState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bus_id' => 'getBusId',
        'bus_number' => 'getBusNumber',
        'brand' => 'getBrand',
        'model' => 'getModel',
        'short_name' => 'getShortName',
        'details' => 'getDetails',
        'power_limit' => 'getPowerLimit',
        'index' => 'getIndex',
        'stats' => 'getStats',
        'flashing_state' => 'getFlashingState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bus_id'] = isset($data['bus_id']) ? $data['bus_id'] : null;
        $this->container['bus_number'] = isset($data['bus_number']) ? $data['bus_number'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['power_limit'] = isset($data['power_limit']) ? $data['power_limit'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
        $this->container['flashing_state'] = isset($data['flashing_state']) ? $data['flashing_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets bus_id
     *
     * @return string
     */
    public function getBusId()
    {
        return $this->container['bus_id'];
    }

    /**
     * Sets bus_id
     *
     * @param string $bus_id GPU bus ID
     *
     * @return $this
     */
    public function setBusId($bus_id)
    {
        $this->container['bus_id'] = $bus_id;

        return $this;
    }

    /**
     * Gets bus_number
     *
     * @return int
     */
    public function getBusNumber()
    {
        return $this->container['bus_number'];
    }

    /**
     * Sets bus_number
     *
     * @param int $bus_number GPU bus number
     *
     * @return $this
     */
    public function setBusNumber($bus_number)
    {
        $this->container['bus_number'] = $bus_number;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Brand name: amd, nvidia, internal
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model Model name
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string $short_name Model short name
     *
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets details
     *
     * @return object
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param object $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets power_limit
     *
     * @return object
     */
    public function getPowerLimit()
    {
        return $this->container['power_limit'];
    }

    /**
     * Sets power_limit
     *
     * @param object $power_limit power_limit
     *
     * @return $this
     */
    public function setPowerLimit($power_limit)
    {
        $this->container['power_limit'] = $power_limit;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Index on rig
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \Swagger\Client\Model\GpuStats
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \Swagger\Client\Model\GpuStats $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

        return $this;
    }

    /**
     * Gets flashing_state
     *
     * @return \Swagger\Client\Model\GpuFlashingState
     */
    public function getFlashingState()
    {
        return $this->container['flashing_state'];
    }

    /**
     * Sets flashing_state
     *
     * @param \Swagger\Client\Model\GpuFlashingState $flashing_state flashing_state
     *
     * @return $this
     */
    public function setFlashingState($flashing_state)
    {
        $this->container['flashing_state'] = $flashing_state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


