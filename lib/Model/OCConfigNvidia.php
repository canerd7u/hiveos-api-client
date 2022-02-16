<?php
/**
 * OCConfigNvidia
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
 * OCConfigNvidia Class Doc Comment
 *
 * @category Class
 * @description Options for Nvidia cards
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OCConfigNvidia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OCConfigNvidia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'core_clock' => 'string',
        'mem_clock' => 'string',
        'fan_speed' => 'string',
        'power_limit' => 'string',
        'logo_off' => 'bool',
        'ohgodapill' => 'bool',
        'ohgodapill_start_timeout' => 'int',
        'ohgodapill_args' => 'string',
        'running_delay' => 'int',
        'reduce_power' => 'bool',
        'force_p0' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'core_clock' => null,
        'mem_clock' => null,
        'fan_speed' => null,
        'power_limit' => null,
        'logo_off' => null,
        'ohgodapill' => null,
        'ohgodapill_start_timeout' => null,
        'ohgodapill_args' => null,
        'running_delay' => null,
        'reduce_power' => null,
        'force_p0' => null
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
        'mem_clock' => 'mem_clock',
        'fan_speed' => 'fan_speed',
        'power_limit' => 'power_limit',
        'logo_off' => 'logo_off',
        'ohgodapill' => 'ohgodapill',
        'ohgodapill_start_timeout' => 'ohgodapill_start_timeout',
        'ohgodapill_args' => 'ohgodapill_args',
        'running_delay' => 'running_delay',
        'reduce_power' => 'reduce_power',
        'force_p0' => 'force_p0'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'core_clock' => 'setCoreClock',
        'mem_clock' => 'setMemClock',
        'fan_speed' => 'setFanSpeed',
        'power_limit' => 'setPowerLimit',
        'logo_off' => 'setLogoOff',
        'ohgodapill' => 'setOhgodapill',
        'ohgodapill_start_timeout' => 'setOhgodapillStartTimeout',
        'ohgodapill_args' => 'setOhgodapillArgs',
        'running_delay' => 'setRunningDelay',
        'reduce_power' => 'setReducePower',
        'force_p0' => 'setForceP0'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'core_clock' => 'getCoreClock',
        'mem_clock' => 'getMemClock',
        'fan_speed' => 'getFanSpeed',
        'power_limit' => 'getPowerLimit',
        'logo_off' => 'getLogoOff',
        'ohgodapill' => 'getOhgodapill',
        'ohgodapill_start_timeout' => 'getOhgodapillStartTimeout',
        'ohgodapill_args' => 'getOhgodapillArgs',
        'running_delay' => 'getRunningDelay',
        'reduce_power' => 'getReducePower',
        'force_p0' => 'getForceP0'
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
        $this->container['mem_clock'] = isset($data['mem_clock']) ? $data['mem_clock'] : null;
        $this->container['fan_speed'] = isset($data['fan_speed']) ? $data['fan_speed'] : null;
        $this->container['power_limit'] = isset($data['power_limit']) ? $data['power_limit'] : null;
        $this->container['logo_off'] = isset($data['logo_off']) ? $data['logo_off'] : null;
        $this->container['ohgodapill'] = isset($data['ohgodapill']) ? $data['ohgodapill'] : null;
        $this->container['ohgodapill_start_timeout'] = isset($data['ohgodapill_start_timeout']) ? $data['ohgodapill_start_timeout'] : null;
        $this->container['ohgodapill_args'] = isset($data['ohgodapill_args']) ? $data['ohgodapill_args'] : null;
        $this->container['running_delay'] = isset($data['running_delay']) ? $data['running_delay'] : null;
        $this->container['reduce_power'] = isset($data['reduce_power']) ? $data['reduce_power'] : null;
        $this->container['force_p0'] = isset($data['force_p0']) ? $data['force_p0'] : null;
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
     * @param string $core_clock +Core Clock (Mhz)
     *
     * @return $this
     */
    public function setCoreClock($core_clock)
    {
        $this->container['core_clock'] = $core_clock;

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
     * @param string $mem_clock +Memory (Mhz)
     *
     * @return $this
     */
    public function setMemClock($mem_clock)
    {
        $this->container['mem_clock'] = $mem_clock;

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
     * @param string $fan_speed Fan (%) (0 for auto)
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
     * Gets logo_off
     *
     * @return bool
     */
    public function getLogoOff()
    {
        return $this->container['logo_off'];
    }

    /**
     * Sets logo_off
     *
     * @param bool $logo_off Turn Off LEDs (may not work on some cards)
     *
     * @return $this
     */
    public function setLogoOff($logo_off)
    {
        $this->container['logo_off'] = $logo_off;

        return $this;
    }

    /**
     * Gets ohgodapill
     *
     * @return bool
     */
    public function getOhgodapill()
    {
        return $this->container['ohgodapill'];
    }

    /**
     * Sets ohgodapill
     *
     * @param bool $ohgodapill Enable OhGodAnETHlargementPill
     *
     * @return $this
     */
    public function setOhgodapill($ohgodapill)
    {
        $this->container['ohgodapill'] = $ohgodapill;

        return $this;
    }

    /**
     * Gets ohgodapill_start_timeout
     *
     * @return int
     */
    public function getOhgodapillStartTimeout()
    {
        return $this->container['ohgodapill_start_timeout'];
    }

    /**
     * Sets ohgodapill_start_timeout
     *
     * @param int $ohgodapill_start_timeout Timeout to start OhGodAnETHlargementPill, seconds
     *
     * @return $this
     */
    public function setOhgodapillStartTimeout($ohgodapill_start_timeout)
    {
        $this->container['ohgodapill_start_timeout'] = $ohgodapill_start_timeout;

        return $this;
    }

    /**
     * Gets ohgodapill_args
     *
     * @return string
     */
    public function getOhgodapillArgs()
    {
        return $this->container['ohgodapill_args'];
    }

    /**
     * Sets ohgodapill_args
     *
     * @param string $ohgodapill_args Arguments for OhGodAnETHlargementPill
     *
     * @return $this
     */
    public function setOhgodapillArgs($ohgodapill_args)
    {
        $this->container['ohgodapill_args'] = $ohgodapill_args;

        return $this;
    }

    /**
     * Gets running_delay
     *
     * @return int
     */
    public function getRunningDelay()
    {
        return $this->container['running_delay'];
    }

    /**
     * Sets running_delay
     *
     * @param int $running_delay Delay before applying overclock, seconds
     *
     * @return $this
     */
    public function setRunningDelay($running_delay)
    {
        $this->container['running_delay'] = $running_delay;

        return $this;
    }

    /**
     * Gets reduce_power
     *
     * @return bool
     */
    public function getReducePower()
    {
        return $this->container['reduce_power'];
    }

    /**
     * Sets reduce_power
     *
     * @param bool $reduce_power Reduce power usage in idle state (1000 series)
     *
     * @return $this
     */
    public function setReducePower($reduce_power)
    {
        $this->container['reduce_power'] = $reduce_power;

        return $this;
    }

    /**
     * Gets force_p0
     *
     * @return bool
     */
    public function getForceP0()
    {
        return $this->container['force_p0'];
    }

    /**
     * Sets force_p0
     *
     * @param bool $force_p0 Force P0 power state
     *
     * @return $this
     */
    public function setForceP0($force_p0)
    {
        $this->container['force_p0'] = $force_p0;

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

