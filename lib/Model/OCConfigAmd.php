<?php
/**
 * OCConfigAmd
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
 * OCConfigAmd Class Doc Comment
 *
 * @category Class
 * @description Options for AMD cards
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OCConfigAmd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OCConfigAmd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'core_clock' => 'string',
        'core_state' => 'string',
        'core_vddc' => 'string',
        'mem_clock' => 'string',
        'mem_state' => 'string',
        'mem_mvdd' => 'string',
        'mem_vddci' => 'string',
        'fan_speed' => 'string',
        'power_limit' => 'string',
        'tref_timing' => 'string',
        'soc_clock' => 'string',
        'soc_vddmax' => 'string',
        'aggressive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'core_clock' => null,
        'core_state' => null,
        'core_vddc' => null,
        'mem_clock' => null,
        'mem_state' => null,
        'mem_mvdd' => null,
        'mem_vddci' => null,
        'fan_speed' => null,
        'power_limit' => null,
        'tref_timing' => null,
        'soc_clock' => null,
        'soc_vddmax' => null,
        'aggressive' => null
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
        'core_clock' => 'core_clock',
        'core_state' => 'core_state',
        'core_vddc' => 'core_vddc',
        'mem_clock' => 'mem_clock',
        'mem_state' => 'mem_state',
        'mem_mvdd' => 'mem_mvdd',
        'mem_vddci' => 'mem_vddci',
        'fan_speed' => 'fan_speed',
        'power_limit' => 'power_limit',
        'tref_timing' => 'tref_timing',
        'soc_clock' => 'soc_clock',
        'soc_vddmax' => 'soc_vddmax',
        'aggressive' => 'aggressive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'core_clock' => 'setCoreClock',
        'core_state' => 'setCoreState',
        'core_vddc' => 'setCoreVddc',
        'mem_clock' => 'setMemClock',
        'mem_state' => 'setMemState',
        'mem_mvdd' => 'setMemMvdd',
        'mem_vddci' => 'setMemVddci',
        'fan_speed' => 'setFanSpeed',
        'power_limit' => 'setPowerLimit',
        'tref_timing' => 'setTrefTiming',
        'soc_clock' => 'setSocClock',
        'soc_vddmax' => 'setSocVddmax',
        'aggressive' => 'setAggressive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'core_clock' => 'getCoreClock',
        'core_state' => 'getCoreState',
        'core_vddc' => 'getCoreVddc',
        'mem_clock' => 'getMemClock',
        'mem_state' => 'getMemState',
        'mem_mvdd' => 'getMemMvdd',
        'mem_vddci' => 'getMemVddci',
        'fan_speed' => 'getFanSpeed',
        'power_limit' => 'getPowerLimit',
        'tref_timing' => 'getTrefTiming',
        'soc_clock' => 'getSocClock',
        'soc_vddmax' => 'getSocVddmax',
        'aggressive' => 'getAggressive'
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
        $this->container['core_clock'] = isset($data['core_clock']) ? $data['core_clock'] : null;
        $this->container['core_state'] = isset($data['core_state']) ? $data['core_state'] : null;
        $this->container['core_vddc'] = isset($data['core_vddc']) ? $data['core_vddc'] : null;
        $this->container['mem_clock'] = isset($data['mem_clock']) ? $data['mem_clock'] : null;
        $this->container['mem_state'] = isset($data['mem_state']) ? $data['mem_state'] : null;
        $this->container['mem_mvdd'] = isset($data['mem_mvdd']) ? $data['mem_mvdd'] : null;
        $this->container['mem_vddci'] = isset($data['mem_vddci']) ? $data['mem_vddci'] : null;
        $this->container['fan_speed'] = isset($data['fan_speed']) ? $data['fan_speed'] : null;
        $this->container['power_limit'] = isset($data['power_limit']) ? $data['power_limit'] : null;
        $this->container['tref_timing'] = isset($data['tref_timing']) ? $data['tref_timing'] : null;
        $this->container['soc_clock'] = isset($data['soc_clock']) ? $data['soc_clock'] : null;
        $this->container['soc_vddmax'] = isset($data['soc_vddmax']) ? $data['soc_vddmax'] : null;
        $this->container['aggressive'] = isset($data['aggressive']) ? $data['aggressive'] : null;
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
     * Gets core_clock
     *
     * @return string
     */
    public function getCoreClock()
    {
        return $this->container['core_clock'];
    }

    /**
     * Sets core_clock
     *
     * @param string $core_clock Core Clock (Mhz)
     *
     * @return $this
     */
    public function setCoreClock($core_clock)
    {
        $this->container['core_clock'] = $core_clock;

        return $this;
    }

    /**
     * Gets core_state
     *
     * @return string
     */
    public function getCoreState()
    {
        return $this->container['core_state'];
    }

    /**
     * Sets core_state
     *
     * @param string $core_state Core State (Index)
     *
     * @return $this
     */
    public function setCoreState($core_state)
    {
        $this->container['core_state'] = $core_state;

        return $this;
    }

    /**
     * Gets core_vddc
     *
     * @return string
     */
    public function getCoreVddc()
    {
        return $this->container['core_vddc'];
    }

    /**
     * Sets core_vddc
     *
     * @param string $core_vddc Core Voltage (mV)
     *
     * @return $this
     */
    public function setCoreVddc($core_vddc)
    {
        $this->container['core_vddc'] = $core_vddc;

        return $this;
    }

    /**
     * Gets mem_clock
     *
     * @return string
     */
    public function getMemClock()
    {
        return $this->container['mem_clock'];
    }

    /**
     * Sets mem_clock
     *
     * @param string $mem_clock Memory Clock (Mhz)
     *
     * @return $this
     */
    public function setMemClock($mem_clock)
    {
        $this->container['mem_clock'] = $mem_clock;

        return $this;
    }

    /**
     * Gets mem_state
     *
     * @return string
     */
    public function getMemState()
    {
        return $this->container['mem_state'];
    }

    /**
     * Sets mem_state
     *
     * @param string $mem_state Mem State (Index)
     *
     * @return $this
     */
    public function setMemState($mem_state)
    {
        $this->container['mem_state'] = $mem_state;

        return $this;
    }

    /**
     * Gets mem_mvdd
     *
     * @return string
     */
    public function getMemMvdd()
    {
        return $this->container['mem_mvdd'];
    }

    /**
     * Sets mem_mvdd
     *
     * @param string $mem_mvdd Memory voltage (mV)
     *
     * @return $this
     */
    public function setMemMvdd($mem_mvdd)
    {
        $this->container['mem_mvdd'] = $mem_mvdd;

        return $this;
    }

    /**
     * Gets mem_vddci
     *
     * @return string
     */
    public function getMemVddci()
    {
        return $this->container['mem_vddci'];
    }

    /**
     * Sets mem_vddci
     *
     * @param string $mem_vddci Memory bus voltage (mV)
     *
     * @return $this
     */
    public function setMemVddci($mem_vddci)
    {
        $this->container['mem_vddci'] = $mem_vddci;

        return $this;
    }

    /**
     * Gets fan_speed
     *
     * @return string
     */
    public function getFanSpeed()
    {
        return $this->container['fan_speed'];
    }

    /**
     * Sets fan_speed
     *
     * @param string $fan_speed Fan (%)
     *
     * @return $this
     */
    public function setFanSpeed($fan_speed)
    {
        $this->container['fan_speed'] = $fan_speed;

        return $this;
    }

    /**
     * Gets power_limit
     *
     * @return string
     */
    public function getPowerLimit()
    {
        return $this->container['power_limit'];
    }

    /**
     * Sets power_limit
     *
     * @param string $power_limit Power Limit (W) (0 for stock value)
     *
     * @return $this
     */
    public function setPowerLimit($power_limit)
    {
        $this->container['power_limit'] = $power_limit;

        return $this;
    }

    /**
     * Gets tref_timing
     *
     * @return string
     */
    public function getTrefTiming()
    {
        return $this->container['tref_timing'];
    }

    /**
     * Sets tref_timing
     *
     * @param string $tref_timing tref_timing
     *
     * @return $this
     */
    public function setTrefTiming($tref_timing)
    {
        $this->container['tref_timing'] = $tref_timing;

        return $this;
    }

    /**
     * Gets soc_clock
     *
     * @return string
     */
    public function getSocClock()
    {
        return $this->container['soc_clock'];
    }

    /**
     * Sets soc_clock
     *
     * @param string $soc_clock SoC clock (MHz)
     *
     * @return $this
     */
    public function setSocClock($soc_clock)
    {
        $this->container['soc_clock'] = $soc_clock;

        return $this;
    }

    /**
     * Gets soc_vddmax
     *
     * @return string
     */
    public function getSocVddmax()
    {
        return $this->container['soc_vddmax'];
    }

    /**
     * Sets soc_vddmax
     *
     * @param string $soc_vddmax SoC maximum voltage (mV)
     *
     * @return $this
     */
    public function setSocVddmax($soc_vddmax)
    {
        $this->container['soc_vddmax'] = $soc_vddmax;

        return $this;
    }

    /**
     * Gets aggressive
     *
     * @return bool
     */
    public function getAggressive()
    {
        return $this->container['aggressive'];
    }

    /**
     * Sets aggressive
     *
     * @param bool $aggressive Aggressive undervolting (set OC for each DPM state)
     *
     * @return $this
     */
    public function setAggressive($aggressive)
    {
        $this->container['aggressive'] = $aggressive;

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


