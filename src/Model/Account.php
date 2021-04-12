<?php
/**
 * Account
 *
 * PHP version 5
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smobilpay S3P API
 *
 * Smobilpay Third Party API FOR PAYMENT COLLECTIONS
 *
 * OpenAPI spec version: 3.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maviance\S3PApiClient\Model;

use \ArrayAccess;
use \Maviance\S3PApiClient\ObjectSerializer;

/**
 * Account Class Doc Comment
 *
 * @category Class
 * @package  Maviance\S3PApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'balance' => 'float',
'currency' => 'string',
'key' => 'string',
'agentId' => 'string',
'agentName' => 'string',
'agentAddress' => 'string',
'agentPhonenumber' => 'string',
'companyName' => 'string',
'companyAddress' => 'string',
'companyPhonenumber' => 'string',
'limitMax' => 'float',
'limitRemaining' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'balance' => 'float',
'currency' => null,
'key' => null,
'agentId' => null,
'agentName' => null,
'agentAddress' => null,
'agentPhonenumber' => null,
'companyName' => null,
'companyAddress' => null,
'companyPhonenumber' => null,
'limitMax' => 'float',
'limitRemaining' => 'float'    ];

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
        'balance' => 'balance',
'currency' => 'currency',
'key' => 'key',
'agentId' => 'agentId',
'agentName' => 'agentName',
'agentAddress' => 'agentAddress',
'agentPhonenumber' => 'agentPhonenumber',
'companyName' => 'companyName',
'companyAddress' => 'companyAddress',
'companyPhonenumber' => 'companyPhonenumber',
'limitMax' => 'limitMax',
'limitRemaining' => 'limitRemaining'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
'currency' => 'setCurrency',
'key' => 'setKey',
'agentId' => 'setAgentId',
'agentName' => 'setAgentName',
'agentAddress' => 'setAgentAddress',
'agentPhonenumber' => 'setAgentPhonenumber',
'companyName' => 'setCompanyName',
'companyAddress' => 'setCompanyAddress',
'companyPhonenumber' => 'setCompanyPhonenumber',
'limitMax' => 'setLimitMax',
'limitRemaining' => 'setLimitRemaining'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
'currency' => 'getCurrency',
'key' => 'getKey',
'agentId' => 'getAgentId',
'agentName' => 'getAgentName',
'agentAddress' => 'getAgentAddress',
'agentPhonenumber' => 'getAgentPhonenumber',
'companyName' => 'getCompanyName',
'companyAddress' => 'getCompanyAddress',
'companyPhonenumber' => 'getCompanyPhonenumber',
'limitMax' => 'getLimitMax',
'limitRemaining' => 'getLimitRemaining'    ];

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
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['agentAddress'] = isset($data['agentAddress']) ? $data['agentAddress'] : null;
        $this->container['agentPhonenumber'] = isset($data['agentPhonenumber']) ? $data['agentPhonenumber'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['companyAddress'] = isset($data['companyAddress']) ? $data['companyAddress'] : null;
        $this->container['companyPhonenumber'] = isset($data['companyPhonenumber']) ? $data['companyPhonenumber'] : null;
        $this->container['limitMax'] = isset($data['limitMax']) ? $data['limitMax'] : null;
        $this->container['limitRemaining'] = isset($data['limitRemaining']) ? $data['limitRemaining'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['agentId'] === null) {
            $invalidProperties[] = "'agentId' can't be null";
        }
        if ($this->container['agentName'] === null) {
            $invalidProperties[] = "'agentName' can't be null";
        }
        if ($this->container['agentAddress'] === null) {
            $invalidProperties[] = "'agentAddress' can't be null";
        }
        if ($this->container['agentPhonenumber'] === null) {
            $invalidProperties[] = "'agentPhonenumber' can't be null";
        }
        if ($this->container['companyName'] === null) {
            $invalidProperties[] = "'companyName' can't be null";
        }
        if ($this->container['companyAddress'] === null) {
            $invalidProperties[] = "'companyAddress' can't be null";
        }
        if ($this->container['companyPhonenumber'] === null) {
            $invalidProperties[] = "'companyPhonenumber' can't be null";
        }
        if ($this->container['limitMax'] === null) {
            $invalidProperties[] = "'limitMax' can't be null";
        }
        if ($this->container['limitRemaining'] === null) {
            $invalidProperties[] = "'limitRemaining' can't be null";
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
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance Remaining amount in account
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
     * @param string $currency Currency of agent balance in system (e.g. XAF)(Format: ISO 4217)
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key Public Access key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets agentId
     *
     * @return string
     */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
     * Sets agentId
     *
     * @param string $agentId Unique Agent Identifier
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;

        return $this;
    }

    /**
     * Gets agentName
     *
     * @return string
     */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
     * Sets agentName
     *
     * @param string $agentName Agent full name
     *
     * @return $this
     */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;

        return $this;
    }

    /**
     * Gets agentAddress
     *
     * @return string
     */
    public function getAgentAddress()
    {
        return $this->container['agentAddress'];
    }

    /**
     * Sets agentAddress
     *
     * @param string $agentAddress Agent full address
     *
     * @return $this
     */
    public function setAgentAddress($agentAddress)
    {
        $this->container['agentAddress'] = $agentAddress;

        return $this;
    }

    /**
     * Gets agentPhonenumber
     *
     * @return string
     */
    public function getAgentPhonenumber()
    {
        return $this->container['agentPhonenumber'];
    }

    /**
     * Sets agentPhonenumber
     *
     * @param string $agentPhonenumber Agent phonenumber
     *
     * @return $this
     */
    public function setAgentPhonenumber($agentPhonenumber)
    {
        $this->container['agentPhonenumber'] = $agentPhonenumber;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string $companyName Collector company name
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets companyAddress
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->container['companyAddress'];
    }

    /**
     * Sets companyAddress
     *
     * @param string $companyAddress Collector company address information
     *
     * @return $this
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->container['companyAddress'] = $companyAddress;

        return $this;
    }

    /**
     * Gets companyPhonenumber
     *
     * @return string
     */
    public function getCompanyPhonenumber()
    {
        return $this->container['companyPhonenumber'];
    }

    /**
     * Sets companyPhonenumber
     *
     * @param string $companyPhonenumber Collector company phonenumber
     *
     * @return $this
     */
    public function setCompanyPhonenumber($companyPhonenumber)
    {
        $this->container['companyPhonenumber'] = $companyPhonenumber;

        return $this;
    }

    /**
     * Gets limitMax
     *
     * @return float
     */
    public function getLimitMax()
    {
        return $this->container['limitMax'];
    }

    /**
     * Sets limitMax
     *
     * @param float $limitMax Daily collection limit – The maximum amount that can be collected per day by this account.
     *
     * @return $this
     */
    public function setLimitMax($limitMax)
    {
        $this->container['limitMax'] = $limitMax;

        return $this;
    }

    /**
     * Gets limitRemaining
     *
     * @return float
     */
    public function getLimitRemaining()
    {
        return $this->container['limitRemaining'];
    }

    /**
     * Sets limitRemaining
     *
     * @param float $limitRemaining Collection limit remaining for the day (reset at 00:00 UTC).
     *
     * @return $this
     */
    public function setLimitRemaining($limitRemaining)
    {
        $this->container['limitRemaining'] = $limitRemaining;

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
