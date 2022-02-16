<?php
/**
 * TransactionFarm
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
 * TransactionFarm Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionFarm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionFarm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'timestamp' => 'int',
        'type_id' => '\Swagger\Client\Model\TransactionTypeFarm',
        'amount' => 'float',
        'currency' => 'string',
        'cost_details' => '\Swagger\Client\Model\TransactionCostItem[]',
        'comment' => 'string',
        'user' => 'object',
        'source_user' => 'object',
        'target_farm' => 'object',
        'source_farm' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'timestamp' => null,
        'type_id' => null,
        'amount' => null,
        'currency' => null,
        'cost_details' => null,
        'comment' => null,
        'user' => null,
        'source_user' => null,
        'target_farm' => null,
        'source_farm' => null
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
        'timestamp' => 'timestamp',
        'type_id' => 'type_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'cost_details' => 'cost_details',
        'comment' => 'comment',
        'user' => 'user',
        'source_user' => 'source_user',
        'target_farm' => 'target_farm',
        'source_farm' => 'source_farm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'type_id' => 'setTypeId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'cost_details' => 'setCostDetails',
        'comment' => 'setComment',
        'user' => 'setUser',
        'source_user' => 'setSourceUser',
        'target_farm' => 'setTargetFarm',
        'source_farm' => 'setSourceFarm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'type_id' => 'getTypeId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'cost_details' => 'getCostDetails',
        'comment' => 'getComment',
        'user' => 'getUser',
        'source_user' => 'getSourceUser',
        'target_farm' => 'getTargetFarm',
        'source_farm' => 'getSourceFarm'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['cost_details'] = isset($data['cost_details']) ? $data['cost_details'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['source_user'] = isset($data['source_user']) ? $data['source_user'] : null;
        $this->container['target_farm'] = isset($data['target_farm']) ? $data['target_farm'] : null;
        $this->container['source_farm'] = isset($data['source_farm']) ? $data['source_farm'] : null;
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
     * @param int $id Transaction ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Transaction timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return \Swagger\Client\Model\TransactionTypeFarm
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param \Swagger\Client\Model\TransactionTypeFarm $type_id type_id
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Transaction amount in currency
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Transaction currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets cost_details
     *
     * @return \Swagger\Client\Model\TransactionCostItem[]
     */
    public function getCostDetails()
    {
        return $this->container['cost_details'];
    }

    /**
     * Sets cost_details
     *
     * @param \Swagger\Client\Model\TransactionCostItem[] $cost_details Cost details for type 2.
     *
     * @return $this
     */
    public function setCostDetails($cost_details)
    {
        $this->container['cost_details'] = $cost_details;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Comment for type 4
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets user
     *
     * @return object
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param object $user User who performed the opertation
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets source_user
     *
     * @return object
     */
    public function getSourceUser()
    {
        return $this->container['source_user'];
    }

    /**
     * Sets source_user
     *
     * @param object $source_user Source user for type 7
     *
     * @return $this
     */
    public function setSourceUser($source_user)
    {
        $this->container['source_user'] = $source_user;

        return $this;
    }

    /**
     * Gets target_farm
     *
     * @return object
     */
    public function getTargetFarm()
    {
        return $this->container['target_farm'];
    }

    /**
     * Sets target_farm
     *
     * @param object $target_farm Target farm for type 10
     *
     * @return $this
     */
    public function setTargetFarm($target_farm)
    {
        $this->container['target_farm'] = $target_farm;

        return $this;
    }

    /**
     * Gets source_farm
     *
     * @return object
     */
    public function getSourceFarm()
    {
        return $this->container['source_farm'];
    }

    /**
     * Sets source_farm
     *
     * @param object $source_farm Source farm for type 11
     *
     * @return $this
     */
    public function setSourceFarm($source_farm)
    {
        $this->container['source_farm'] = $source_farm;

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


