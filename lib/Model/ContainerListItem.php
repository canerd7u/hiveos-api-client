<?php
/**
 * ContainerListItem
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
 * ContainerListItem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContainerListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContainerListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'type' => 'string',
        'description' => 'string',
        'rows' => 'int',
        'cols' => 'int',
        'cells_config' => 'object[]',
        'cells' => '\Swagger\Client\Model\ContainerCell[]',
        'stats' => '\Swagger\Client\Model\ContainerStats'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'type' => null,
        'description' => null,
        'rows' => null,
        'cols' => null,
        'cells_config' => null,
        'cells' => null,
        'stats' => null
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
        'type' => 'type',
        'description' => 'description',
        'rows' => 'rows',
        'cols' => 'cols',
        'cells_config' => 'cells_config',
        'cells' => 'cells',
        'stats' => 'stats'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'description' => 'setDescription',
        'rows' => 'setRows',
        'cols' => 'setCols',
        'cells_config' => 'setCellsConfig',
        'cells' => 'setCells',
        'stats' => 'setStats'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'description' => 'getDescription',
        'rows' => 'getRows',
        'cols' => 'getCols',
        'cells_config' => 'getCellsConfig',
        'cells' => 'getCells',
        'stats' => 'getStats'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['cols'] = isset($data['cols']) ? $data['cols'] : null;
        $this->container['cells_config'] = isset($data['cells_config']) ? $data['cells_config'] : null;
        $this->container['cells'] = isset($data['cells']) ? $data['cells'] : null;
        $this->container['stats'] = isset($data['stats']) ? $data['stats'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['rows']) && ($this->container['rows'] < 1)) {
            $invalidProperties[] = "invalid value for 'rows', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['cols']) && ($this->container['cols'] < 1)) {
            $invalidProperties[] = "invalid value for 'cols', must be bigger than or equal to 1.";
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
     * @param string $name Container name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type used to dispaly shape
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return int
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param int $rows Amount of rows in the container
     *
     * @return $this
     */
    public function setRows($rows)
    {

        if (!is_null($rows) && ($rows < 1)) {
            throw new \InvalidArgumentException('invalid value for $rows when calling ContainerListItem., must be bigger than or equal to 1.');
        }

        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets cols
     *
     * @return int
     */
    public function getCols()
    {
        return $this->container['cols'];
    }

    /**
     * Sets cols
     *
     * @param int $cols Amount of rows in the container
     *
     * @return $this
     */
    public function setCols($cols)
    {

        if (!is_null($cols) && ($cols < 1)) {
            throw new \InvalidArgumentException('invalid value for $cols when calling ContainerListItem., must be bigger than or equal to 1.');
        }

        $this->container['cols'] = $cols;

        return $this;
    }

    /**
     * Gets cells_config
     *
     * @return object[]
     */
    public function getCellsConfig()
    {
        return $this->container['cells_config'];
    }

    /**
     * Sets cells_config
     *
     * @param object[] $cells_config Cells configuration
     *
     * @return $this
     */
    public function setCellsConfig($cells_config)
    {
        $this->container['cells_config'] = $cells_config;

        return $this;
    }

    /**
     * Gets cells
     *
     * @return \Swagger\Client\Model\ContainerCell[]
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     * @param \Swagger\Client\Model\ContainerCell[] $cells cells
     *
     * @return $this
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;

        return $this;
    }

    /**
     * Gets stats
     *
     * @return \Swagger\Client\Model\ContainerStats
     */
    public function getStats()
    {
        return $this->container['stats'];
    }

    /**
     * Sets stats
     *
     * @param \Swagger\Client\Model\ContainerStats $stats stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->container['stats'] = $stats;

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

