<?php
/**
 * RomUploadRequestItem
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
 * RomUploadRequestItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RomUploadRequestItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RomUploadRequestItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gpus' => 'object[]',
        'rom_id' => 'int',
        'force' => 'bool',
        'reboot' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'gpus' => null,
        'rom_id' => null,
        'force' => null,
        'reboot' => null
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
        'gpus' => 'gpus',
        'rom_id' => 'rom_id',
        'force' => 'force',
        'reboot' => 'reboot'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gpus' => 'setGpus',
        'rom_id' => 'setRomId',
        'force' => 'setForce',
        'reboot' => 'setReboot'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gpus' => 'getGpus',
        'rom_id' => 'getRomId',
        'force' => 'getForce',
        'reboot' => 'getReboot'
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
        $this->container['gpus'] = isset($data['gpus']) ? $data['gpus'] : null;
        $this->container['rom_id'] = isset($data['rom_id']) ? $data['rom_id'] : null;
        $this->container['force'] = isset($data['force']) ? $data['force'] : null;
        $this->container['reboot'] = isset($data['reboot']) ? $data['reboot'] : null;
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
     * Gets gpus
     *
     * @return object[]
     */
    public function getGpus()
    {
        return $this->container['gpus'];
    }

    /**
     * Sets gpus
     *
     * @param object[] $gpus GPUs to flash. Different workers can be mixed here.
     *
     * @return $this
     */
    public function setGpus($gpus)
    {
        $this->container['gpus'] = $gpus;

        return $this;
    }

    /**
     * Gets rom_id
     *
     * @return int
     */
    public function getRomId()
    {
        return $this->container['rom_id'];
    }

    /**
     * Sets rom_id
     *
     * @param int $rom_id Stored Rom ID to use
     *
     * @return $this
     */
    public function setRomId($rom_id)
    {
        $this->container['rom_id'] = $rom_id;

        return $this;
    }

    /**
     * Gets force
     *
     * @return bool
     */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
     * Sets force
     *
     * @param bool $force Force flashing regardless of security checkings
     *
     * @return $this
     */
    public function setForce($force)
    {
        $this->container['force'] = $force;

        return $this;
    }

    /**
     * Gets reboot
     *
     * @return bool
     */
    public function getReboot()
    {
        return $this->container['reboot'];
    }

    /**
     * Sets reboot
     *
     * @param bool $reboot Reboot worker after successful flashing of all GPUs
     *
     * @return $this
     */
    public function setReboot($reboot)
    {
        $this->container['reboot'] = $reboot;

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


