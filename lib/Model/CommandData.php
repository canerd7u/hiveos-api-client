<?php
/**
 * CommandData
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
 * CommandData Class Doc Comment
 *
 * @category Class
 * @description Data for command For &#x60;miner&#x60;: &#x60;&#x60;&#x60;json {   \&quot;action\&quot;: \&quot;restart|stop|log|config|tuning\&quot;,   \&quot;miner_index\&quot;: integer, Zero-based miner index, default is 0 } &#x60;&#x60;&#x60; For &#x60;teleconsole&#x60; and &#x60;hssh&#x60;: &#x60;&#x60;&#x60;json {   \&quot;action\&quot;: \&quot;start|stop|restart\&quot; } &#x60;&#x60;&#x60; For &#x60;exec&#x60;: &#x60;&#x60;&#x60;json {   \&quot;cmd\&quot;: \&quot;command to execute\&quot; } &#x60;&#x60;&#x60; For &#x60;amd_download&#x60; and &#x60;nvidia_download&#x60;: &#x60;&#x60;&#x60;json {   \&quot;gpu_index\&quot;: integer, GPU index   \&quot;to_storage\&quot;: boolean, Save the ROM to farm&#39;s storage } &#x60;&#x60;&#x60; For &#x60;amd_upload&#x60; and &#x60;nvidia_upload&#x60;: &#x60;&#x60;&#x60;json {   \&quot;gpu_index\&quot;: integer, GPU index, zero-based (-1 to flash all GPUs)   \&quot;rom\&quot;: base64-string, ROM file contents   \&quot;rom_id\&quot;: integer, Use stored ROM instead of passing file contents   \&quot;force\&quot;: boolean, Force flashing regardless of security checkings   \&quot;reboot\&quot;: boolean, Reboot worker after successful flashing } &#x60;&#x60;&#x60; For &#x60;upgrade&#x60;: &#x60;&#x60;&#x60;json {   \&quot;beta\&quot;: boolean, Upgrade to latest beta version   \&quot;version\&quot;: string, Upgrade to this version } &#x60;&#x60;&#x60; For &#x60;asic_upgrade&#x60;: &#x60;&#x60;&#x60;json {   \&quot;firmware_url\&quot;: \&quot;firmware file url\&quot; } &#x60;&#x60;&#x60; For &#x60;donnager_relay_switch&#x60;: &#x60;&#x60;&#x60;json {   \&quot;action\&quot;: \&quot;on|off|restart\&quot;   \&quot;indexes\&quot;: integer array of channel indexes } &#x60;&#x60;&#x60; For &#x60;pool_test&#x60;: &#x60;&#x60;&#x60;json {   \&quot;pool_urls\&quot;: string array of stratum pool urls   \&quot;pool_ssl\&quot;: boolean, Use SSL } &#x60;&#x60;&#x60;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommandData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CommandData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        
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
        
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        
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


