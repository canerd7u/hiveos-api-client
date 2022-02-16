<?php
/**
 * ScheduleActionData
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
use \Swagger\Client\ObjectSerializer;

/**
 * ScheduleActionData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduleActionData extends WorkerEditFS 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduleActionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'oc_id' => 'int',
        'oc_apply_mode' => 'string',
        'asic_oc' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'oc_id' => null,
        'oc_apply_mode' => null,
        'asic_oc' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'oc_id' => 'oc_id',
        'oc_apply_mode' => 'oc_apply_mode',
        'asic_oc' => 'asic_oc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'oc_id' => 'setOcId',
        'oc_apply_mode' => 'setOcApplyMode',
        'asic_oc' => 'setAsicOc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'oc_id' => 'getOcId',
        'oc_apply_mode' => 'getOcApplyMode',
        'asic_oc' => 'getAsicOc'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const OC_APPLY_MODE_REPLACE = 'replace';
    const OC_APPLY_MODE_MERGE = 'merge';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOcApplyModeAllowableValues()
    {
        return [
            self::OC_APPLY_MODE_REPLACE,
            self::OC_APPLY_MODE_MERGE,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['oc_id'] = isset($data['oc_id']) ? $data['oc_id'] : null;
        $this->container['oc_apply_mode'] = isset($data['oc_apply_mode']) ? $data['oc_apply_mode'] : 'replace';
        $this->container['asic_oc'] = isset($data['asic_oc']) ? $data['asic_oc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getOcApplyModeAllowableValues();
        if (!is_null($this->container['oc_apply_mode']) && !in_array($this->container['oc_apply_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'oc_apply_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets oc_id
     *
     * @return int
     */
    public function getOcId()
    {
        return $this->container['oc_id'];
    }

    /**
     * Sets oc_id
     *
     * @param int $oc_id Overclocking profile ID
     *
     * @return $this
     */
    public function setOcId($oc_id)
    {
        $this->container['oc_id'] = $oc_id;

        return $this;
    }

    /**
     * Gets oc_apply_mode
     *
     * @return string
     */
    public function getOcApplyMode()
    {
        return $this->container['oc_apply_mode'];
    }

    /**
     * Sets oc_apply_mode
     *
     * @param string $oc_apply_mode How to apply overclocking profile: - When applying profile via `oc_id`   - replace - copy entire per-brand configurations of both default and per-algo sets   - merge - copy only individual fields of per-brand configurations of both default and per-algo sets - When applying config via `oc_config`   - replace - full replace the oc_config field in worker with one from request   - merge - update individual fields in worker's oc_config
     *
     * @return $this
     */
    public function setOcApplyMode($oc_apply_mode)
    {
        $allowedValues = $this->getOcApplyModeAllowableValues();
        if (!is_null($oc_apply_mode) && !in_array($oc_apply_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'oc_apply_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['oc_apply_mode'] = $oc_apply_mode;

        return $this;
    }

    /**
     * Gets asic_oc
     *
     * @return object
     */
    public function getAsicOc()
    {
        return $this->container['asic_oc'];
    }

    /**
     * Sets asic_oc
     *
     * @param object $asic_oc asic_oc
     *
     * @return $this
     */
    public function setAsicOc($asic_oc)
    {
        $this->container['asic_oc'] = $asic_oc;

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


