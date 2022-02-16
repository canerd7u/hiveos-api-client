<?php
/**
 * WorkerEditRequest
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
 * WorkerEditRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkerEditRequest extends WorkerFields 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkerEditRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'tag_ids' => 'int[]',
        'tag_update_mode' => 'string',
        'mirror_url' => '\Swagger\Client\Model\MirrorUrl',
        'vpn' => 'object',
        'fs_id' => 'int',
        'oc_id' => 'int',
        'oc_apply_mode' => 'string',
        'oc_config' => '\Swagger\Client\Model\OCConfig',
        'oc_algo' => '\Swagger\Client\Model\OCAlgo',
        'miners_config' => '\Swagger\Client\Model\MinersConfig',
        'watchdog' => 'object',
        'options' => 'object',
        'hardware_power_draw' => 'int',
        'psu_efficiency' => 'int',
        'octofan_correct_power' => 'bool',
        'autofan' => 'object',
        'octofan' => 'object',
        'coolbox' => 'object',
        'fanflap' => 'object',
        'powermeter' => 'object',
        'donnager_relay' => 'object',
        'ykeda_autofan' => 'object',
        'asic_config' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'tag_ids' => null,
        'tag_update_mode' => null,
        'mirror_url' => null,
        'vpn' => null,
        'fs_id' => null,
        'oc_id' => null,
        'oc_apply_mode' => null,
        'oc_config' => null,
        'oc_algo' => null,
        'miners_config' => null,
        'watchdog' => null,
        'options' => null,
        'hardware_power_draw' => null,
        'psu_efficiency' => null,
        'octofan_correct_power' => null,
        'autofan' => null,
        'octofan' => null,
        'coolbox' => null,
        'fanflap' => null,
        'powermeter' => null,
        'donnager_relay' => null,
        'ykeda_autofan' => null,
        'asic_config' => null
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
        'active' => 'active',
        'tag_ids' => 'tag_ids',
        'tag_update_mode' => 'tag_update_mode',
        'mirror_url' => 'mirror_url',
        'vpn' => 'vpn',
        'fs_id' => 'fs_id',
        'oc_id' => 'oc_id',
        'oc_apply_mode' => 'oc_apply_mode',
        'oc_config' => 'oc_config',
        'oc_algo' => 'oc_algo',
        'miners_config' => 'miners_config',
        'watchdog' => 'watchdog',
        'options' => 'options',
        'hardware_power_draw' => 'hardware_power_draw',
        'psu_efficiency' => 'psu_efficiency',
        'octofan_correct_power' => 'octofan_correct_power',
        'autofan' => 'autofan',
        'octofan' => 'octofan',
        'coolbox' => 'coolbox',
        'fanflap' => 'fanflap',
        'powermeter' => 'powermeter',
        'donnager_relay' => 'donnager_relay',
        'ykeda_autofan' => 'ykeda_autofan',
        'asic_config' => 'asic_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'tag_ids' => 'setTagIds',
        'tag_update_mode' => 'setTagUpdateMode',
        'mirror_url' => 'setMirrorUrl',
        'vpn' => 'setVpn',
        'fs_id' => 'setFsId',
        'oc_id' => 'setOcId',
        'oc_apply_mode' => 'setOcApplyMode',
        'oc_config' => 'setOcConfig',
        'oc_algo' => 'setOcAlgo',
        'miners_config' => 'setMinersConfig',
        'watchdog' => 'setWatchdog',
        'options' => 'setOptions',
        'hardware_power_draw' => 'setHardwarePowerDraw',
        'psu_efficiency' => 'setPsuEfficiency',
        'octofan_correct_power' => 'setOctofanCorrectPower',
        'autofan' => 'setAutofan',
        'octofan' => 'setOctofan',
        'coolbox' => 'setCoolbox',
        'fanflap' => 'setFanflap',
        'powermeter' => 'setPowermeter',
        'donnager_relay' => 'setDonnagerRelay',
        'ykeda_autofan' => 'setYkedaAutofan',
        'asic_config' => 'setAsicConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'tag_ids' => 'getTagIds',
        'tag_update_mode' => 'getTagUpdateMode',
        'mirror_url' => 'getMirrorUrl',
        'vpn' => 'getVpn',
        'fs_id' => 'getFsId',
        'oc_id' => 'getOcId',
        'oc_apply_mode' => 'getOcApplyMode',
        'oc_config' => 'getOcConfig',
        'oc_algo' => 'getOcAlgo',
        'miners_config' => 'getMinersConfig',
        'watchdog' => 'getWatchdog',
        'options' => 'getOptions',
        'hardware_power_draw' => 'getHardwarePowerDraw',
        'psu_efficiency' => 'getPsuEfficiency',
        'octofan_correct_power' => 'getOctofanCorrectPower',
        'autofan' => 'getAutofan',
        'octofan' => 'getOctofan',
        'coolbox' => 'getCoolbox',
        'fanflap' => 'getFanflap',
        'powermeter' => 'getPowermeter',
        'donnager_relay' => 'getDonnagerRelay',
        'ykeda_autofan' => 'getYkedaAutofan',
        'asic_config' => 'getAsicConfig'
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

    const TAG_UPDATE_MODE_ADD = 'add';
    const TAG_UPDATE_MODE_REMOVE = 'remove';
    const TAG_UPDATE_MODE_REPLACE = 'replace';
    const OC_APPLY_MODE_REPLACE = 'replace';
    const OC_APPLY_MODE_MERGE = 'merge';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTagUpdateModeAllowableValues()
    {
        return [
            self::TAG_UPDATE_MODE_ADD,
            self::TAG_UPDATE_MODE_REMOVE,
            self::TAG_UPDATE_MODE_REPLACE,
        ];
    }
    
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

        $this->container['active'] = isset($data['active']) ? $data['active'] : true;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['tag_update_mode'] = isset($data['tag_update_mode']) ? $data['tag_update_mode'] : 'replace';
        $this->container['mirror_url'] = isset($data['mirror_url']) ? $data['mirror_url'] : null;
        $this->container['vpn'] = isset($data['vpn']) ? $data['vpn'] : null;
        $this->container['fs_id'] = isset($data['fs_id']) ? $data['fs_id'] : null;
        $this->container['oc_id'] = isset($data['oc_id']) ? $data['oc_id'] : null;
        $this->container['oc_apply_mode'] = isset($data['oc_apply_mode']) ? $data['oc_apply_mode'] : 'replace';
        $this->container['oc_config'] = isset($data['oc_config']) ? $data['oc_config'] : null;
        $this->container['oc_algo'] = isset($data['oc_algo']) ? $data['oc_algo'] : null;
        $this->container['miners_config'] = isset($data['miners_config']) ? $data['miners_config'] : null;
        $this->container['watchdog'] = isset($data['watchdog']) ? $data['watchdog'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['hardware_power_draw'] = isset($data['hardware_power_draw']) ? $data['hardware_power_draw'] : null;
        $this->container['psu_efficiency'] = isset($data['psu_efficiency']) ? $data['psu_efficiency'] : null;
        $this->container['octofan_correct_power'] = isset($data['octofan_correct_power']) ? $data['octofan_correct_power'] : null;
        $this->container['autofan'] = isset($data['autofan']) ? $data['autofan'] : null;
        $this->container['octofan'] = isset($data['octofan']) ? $data['octofan'] : null;
        $this->container['coolbox'] = isset($data['coolbox']) ? $data['coolbox'] : null;
        $this->container['fanflap'] = isset($data['fanflap']) ? $data['fanflap'] : null;
        $this->container['powermeter'] = isset($data['powermeter']) ? $data['powermeter'] : null;
        $this->container['donnager_relay'] = isset($data['donnager_relay']) ? $data['donnager_relay'] : null;
        $this->container['ykeda_autofan'] = isset($data['ykeda_autofan']) ? $data['ykeda_autofan'] : null;
        $this->container['asic_config'] = isset($data['asic_config']) ? $data['asic_config'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getTagUpdateModeAllowableValues();
        if (!is_null($this->container['tag_update_mode']) && !in_array($this->container['tag_update_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tag_update_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets tag_update_mode
     *
     * @return string
     */
    public function getTagUpdateMode()
    {
        return $this->container['tag_update_mode'];
    }

    /**
     * Sets tag_update_mode
     *
     * @param string $tag_update_mode Update mode for tags * add - add spicified tags ignoring if already assigned; * remove - remove spicified tags if assigned; * replace - replace all assigned tags with specified ones;
     *
     * @return $this
     */
    public function setTagUpdateMode($tag_update_mode)
    {
        $allowedValues = $this->getTagUpdateModeAllowableValues();
        if (!is_null($tag_update_mode) && !in_array($tag_update_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tag_update_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tag_update_mode'] = $tag_update_mode;

        return $this;
    }

    /**
     * Gets mirror_url
     *
     * @return \Swagger\Client\Model\MirrorUrl
     */
    public function getMirrorUrl()
    {
        return $this->container['mirror_url'];
    }

    /**
     * Sets mirror_url
     *
     * @param \Swagger\Client\Model\MirrorUrl $mirror_url mirror_url
     *
     * @return $this
     */
    public function setMirrorUrl($mirror_url)
    {
        $this->container['mirror_url'] = $mirror_url;

        return $this;
    }

    /**
     * Gets vpn
     *
     * @return object
     */
    public function getVpn()
    {
        return $this->container['vpn'];
    }

    /**
     * Sets vpn
     *
     * @param object $vpn VPN configuration  Files will be named as following, so certificates in client.conf should be named ca.crt, client.crt, client.key.  Also you can embed certificates in client.conf and upload just one file.
     *
     * @return $this
     */
    public function setVpn($vpn)
    {
        $this->container['vpn'] = $vpn;

        return $this;
    }

    /**
     * Gets fs_id
     *
     * @return int
     */
    public function getFsId()
    {
        return $this->container['fs_id'];
    }

    /**
     * Sets fs_id
     *
     * @param int $fs_id Flight sheet ID
     *
     * @return $this
     */
    public function setFsId($fs_id)
    {
        $this->container['fs_id'] = $fs_id;

        return $this;
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
     * Gets oc_config
     *
     * @return \Swagger\Client\Model\OCConfig
     */
    public function getOcConfig()
    {
        return $this->container['oc_config'];
    }

    /**
     * Sets oc_config
     *
     * @param \Swagger\Client\Model\OCConfig $oc_config oc_config
     *
     * @return $this
     */
    public function setOcConfig($oc_config)
    {
        $this->container['oc_config'] = $oc_config;

        return $this;
    }

    /**
     * Gets oc_algo
     *
     * @return \Swagger\Client\Model\OCAlgo
     */
    public function getOcAlgo()
    {
        return $this->container['oc_algo'];
    }

    /**
     * Sets oc_algo
     *
     * @param \Swagger\Client\Model\OCAlgo $oc_algo oc_algo
     *
     * @return $this
     */
    public function setOcAlgo($oc_algo)
    {
        $this->container['oc_algo'] = $oc_algo;

        return $this;
    }

    /**
     * Gets miners_config
     *
     * @return \Swagger\Client\Model\MinersConfig
     */
    public function getMinersConfig()
    {
        return $this->container['miners_config'];
    }

    /**
     * Sets miners_config
     *
     * @param \Swagger\Client\Model\MinersConfig $miners_config miners_config
     *
     * @return $this
     */
    public function setMinersConfig($miners_config)
    {
        $this->container['miners_config'] = $miners_config;

        return $this;
    }

    /**
     * Gets watchdog
     *
     * @return object
     */
    public function getWatchdog()
    {
        return $this->container['watchdog'];
    }

    /**
     * Sets watchdog
     *
     * @param object $watchdog Watchdog system
     *
     * @return $this
     */
    public function setWatchdog($watchdog)
    {
        $this->container['watchdog'] = $watchdog;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object $options Worker options. This object will be merged with existing one on update.
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets hardware_power_draw
     *
     * @return int
     */
    public function getHardwarePowerDraw()
    {
        return $this->container['hardware_power_draw'];
    }

    /**
     * Sets hardware_power_draw
     *
     * @param int $hardware_power_draw Power consumption of worker's hardware, watts
     *
     * @return $this
     */
    public function setHardwarePowerDraw($hardware_power_draw)
    {
        $this->container['hardware_power_draw'] = $hardware_power_draw;

        return $this;
    }

    /**
     * Gets psu_efficiency
     *
     * @return int
     */
    public function getPsuEfficiency()
    {
        return $this->container['psu_efficiency'];
    }

    /**
     * Sets psu_efficiency
     *
     * @param int $psu_efficiency Efficiency of power supply unit, %
     *
     * @return $this
     */
    public function setPsuEfficiency($psu_efficiency)
    {
        $this->container['psu_efficiency'] = $psu_efficiency;

        return $this;
    }

    /**
     * Gets octofan_correct_power
     *
     * @return bool
     */
    public function getOctofanCorrectPower()
    {
        return $this->container['octofan_correct_power'];
    }

    /**
     * Sets octofan_correct_power
     *
     * @param bool $octofan_correct_power Apply power correction settings to power consumption value from Octominer fan controller. Default is false.
     *
     * @return $this
     */
    public function setOctofanCorrectPower($octofan_correct_power)
    {
        $this->container['octofan_correct_power'] = $octofan_correct_power;

        return $this;
    }

    /**
     * Gets autofan
     *
     * @return object
     */
    public function getAutofan()
    {
        return $this->container['autofan'];
    }

    /**
     * Sets autofan
     *
     * @param object $autofan Autofan configuration
     *
     * @return $this
     */
    public function setAutofan($autofan)
    {
        $this->container['autofan'] = $autofan;

        return $this;
    }

    /**
     * Gets octofan
     *
     * @return object
     */
    public function getOctofan()
    {
        return $this->container['octofan'];
    }

    /**
     * Sets octofan
     *
     * @param object $octofan Configuration for Octominer fan controller
     *
     * @return $this
     */
    public function setOctofan($octofan)
    {
        $this->container['octofan'] = $octofan;

        return $this;
    }

    /**
     * Gets coolbox
     *
     * @return object
     */
    public function getCoolbox()
    {
        return $this->container['coolbox'];
    }

    /**
     * Sets coolbox
     *
     * @param object $coolbox Configuration for Coolbox fan controller
     *
     * @return $this
     */
    public function setCoolbox($coolbox)
    {
        $this->container['coolbox'] = $coolbox;

        return $this;
    }

    /**
     * Gets fanflap
     *
     * @return object
     */
    public function getFanflap()
    {
        return $this->container['fanflap'];
    }

    /**
     * Sets fanflap
     *
     * @param object $fanflap Configuration for FanFlap controller
     *
     * @return $this
     */
    public function setFanflap($fanflap)
    {
        $this->container['fanflap'] = $fanflap;

        return $this;
    }

    /**
     * Gets powermeter
     *
     * @return object
     */
    public function getPowermeter()
    {
        return $this->container['powermeter'];
    }

    /**
     * Sets powermeter
     *
     * @param object $powermeter Configuration for Powermeter controller
     *
     * @return $this
     */
    public function setPowermeter($powermeter)
    {
        $this->container['powermeter'] = $powermeter;

        return $this;
    }

    /**
     * Gets donnager_relay
     *
     * @return object
     */
    public function getDonnagerRelay()
    {
        return $this->container['donnager_relay'];
    }

    /**
     * Sets donnager_relay
     *
     * @param object $donnager_relay Donnager Relay configuration
     *
     * @return $this
     */
    public function setDonnagerRelay($donnager_relay)
    {
        $this->container['donnager_relay'] = $donnager_relay;

        return $this;
    }

    /**
     * Gets ykeda_autofan
     *
     * @return object
     */
    public function getYkedaAutofan()
    {
        return $this->container['ykeda_autofan'];
    }

    /**
     * Sets ykeda_autofan
     *
     * @param object $ykeda_autofan Configuration for Ykeda Autofan controller
     *
     * @return $this
     */
    public function setYkedaAutofan($ykeda_autofan)
    {
        $this->container['ykeda_autofan'] = $ykeda_autofan;

        return $this;
    }

    /**
     * Gets asic_config
     *
     * @return map[string,string]
     */
    public function getAsicConfig()
    {
        return $this->container['asic_config'];
    }

    /**
     * Sets asic_config
     *
     * @param map[string,string] $asic_config Settings for ASICs with Hive firmware, depends on model and firmware version
     *
     * @return $this
     */
    public function setAsicConfig($asic_config)
    {
        $this->container['asic_config'] = $asic_config;

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


