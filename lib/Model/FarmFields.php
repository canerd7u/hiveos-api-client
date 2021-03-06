<?php
/**
 * FarmFields
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
 * FarmFields Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FarmFields implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FarmFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'timezone' => 'string',
        'gpu_red_temp' => 'int',
        'asic_red_temp' => 'int',
        'asic_red_board_temp' => 'float',
        'gpu_red_mem_temp' => 'float',
        'gpu_red_cpu_temp' => 'float',
        'gpu_red_fan' => 'int',
        'asic_red_fan' => 'int',
        'gpu_red_asr' => 'int',
        'asic_red_asr' => 'int',
        'gpu_red_la' => 'float',
        'asic_red_la' => 'float',
        'repo_urls' => 'string[]',
        'power_price' => 'float',
        'power_price_currency' => 'string',
        'charge_on_pool' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'timezone' => 'timezone',
        'gpu_red_temp' => null,
        'asic_red_temp' => null,
        'asic_red_board_temp' => null,
        'gpu_red_mem_temp' => null,
        'gpu_red_cpu_temp' => null,
        'gpu_red_fan' => null,
        'asic_red_fan' => null,
        'gpu_red_asr' => null,
        'asic_red_asr' => null,
        'gpu_red_la' => null,
        'asic_red_la' => null,
        'repo_urls' => 'url',
        'power_price' => null,
        'power_price_currency' => null,
        'charge_on_pool' => null
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
        'name' => 'name',
        'timezone' => 'timezone',
        'gpu_red_temp' => 'gpu_red_temp',
        'asic_red_temp' => 'asic_red_temp',
        'asic_red_board_temp' => 'asic_red_board_temp',
        'gpu_red_mem_temp' => 'gpu_red_mem_temp',
        'gpu_red_cpu_temp' => 'gpu_red_cpu_temp',
        'gpu_red_fan' => 'gpu_red_fan',
        'asic_red_fan' => 'asic_red_fan',
        'gpu_red_asr' => 'gpu_red_asr',
        'asic_red_asr' => 'asic_red_asr',
        'gpu_red_la' => 'gpu_red_la',
        'asic_red_la' => 'asic_red_la',
        'repo_urls' => 'repo_urls',
        'power_price' => 'power_price',
        'power_price_currency' => 'power_price_currency',
        'charge_on_pool' => 'charge_on_pool'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'timezone' => 'setTimezone',
        'gpu_red_temp' => 'setGpuRedTemp',
        'asic_red_temp' => 'setAsicRedTemp',
        'asic_red_board_temp' => 'setAsicRedBoardTemp',
        'gpu_red_mem_temp' => 'setGpuRedMemTemp',
        'gpu_red_cpu_temp' => 'setGpuRedCpuTemp',
        'gpu_red_fan' => 'setGpuRedFan',
        'asic_red_fan' => 'setAsicRedFan',
        'gpu_red_asr' => 'setGpuRedAsr',
        'asic_red_asr' => 'setAsicRedAsr',
        'gpu_red_la' => 'setGpuRedLa',
        'asic_red_la' => 'setAsicRedLa',
        'repo_urls' => 'setRepoUrls',
        'power_price' => 'setPowerPrice',
        'power_price_currency' => 'setPowerPriceCurrency',
        'charge_on_pool' => 'setChargeOnPool'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'timezone' => 'getTimezone',
        'gpu_red_temp' => 'getGpuRedTemp',
        'asic_red_temp' => 'getAsicRedTemp',
        'asic_red_board_temp' => 'getAsicRedBoardTemp',
        'gpu_red_mem_temp' => 'getGpuRedMemTemp',
        'gpu_red_cpu_temp' => 'getGpuRedCpuTemp',
        'gpu_red_fan' => 'getGpuRedFan',
        'asic_red_fan' => 'getAsicRedFan',
        'gpu_red_asr' => 'getGpuRedAsr',
        'asic_red_asr' => 'getAsicRedAsr',
        'gpu_red_la' => 'getGpuRedLa',
        'asic_red_la' => 'getAsicRedLa',
        'repo_urls' => 'getRepoUrls',
        'power_price' => 'getPowerPrice',
        'power_price_currency' => 'getPowerPriceCurrency',
        'charge_on_pool' => 'getChargeOnPool'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['gpu_red_temp'] = isset($data['gpu_red_temp']) ? $data['gpu_red_temp'] : null;
        $this->container['asic_red_temp'] = isset($data['asic_red_temp']) ? $data['asic_red_temp'] : null;
        $this->container['asic_red_board_temp'] = isset($data['asic_red_board_temp']) ? $data['asic_red_board_temp'] : null;
        $this->container['gpu_red_mem_temp'] = isset($data['gpu_red_mem_temp']) ? $data['gpu_red_mem_temp'] : null;
        $this->container['gpu_red_cpu_temp'] = isset($data['gpu_red_cpu_temp']) ? $data['gpu_red_cpu_temp'] : null;
        $this->container['gpu_red_fan'] = isset($data['gpu_red_fan']) ? $data['gpu_red_fan'] : null;
        $this->container['asic_red_fan'] = isset($data['asic_red_fan']) ? $data['asic_red_fan'] : null;
        $this->container['gpu_red_asr'] = isset($data['gpu_red_asr']) ? $data['gpu_red_asr'] : null;
        $this->container['asic_red_asr'] = isset($data['asic_red_asr']) ? $data['asic_red_asr'] : null;
        $this->container['gpu_red_la'] = isset($data['gpu_red_la']) ? $data['gpu_red_la'] : null;
        $this->container['asic_red_la'] = isset($data['asic_red_la']) ? $data['asic_red_la'] : null;
        $this->container['repo_urls'] = isset($data['repo_urls']) ? $data['repo_urls'] : null;
        $this->container['power_price'] = isset($data['power_price']) ? $data['power_price'] : null;
        $this->container['power_price_currency'] = isset($data['power_price_currency']) ? $data['power_price_currency'] : null;
        $this->container['charge_on_pool'] = isset($data['charge_on_pool']) ? $data['charge_on_pool'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Display name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling FarmFields., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Time zone for all farm workers. Default is account's time zone.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets gpu_red_temp
     *
     * @return int
     */
    public function getGpuRedTemp()
    {
        return $this->container['gpu_red_temp'];
    }

    /**
     * Sets gpu_red_temp
     *
     * @param int $gpu_red_temp Red Temperature for GPU workers, ??C
     *
     * @return $this
     */
    public function setGpuRedTemp($gpu_red_temp)
    {
        $this->container['gpu_red_temp'] = $gpu_red_temp;

        return $this;
    }

    /**
     * Gets asic_red_temp
     *
     * @return int
     */
    public function getAsicRedTemp()
    {
        return $this->container['asic_red_temp'];
    }

    /**
     * Sets asic_red_temp
     *
     * @param int $asic_red_temp Red Temperature for ASIC workers, ??C
     *
     * @return $this
     */
    public function setAsicRedTemp($asic_red_temp)
    {
        $this->container['asic_red_temp'] = $asic_red_temp;

        return $this;
    }

    /**
     * Gets asic_red_board_temp
     *
     * @return float
     */
    public function getAsicRedBoardTemp()
    {
        return $this->container['asic_red_board_temp'];
    }

    /**
     * Sets asic_red_board_temp
     *
     * @param float $asic_red_board_temp Red Board Temperature for ASIC workers, ??C
     *
     * @return $this
     */
    public function setAsicRedBoardTemp($asic_red_board_temp)
    {
        $this->container['asic_red_board_temp'] = $asic_red_board_temp;

        return $this;
    }

    /**
     * Gets gpu_red_mem_temp
     *
     * @return float
     */
    public function getGpuRedMemTemp()
    {
        return $this->container['gpu_red_mem_temp'];
    }

    /**
     * Sets gpu_red_mem_temp
     *
     * @param float $gpu_red_mem_temp Red memory temperature for GPU workers, ??C
     *
     * @return $this
     */
    public function setGpuRedMemTemp($gpu_red_mem_temp)
    {
        $this->container['gpu_red_mem_temp'] = $gpu_red_mem_temp;

        return $this;
    }

    /**
     * Gets gpu_red_cpu_temp
     *
     * @return float
     */
    public function getGpuRedCpuTemp()
    {
        return $this->container['gpu_red_cpu_temp'];
    }

    /**
     * Sets gpu_red_cpu_temp
     *
     * @param float $gpu_red_cpu_temp Red CPU temperature for GPU workers, ??C
     *
     * @return $this
     */
    public function setGpuRedCpuTemp($gpu_red_cpu_temp)
    {
        $this->container['gpu_red_cpu_temp'] = $gpu_red_cpu_temp;

        return $this;
    }

    /**
     * Gets gpu_red_fan
     *
     * @return int
     */
    public function getGpuRedFan()
    {
        return $this->container['gpu_red_fan'];
    }

    /**
     * Sets gpu_red_fan
     *
     * @param int $gpu_red_fan Red Fan speed for GPU workers, %
     *
     * @return $this
     */
    public function setGpuRedFan($gpu_red_fan)
    {
        $this->container['gpu_red_fan'] = $gpu_red_fan;

        return $this;
    }

    /**
     * Gets asic_red_fan
     *
     * @return int
     */
    public function getAsicRedFan()
    {
        return $this->container['asic_red_fan'];
    }

    /**
     * Sets asic_red_fan
     *
     * @param int $asic_red_fan Red Fan speed for ASIC workers, %
     *
     * @return $this
     */
    public function setAsicRedFan($asic_red_fan)
    {
        $this->container['asic_red_fan'] = $asic_red_fan;

        return $this;
    }

    /**
     * Gets gpu_red_asr
     *
     * @return int
     */
    public function getGpuRedAsr()
    {
        return $this->container['gpu_red_asr'];
    }

    /**
     * Sets gpu_red_asr
     *
     * @param int $gpu_red_asr Red Accepted Shares Ratio for GPU workers, %
     *
     * @return $this
     */
    public function setGpuRedAsr($gpu_red_asr)
    {
        $this->container['gpu_red_asr'] = $gpu_red_asr;

        return $this;
    }

    /**
     * Gets asic_red_asr
     *
     * @return int
     */
    public function getAsicRedAsr()
    {
        return $this->container['asic_red_asr'];
    }

    /**
     * Sets asic_red_asr
     *
     * @param int $asic_red_asr Red Accepted Shares Ratio for ASIC workers, %
     *
     * @return $this
     */
    public function setAsicRedAsr($asic_red_asr)
    {
        $this->container['asic_red_asr'] = $asic_red_asr;

        return $this;
    }

    /**
     * Gets gpu_red_la
     *
     * @return float
     */
    public function getGpuRedLa()
    {
        return $this->container['gpu_red_la'];
    }

    /**
     * Sets gpu_red_la
     *
     * @param float $gpu_red_la Red Load Average per one CPU core for GPU workers
     *
     * @return $this
     */
    public function setGpuRedLa($gpu_red_la)
    {
        $this->container['gpu_red_la'] = $gpu_red_la;

        return $this;
    }

    /**
     * Gets asic_red_la
     *
     * @return float
     */
    public function getAsicRedLa()
    {
        return $this->container['asic_red_la'];
    }

    /**
     * Sets asic_red_la
     *
     * @param float $asic_red_la Red Load Average per one CPU core for ASIC workers
     *
     * @return $this
     */
    public function setAsicRedLa($asic_red_la)
    {
        $this->container['asic_red_la'] = $asic_red_la;

        return $this;
    }

    /**
     * Gets repo_urls
     *
     * @return string[]
     */
    public function getRepoUrls()
    {
        return $this->container['repo_urls'];
    }

    /**
     * Sets repo_urls
     *
     * @param string[] $repo_urls Package repository URL list. Use this to override default list.
     *
     * @return $this
     */
    public function setRepoUrls($repo_urls)
    {
        $this->container['repo_urls'] = $repo_urls;

        return $this;
    }

    /**
     * Gets power_price
     *
     * @return float
     */
    public function getPowerPrice()
    {
        return $this->container['power_price'];
    }

    /**
     * Sets power_price
     *
     * @param float $power_price Electricity price per kilowatt hour
     *
     * @return $this
     */
    public function setPowerPrice($power_price)
    {
        $this->container['power_price'] = $power_price;

        return $this;
    }

    /**
     * Gets power_price_currency
     *
     * @return string
     */
    public function getPowerPriceCurrency()
    {
        return $this->container['power_price_currency'];
    }

    /**
     * Sets power_price_currency
     *
     * @param string $power_price_currency Currency of electricity price
     *
     * @return $this
     */
    public function setPowerPriceCurrency($power_price_currency)
    {
        $this->container['power_price_currency'] = $power_price_currency;

        return $this;
    }

    /**
     * Gets charge_on_pool
     *
     * @return bool
     */
    public function getChargeOnPool()
    {
        return $this->container['charge_on_pool'];
    }

    /**
     * Sets charge_on_pool
     *
     * @param bool $charge_on_pool Enable charging on brand pool
     *
     * @return $this
     */
    public function setChargeOnPool($charge_on_pool)
    {
        $this->container['charge_on_pool'] = $charge_on_pool;

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


