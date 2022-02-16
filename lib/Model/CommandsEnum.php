<?php
/**
 * CommandsEnum
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
 * CommandsEnum Class Doc Comment
 *
 * @category Class
 * @description Command name
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommandsEnum
{
    /**
     * Possible values of this enum
     */
    const REBOOT = 'reboot';
    const SHUTDOWN = 'shutdown';
    const UPGRADE = 'upgrade';
    const MINER = 'miner';
    const TELECONSOLE = 'teleconsole';
    const HSSH = 'hssh';
    const EXEC = 'exec';
    const AMD_DOWNLOAD = 'amd_download';
    const AMD_UPLOAD = 'amd_upload';
    const NVIDIA_DOWNLOAD = 'nvidia_download';
    const NVIDIA_UPLOAD = 'nvidia_upload';
    const ASIC_UPGRADE = 'asic_upgrade';
    const OCTOFAN_RECALIBRATE = 'octofan_recalibrate';
    const BENCHMARK_STOP = 'benchmark_stop';
    const DONNAGER_RELAY_SWITCH = 'donnager_relay_switch';
    const POOL_TEST = 'pool_test';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REBOOT,
            self::SHUTDOWN,
            self::UPGRADE,
            self::MINER,
            self::TELECONSOLE,
            self::HSSH,
            self::EXEC,
            self::AMD_DOWNLOAD,
            self::AMD_UPLOAD,
            self::NVIDIA_DOWNLOAD,
            self::NVIDIA_UPLOAD,
            self::ASIC_UPGRADE,
            self::OCTOFAN_RECALIBRATE,
            self::BENCHMARK_STOP,
            self::DONNAGER_RELAY_SWITCH,
            self::POOL_TEST,
        ];
    }
}


