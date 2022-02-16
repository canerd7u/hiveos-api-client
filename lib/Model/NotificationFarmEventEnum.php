<?php
/**
 * NotificationFarmEventEnum
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
 * NotificationFarmEventEnum Class Doc Comment
 *
 * @category Class
 * @description * &#x60;offline&#x60; - Worker went offline * &#x60;online&#x60; - Worker became online * &#x60;boot&#x60; - Worker booted * &#x60;danger&#x60; - Danger message from worker * &#x60;warning&#x60; - Warning message from worker * &#x60;info&#x60; - Info message from worker * &#x60;success&#x60; - Success message from worker * &#x60;red_temp&#x60; - Temperature &gt;&#x3D; red_temp + 3°C * &#x60;red_mem_temp&#x60; - GPU memory temperature &gt;&#x3D; red_mem_temp + 3°C * &#x60;red_cpu_temp&#x60; - CPU temperature &gt;&#x3D; red_cpu_temp + 3°C * &#x60;red_board_temp&#x60; - ASIC board temperature &gt;&#x3D; red_board_temp + 3°C * &#x60;red_fan&#x60; - Fan speed &gt;&#x3D; red_fan + 5% * &#x60;red_asr&#x60; - Accepted shares ratio &lt;&#x3D; red_asr - 5%. Notification is muted while total amount of shares &lt; 10. * &#x60;red_la&#x60; - Load averege (15m) &gt;&#x3D; red_la + 1. Notification is muted for 20 minutes after boot. * &#x60;missed_unit&#x60; - Missed GPU/Board * &#x60;summary&#x60; - Hourly summary
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationFarmEventEnum
{
    /**
     * Possible values of this enum
     */
    const OFFLINE = 'offline';
    const ONLINE = 'online';
    const BOOT = 'boot';
    const DANGER = 'danger';
    const WARNING = 'warning';
    const INFO = 'info';
    const SUCCESS = 'success';
    const RED_TEMP = 'red_temp';
    const RED_MEM_TEMP = 'red_mem_temp';
    const RED_CPU_TEMP = 'red_cpu_temp';
    const RED_BOARD_TEMP = 'red_board_temp';
    const RED_FAN = 'red_fan';
    const RED_ASR = 'red_asr';
    const RED_LA = 'red_la';
    const MISSED_UNIT = 'missed_unit';
    const SUMMARY = 'summary';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OFFLINE,
            self::ONLINE,
            self::BOOT,
            self::DANGER,
            self::WARNING,
            self::INFO,
            self::SUCCESS,
            self::RED_TEMP,
            self::RED_MEM_TEMP,
            self::RED_CPU_TEMP,
            self::RED_BOARD_TEMP,
            self::RED_FAN,
            self::RED_ASR,
            self::RED_LA,
            self::MISSED_UNIT,
            self::SUMMARY,
        ];
    }
}


