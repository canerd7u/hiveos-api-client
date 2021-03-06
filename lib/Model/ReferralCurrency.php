<?php
/**
 * ReferralCurrency
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
 * ReferralCurrency Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReferralCurrency
{
    /**
     * Possible values of this enum
     */
    const BTC = 'BTC';
    const ETH = 'ETH';
    const XRP = 'XRP';
    const LTC = 'LTC';
    const ZEC = 'ZEC';
    const ETC = 'ETC';
    const BCH = 'BCH';
    const XMR = 'XMR';
    const USDT = 'USDT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BTC,
            self::ETH,
            self::XRP,
            self::LTC,
            self::ZEC,
            self::ETC,
            self::BCH,
            self::XMR,
            self::USDT,
        ];
    }
}


