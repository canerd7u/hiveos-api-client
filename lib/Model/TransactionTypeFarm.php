<?php
/**
 * TransactionTypeFarm
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
 * TransactionTypeFarm Class Doc Comment
 *
 * @category Class
 * @description Transaction type: * 2 - Daily service usage * 4 - Gift of fate * 7 - Received from User * 10 - Sent to Farm * 11 - Received from Farm
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionTypeFarm
{
    /**
     * Possible values of this enum
     */
    const 2 = 2;
    const 4 = 4;
    const 7 = 7;
    const 10 = 10;
    const 11 = 11;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::2,
            self::4,
            self::7,
            self::10,
            self::11,
        ];
    }
}


