<?php
/**
 * Benchmark
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
 * Benchmark Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Benchmark implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Benchmark';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'farm_id' => 'int',
        'worker_id' => 'int',
        'tag_ids' => 'int[]',
        'started_at' => 'int',
        'finished_at' => 'int',
        'aborted' => 'bool',
        'algos' => '\Swagger\Client\Model\AlgoName[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'farm_id' => null,
        'worker_id' => null,
        'tag_ids' => null,
        'started_at' => 'timestamp',
        'finished_at' => 'timestamp',
        'aborted' => null,
        'algos' => null
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
        'id' => 'id',
        'farm_id' => 'farm_id',
        'worker_id' => 'worker_id',
        'tag_ids' => 'tag_ids',
        'started_at' => 'started_at',
        'finished_at' => 'finished_at',
        'aborted' => 'aborted',
        'algos' => 'algos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'farm_id' => 'setFarmId',
        'worker_id' => 'setWorkerId',
        'tag_ids' => 'setTagIds',
        'started_at' => 'setStartedAt',
        'finished_at' => 'setFinishedAt',
        'aborted' => 'setAborted',
        'algos' => 'setAlgos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'farm_id' => 'getFarmId',
        'worker_id' => 'getWorkerId',
        'tag_ids' => 'getTagIds',
        'started_at' => 'getStartedAt',
        'finished_at' => 'getFinishedAt',
        'aborted' => 'getAborted',
        'algos' => 'getAlgos'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['farm_id'] = isset($data['farm_id']) ? $data['farm_id'] : null;
        $this->container['worker_id'] = isset($data['worker_id']) ? $data['worker_id'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['started_at'] = isset($data['started_at']) ? $data['started_at'] : null;
        $this->container['finished_at'] = isset($data['finished_at']) ? $data['finished_at'] : null;
        $this->container['aborted'] = isset($data['aborted']) ? $data['aborted'] : null;
        $this->container['algos'] = isset($data['algos']) ? $data['algos'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets farm_id
     *
     * @return int
     */
    public function getFarmId()
    {
        return $this->container['farm_id'];
    }

    /**
     * Sets farm_id
     *
     * @param int $farm_id farm_id
     *
     * @return $this
     */
    public function setFarmId($farm_id)
    {
        $this->container['farm_id'] = $farm_id;

        return $this;
    }

    /**
     * Gets worker_id
     *
     * @return int
     */
    public function getWorkerId()
    {
        return $this->container['worker_id'];
    }

    /**
     * Sets worker_id
     *
     * @param int $worker_id worker_id
     *
     * @return $this
     */
    public function setWorkerId($worker_id)
    {
        $this->container['worker_id'] = $worker_id;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return int[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param int[] $tag_ids tag_ids
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return int
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param int $started_at When the benchmark was started
     *
     * @return $this
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets finished_at
     *
     * @return int
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     *
     * @param int $finished_at When the benchmark was finished. If absent - the benchmark is still running.
     *
     * @return $this
     */
    public function setFinishedAt($finished_at)
    {
        $this->container['finished_at'] = $finished_at;

        return $this;
    }

    /**
     * Gets aborted
     *
     * @return bool
     */
    public function getAborted()
    {
        return $this->container['aborted'];
    }

    /**
     * Sets aborted
     *
     * @param bool $aborted This flag indicates that the benchmark was aborted.
     *
     * @return $this
     */
    public function setAborted($aborted)
    {
        $this->container['aborted'] = $aborted;

        return $this;
    }

    /**
     * Gets algos
     *
     * @return \Swagger\Client\Model\AlgoName[]
     */
    public function getAlgos()
    {
        return $this->container['algos'];
    }

    /**
     * Sets algos
     *
     * @param \Swagger\Client\Model\AlgoName[] $algos Algorithms that were chosen for benchmark
     *
     * @return $this
     */
    public function setAlgos($algos)
    {
        $this->container['algos'] = $algos;

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


