<?php
/**
 * WorkerProps
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
 * WorkerProps Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkerProps extends WorkerIpAddresses 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkerProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'remote_address' => 'object',
        'vpn' => 'bool',
        'has_amd' => 'bool',
        'has_nvidia' => 'bool',
        'needs_upgrade' => 'bool',
        'packages_hash' => 'string',
        'lan_config' => 'object',
        'system_type' => 'string',
        'os_name' => 'string',
        'has_octofan' => 'bool',
        'has_coolbox' => 'bool',
        'has_fanflap' => 'bool',
        'has_powermeter' => 'bool',
        'has_asichub' => 'bool',
        'has_donnager_relay' => 'bool',
        'personal_settings' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'remote_address' => null,
        'vpn' => null,
        'has_amd' => null,
        'has_nvidia' => null,
        'needs_upgrade' => null,
        'packages_hash' => null,
        'lan_config' => null,
        'system_type' => null,
        'os_name' => null,
        'has_octofan' => null,
        'has_coolbox' => null,
        'has_fanflap' => null,
        'has_powermeter' => null,
        'has_asichub' => null,
        'has_donnager_relay' => null,
        'personal_settings' => null
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
        'remote_address' => 'remote_address',
        'vpn' => 'vpn',
        'has_amd' => 'has_amd',
        'has_nvidia' => 'has_nvidia',
        'needs_upgrade' => 'needs_upgrade',
        'packages_hash' => 'packages_hash',
        'lan_config' => 'lan_config',
        'system_type' => 'system_type',
        'os_name' => 'os_name',
        'has_octofan' => 'has_octofan',
        'has_coolbox' => 'has_coolbox',
        'has_fanflap' => 'has_fanflap',
        'has_powermeter' => 'has_powermeter',
        'has_asichub' => 'has_asichub',
        'has_donnager_relay' => 'has_donnager_relay',
        'personal_settings' => 'personal_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remote_address' => 'setRemoteAddress',
        'vpn' => 'setVpn',
        'has_amd' => 'setHasAmd',
        'has_nvidia' => 'setHasNvidia',
        'needs_upgrade' => 'setNeedsUpgrade',
        'packages_hash' => 'setPackagesHash',
        'lan_config' => 'setLanConfig',
        'system_type' => 'setSystemType',
        'os_name' => 'setOsName',
        'has_octofan' => 'setHasOctofan',
        'has_coolbox' => 'setHasCoolbox',
        'has_fanflap' => 'setHasFanflap',
        'has_powermeter' => 'setHasPowermeter',
        'has_asichub' => 'setHasAsichub',
        'has_donnager_relay' => 'setHasDonnagerRelay',
        'personal_settings' => 'setPersonalSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remote_address' => 'getRemoteAddress',
        'vpn' => 'getVpn',
        'has_amd' => 'getHasAmd',
        'has_nvidia' => 'getHasNvidia',
        'needs_upgrade' => 'getNeedsUpgrade',
        'packages_hash' => 'getPackagesHash',
        'lan_config' => 'getLanConfig',
        'system_type' => 'getSystemType',
        'os_name' => 'getOsName',
        'has_octofan' => 'getHasOctofan',
        'has_coolbox' => 'getHasCoolbox',
        'has_fanflap' => 'getHasFanflap',
        'has_powermeter' => 'getHasPowermeter',
        'has_asichub' => 'getHasAsichub',
        'has_donnager_relay' => 'getHasDonnagerRelay',
        'personal_settings' => 'getPersonalSettings'
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

    const SYSTEM_TYPE_LINUX = 'linux';
    const SYSTEM_TYPE_ASIC = 'asic';
    const SYSTEM_TYPE_WINDOWS = 'windows';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSystemTypeAllowableValues()
    {
        return [
            self::SYSTEM_TYPE_LINUX,
            self::SYSTEM_TYPE_ASIC,
            self::SYSTEM_TYPE_WINDOWS,
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

        $this->container['remote_address'] = isset($data['remote_address']) ? $data['remote_address'] : null;
        $this->container['vpn'] = isset($data['vpn']) ? $data['vpn'] : null;
        $this->container['has_amd'] = isset($data['has_amd']) ? $data['has_amd'] : null;
        $this->container['has_nvidia'] = isset($data['has_nvidia']) ? $data['has_nvidia'] : null;
        $this->container['needs_upgrade'] = isset($data['needs_upgrade']) ? $data['needs_upgrade'] : null;
        $this->container['packages_hash'] = isset($data['packages_hash']) ? $data['packages_hash'] : null;
        $this->container['lan_config'] = isset($data['lan_config']) ? $data['lan_config'] : null;
        $this->container['system_type'] = isset($data['system_type']) ? $data['system_type'] : null;
        $this->container['os_name'] = isset($data['os_name']) ? $data['os_name'] : null;
        $this->container['has_octofan'] = isset($data['has_octofan']) ? $data['has_octofan'] : null;
        $this->container['has_coolbox'] = isset($data['has_coolbox']) ? $data['has_coolbox'] : null;
        $this->container['has_fanflap'] = isset($data['has_fanflap']) ? $data['has_fanflap'] : null;
        $this->container['has_powermeter'] = isset($data['has_powermeter']) ? $data['has_powermeter'] : null;
        $this->container['has_asichub'] = isset($data['has_asichub']) ? $data['has_asichub'] : null;
        $this->container['has_donnager_relay'] = isset($data['has_donnager_relay']) ? $data['has_donnager_relay'] : null;
        $this->container['personal_settings'] = isset($data['personal_settings']) ? $data['personal_settings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getSystemTypeAllowableValues();
        if (!is_null($this->container['system_type']) && !in_array($this->container['system_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'system_type', must be one of '%s'",
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
     * Gets remote_address
     *
     * @return object
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     *
     * @param object $remote_address Remote address info
     *
     * @return $this
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

        return $this;
    }

    /**
     * Gets vpn
     *
     * @return bool
     */
    public function getVpn()
    {
        return $this->container['vpn'];
    }

    /**
     * Sets vpn
     *
     * @param bool $vpn VPN is configured
     *
     * @return $this
     */
    public function setVpn($vpn)
    {
        $this->container['vpn'] = $vpn;

        return $this;
    }

    /**
     * Gets has_amd
     *
     * @return bool
     */
    public function getHasAmd()
    {
        return $this->container['has_amd'];
    }

    /**
     * Sets has_amd
     *
     * @param bool $has_amd Worker has AMD GPUs
     *
     * @return $this
     */
    public function setHasAmd($has_amd)
    {
        $this->container['has_amd'] = $has_amd;

        return $this;
    }

    /**
     * Gets has_nvidia
     *
     * @return bool
     */
    public function getHasNvidia()
    {
        return $this->container['has_nvidia'];
    }

    /**
     * Sets has_nvidia
     *
     * @param bool $has_nvidia Worker has Nvidia GPUs
     *
     * @return $this
     */
    public function setHasNvidia($has_nvidia)
    {
        $this->container['has_nvidia'] = $has_nvidia;

        return $this;
    }

    /**
     * Gets needs_upgrade
     *
     * @return bool
     */
    public function getNeedsUpgrade()
    {
        return $this->container['needs_upgrade'];
    }

    /**
     * Sets needs_upgrade
     *
     * @param bool $needs_upgrade New OS version is available
     *
     * @return $this
     */
    public function setNeedsUpgrade($needs_upgrade)
    {
        $this->container['needs_upgrade'] = $needs_upgrade;

        return $this;
    }

    /**
     * Gets packages_hash
     *
     * @return string
     */
    public function getPackagesHash()
    {
        return $this->container['packages_hash'];
    }

    /**
     * Sets packages_hash
     *
     * @param string $packages_hash packages_hash
     *
     * @return $this
     */
    public function setPackagesHash($packages_hash)
    {
        $this->container['packages_hash'] = $packages_hash;

        return $this;
    }

    /**
     * Gets lan_config
     *
     * @return object
     */
    public function getLanConfig()
    {
        return $this->container['lan_config'];
    }

    /**
     * Sets lan_config
     *
     * @param object $lan_config LAN configuration
     *
     * @return $this
     */
    public function setLanConfig($lan_config)
    {
        $this->container['lan_config'] = $lan_config;

        return $this;
    }

    /**
     * Gets system_type
     *
     * @return string
     */
    public function getSystemType()
    {
        return $this->container['system_type'];
    }

    /**
     * Sets system_type
     *
     * @param string $system_type Hive OS system type
     *
     * @return $this
     */
    public function setSystemType($system_type)
    {
        $allowedValues = $this->getSystemTypeAllowableValues();
        if (!is_null($system_type) && !in_array($system_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'system_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['system_type'] = $system_type;

        return $this;
    }

    /**
     * Gets os_name
     *
     * @return string
     */
    public function getOsName()
    {
        return $this->container['os_name'];
    }

    /**
     * Sets os_name
     *
     * @param string $os_name os_name
     *
     * @return $this
     */
    public function setOsName($os_name)
    {
        $this->container['os_name'] = $os_name;

        return $this;
    }

    /**
     * Gets has_octofan
     *
     * @return bool
     */
    public function getHasOctofan()
    {
        return $this->container['has_octofan'];
    }

    /**
     * Sets has_octofan
     *
     * @param bool $has_octofan Worker has Octominer fan controller
     *
     * @return $this
     */
    public function setHasOctofan($has_octofan)
    {
        $this->container['has_octofan'] = $has_octofan;

        return $this;
    }

    /**
     * Gets has_coolbox
     *
     * @return bool
     */
    public function getHasCoolbox()
    {
        return $this->container['has_coolbox'];
    }

    /**
     * Sets has_coolbox
     *
     * @param bool $has_coolbox Worker has Coolbox fan controller
     *
     * @return $this
     */
    public function setHasCoolbox($has_coolbox)
    {
        $this->container['has_coolbox'] = $has_coolbox;

        return $this;
    }

    /**
     * Gets has_fanflap
     *
     * @return bool
     */
    public function getHasFanflap()
    {
        return $this->container['has_fanflap'];
    }

    /**
     * Sets has_fanflap
     *
     * @param bool $has_fanflap Worker has FanFlap controller
     *
     * @return $this
     */
    public function setHasFanflap($has_fanflap)
    {
        $this->container['has_fanflap'] = $has_fanflap;

        return $this;
    }

    /**
     * Gets has_powermeter
     *
     * @return bool
     */
    public function getHasPowermeter()
    {
        return $this->container['has_powermeter'];
    }

    /**
     * Sets has_powermeter
     *
     * @param bool $has_powermeter Worker has Powermeter controller
     *
     * @return $this
     */
    public function setHasPowermeter($has_powermeter)
    {
        $this->container['has_powermeter'] = $has_powermeter;

        return $this;
    }

    /**
     * Gets has_asichub
     *
     * @return bool
     */
    public function getHasAsichub()
    {
        return $this->container['has_asichub'];
    }

    /**
     * Sets has_asichub
     *
     * @param bool $has_asichub Worker is an ASIC Hub
     *
     * @return $this
     */
    public function setHasAsichub($has_asichub)
    {
        $this->container['has_asichub'] = $has_asichub;

        return $this;
    }

    /**
     * Gets has_donnager_relay
     *
     * @return bool
     */
    public function getHasDonnagerRelay()
    {
        return $this->container['has_donnager_relay'];
    }

    /**
     * Sets has_donnager_relay
     *
     * @param bool $has_donnager_relay Worker is a Donnager Relay controller
     *
     * @return $this
     */
    public function setHasDonnagerRelay($has_donnager_relay)
    {
        $this->container['has_donnager_relay'] = $has_donnager_relay;

        return $this;
    }

    /**
     * Gets personal_settings
     *
     * @return object
     */
    public function getPersonalSettings()
    {
        return $this->container['personal_settings'];
    }

    /**
     * Sets personal_settings
     *
     * @param object $personal_settings Personal settings for current user
     *
     * @return $this
     */
    public function setPersonalSettings($personal_settings)
    {
        $this->container['personal_settings'] = $personal_settings;

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


