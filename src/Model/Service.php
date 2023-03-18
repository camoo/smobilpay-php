<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smobilpay S3P API
 *
 * Smobilpay Third Party API FOR PAYMENT COLLECTIONS
 *
 * OpenAPI spec version: 3.0.4
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

use ArrayAccess;
use Maviance\S3PApiClient\ObjectSerializer;

/**
 * Service Class Doc Comment
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Service implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    public const TYPE_SEARCHABLE_BILL = 'SEARCHABLE_BILL';

    public const TYPE_NON_SEARCHABLE_BILL = 'NON_SEARCHABLE_BILL';

    public const TYPE_PRODUCT = 'PRODUCT';

    public const TYPE_TOPUP = 'TOPUP';

    public const TYPE_SUBSCRIPTION = 'SUBSCRIPTION';

    public const TYPE_CASHIN = 'CASHIN';

    public const TYPE_CASHOUT = 'CASHOUT';

    public const TYPE_VOUCHER = 'VOUCHER';

    public const STATUS_ACTIVE = 'Active';

    public const STATUS_INACTIVE = 'Inactive';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Service';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'serviceid' => 'int',
        'merchant' => 'string',
        'title' => 'string',
        'description' => 'string',
        'category' => 'string',
        'country' => 'string',
        'localCur' => 'string',
        'type' => 'string',
        'status' => 'string',
        'isReqCustomerName' => 'bool',
        'isReqCustomerAddress' => 'bool',
        'isReqCustomerNumber' => 'bool',
        'isReqServiceNumber' => 'bool',
        'labelCustomerNumber' => '\Maviance\S3PApiClient\Model\I18nText[]',
        'labelServiceNumber' => '\Maviance\S3PApiClient\Model\I18nText[]',
        'isVerifiable' => 'bool',
        'validationMask' => 'string',
        'hint' => '\Maviance\S3PApiClient\Model\I18nText[]',
        'denomination' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'serviceid' => null,
        'merchant' => null,
        'title' => null,
        'description' => null,
        'category' => null,
        'country' => null,
        'localCur' => null,
        'type' => null,
        'status' => null,
        'isReqCustomerName' => null,
        'isReqCustomerAddress' => null,
        'isReqCustomerNumber' => null,
        'isReqServiceNumber' => null,
        'labelCustomerNumber' => null,
        'labelServiceNumber' => null,
        'isVerifiable' => null,
        'validationMask' => null,
        'hint' => null,
        'denomination' => null];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'serviceid' => 'serviceid',
        'merchant' => 'merchant',
        'title' => 'title',
        'description' => 'description',
        'category' => 'category',
        'country' => 'country',
        'localCur' => 'localCur',
        'type' => 'type',
        'status' => 'status',
        'isReqCustomerName' => 'isReqCustomerName',
        'isReqCustomerAddress' => 'isReqCustomerAddress',
        'isReqCustomerNumber' => 'isReqCustomerNumber',
        'isReqServiceNumber' => 'isReqServiceNumber',
        'labelCustomerNumber' => 'labelCustomerNumber',
        'labelServiceNumber' => 'labelServiceNumber',
        'isVerifiable' => 'isVerifiable',
        'validationMask' => 'validationMask',
        'hint' => 'hint',
        'denomination' => 'denomination'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceid' => 'setServiceid',
        'merchant' => 'setMerchant',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'category' => 'setCategory',
        'country' => 'setCountry',
        'localCur' => 'setLocalCur',
        'type' => 'setType',
        'status' => 'setStatus',
        'isReqCustomerName' => 'setIsReqCustomerName',
        'isReqCustomerAddress' => 'setIsReqCustomerAddress',
        'isReqCustomerNumber' => 'setIsReqCustomerNumber',
        'isReqServiceNumber' => 'setIsReqServiceNumber',
        'labelCustomerNumber' => 'setLabelCustomerNumber',
        'labelServiceNumber' => 'setLabelServiceNumber',
        'isVerifiable' => 'setIsVerifiable',
        'validationMask' => 'setValidationMask',
        'hint' => 'setHint',
        'denomination' => 'setDenomination'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceid' => 'getServiceid',
        'merchant' => 'getMerchant',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'category' => 'getCategory',
        'country' => 'getCountry',
        'localCur' => 'getLocalCur',
        'type' => 'getType',
        'status' => 'getStatus',
        'isReqCustomerName' => 'getIsReqCustomerName',
        'isReqCustomerAddress' => 'getIsReqCustomerAddress',
        'isReqCustomerNumber' => 'getIsReqCustomerNumber',
        'isReqServiceNumber' => 'getIsReqServiceNumber',
        'labelCustomerNumber' => 'getLabelCustomerNumber',
        'labelServiceNumber' => 'getLabelServiceNumber',
        'isVerifiable' => 'getIsVerifiable',
        'validationMask' => 'getValidationMask',
        'hint' => 'getHint',
        'denomination' => 'getDenomination'];

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
    public function __construct(?array $data = null)
    {
        $this->container['serviceid'] = isset($data['serviceid']) ? $data['serviceid'] : null;
        $this->container['merchant'] = isset($data['merchant']) ? $data['merchant'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['localCur'] = isset($data['localCur']) ? $data['localCur'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['isReqCustomerName'] = isset($data['isReqCustomerName']) ? $data['isReqCustomerName'] : null;
        $this->container['isReqCustomerAddress'] = isset($data['isReqCustomerAddress']) ? $data['isReqCustomerAddress'] : null;
        $this->container['isReqCustomerNumber'] = isset($data['isReqCustomerNumber']) ? $data['isReqCustomerNumber'] : null;
        $this->container['isReqServiceNumber'] = isset($data['isReqServiceNumber']) ? $data['isReqServiceNumber'] : null;
        $this->container['labelCustomerNumber'] = isset($data['labelCustomerNumber']) ? $data['labelCustomerNumber'] : null;
        $this->container['labelServiceNumber'] = isset($data['labelServiceNumber']) ? $data['labelServiceNumber'] : null;
        $this->container['isVerifiable'] = isset($data['isVerifiable']) ? $data['isVerifiable'] : null;
        $this->container['validationMask'] = isset($data['validationMask']) ? $data['validationMask'] : null;
        $this->container['hint'] = isset($data['hint']) ? $data['hint'] : null;
        $this->container['denomination'] = isset($data['denomination']) ? $data['denomination'] : null;
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEARCHABLE_BILL,
            self::TYPE_NON_SEARCHABLE_BILL,
            self::TYPE_PRODUCT,
            self::TYPE_TOPUP,
            self::TYPE_SUBSCRIPTION,
            self::TYPE_CASHIN,
            self::TYPE_CASHOUT,
            self::TYPE_VOUCHER,        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serviceid'] === null) {
            $invalidProperties[] = "'serviceid' can't be null";
        }
        if ($this->container['merchant'] === null) {
            $invalidProperties[] = "'merchant' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['localCur'] === null) {
            $invalidProperties[] = "'localCur' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['isReqCustomerName'] === null) {
            $invalidProperties[] = "'isReqCustomerName' can't be null";
        }
        if ($this->container['isReqCustomerAddress'] === null) {
            $invalidProperties[] = "'isReqCustomerAddress' can't be null";
        }
        if ($this->container['isReqCustomerNumber'] === null) {
            $invalidProperties[] = "'isReqCustomerNumber' can't be null";
        }
        if ($this->container['isReqServiceNumber'] === null) {
            $invalidProperties[] = "'isReqServiceNumber' can't be null";
        }
        if ($this->container['isVerifiable'] === null) {
            $invalidProperties[] = "'isVerifiable' can't be null";
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
     * Gets serviceid
     *
     * @return int
     */
    public function getServiceid()
    {
        return $this->container['serviceid'];
    }

    /**
     * Sets serviceid
     *
     * @param int $serviceid Unique  service Identifier. Use this value whenever “serviceid” is required in request parameters
     *
     * @return $this
     */
    public function setServiceid($serviceid)
    {
        $this->container['serviceid'] = $serviceid;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return string
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param string $merchant Unique  merchant code
     *
     * @return $this
     */
    public function setMerchant($merchant)
    {
        $this->container['merchant'] = $merchant;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Public name of service
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $description Service description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Category of service
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country of operation (ISO 3166-1 alpha-3)
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets localCur
     *
     * @return string
     */
    public function getLocalCur()
    {
        return $this->container['localCur'];
    }

    /**
     * Sets localCur
     *
     * @param string $localCur Local currency of service. (Format: ISO 4217)
     *
     * @return $this
     */
    public function setLocalCur($localCur)
    {
        $this->container['localCur'] = $localCur;

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
     * @param string $type Type of service. This API will only provide services of the type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Service availability status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets isReqCustomerName
     *
     * @return bool
     */
    public function getIsReqCustomerName()
    {
        return $this->container['isReqCustomerName'];
    }

    /**
     * Sets isReqCustomerName
     *
     * @param bool $isReqCustomerName If set to true (1), the customers full name needs to be provided in the payment collection request.
     *
     * @return $this
     */
    public function setIsReqCustomerName($isReqCustomerName)
    {
        $this->container['isReqCustomerName'] = $isReqCustomerName;

        return $this;
    }

    /**
     * Gets isReqCustomerAddress
     *
     * @return bool
     */
    public function getIsReqCustomerAddress()
    {
        return $this->container['isReqCustomerAddress'];
    }

    /**
     * Sets isReqCustomerAddress
     *
     * @param bool $isReqCustomerAddress If set to true (1), the customers address needs to be provided in the payment collection request.
     *
     * @return $this
     */
    public function setIsReqCustomerAddress($isReqCustomerAddress)
    {
        $this->container['isReqCustomerAddress'] = $isReqCustomerAddress;

        return $this;
    }

    /**
     * Gets isReqCustomerNumber
     *
     * @return bool
     */
    public function getIsReqCustomerNumber()
    {
        return $this->container['isReqCustomerNumber'];
    }

    /**
     * Sets isReqCustomerNumber
     *
     * @param bool $isReqCustomerNumber If set to true (1), a customer number needs to be provided in the payment collection request. Customer number meaning is different for each service.
     *
     * @return $this
     */
    public function setIsReqCustomerNumber($isReqCustomerNumber)
    {
        $this->container['isReqCustomerNumber'] = $isReqCustomerNumber;

        return $this;
    }

    /**
     * Gets isReqServiceNumber
     *
     * @return bool
     */
    public function getIsReqServiceNumber()
    {
        return $this->container['isReqServiceNumber'];
    }

    /**
     * Sets isReqServiceNumber
     *
     * @param bool $isReqServiceNumber If set to true (1), a service number needs to be provided in the payment collection request. Service number meaning is different for each service.
     *
     * @return $this
     */
    public function setIsReqServiceNumber($isReqServiceNumber)
    {
        $this->container['isReqServiceNumber'] = $isReqServiceNumber;

        return $this;
    }

    /**
     * Gets labelCustomerNumber
     *
     * @return \Maviance\S3PApiClient\Model\I18nText[]
     */
    public function getLabelCustomerNumber()
    {
        return $this->container['labelCustomerNumber'];
    }

    /**
     * Sets labelCustomerNumber
     *
     * @param \Maviance\S3PApiClient\Model\I18nText[] $labelCustomerNumber Label for customer number in multiple languages (if available) for this service.
     *
     * @return $this
     */
    public function setLabelCustomerNumber($labelCustomerNumber)
    {
        $this->container['labelCustomerNumber'] = $labelCustomerNumber;

        return $this;
    }

    /**
     * Gets labelServiceNumber
     *
     * @return \Maviance\S3PApiClient\Model\I18nText[]
     */
    public function getLabelServiceNumber()
    {
        return $this->container['labelServiceNumber'];
    }

    /**
     * Sets labelServiceNumber
     *
     * @param \Maviance\S3PApiClient\Model\I18nText[] $labelServiceNumber Label for service number in multiple languages (if available) for this service.
     *
     * @return $this
     */
    public function setLabelServiceNumber($labelServiceNumber)
    {
        $this->container['labelServiceNumber'] = $labelServiceNumber;

        return $this;
    }

    /**
     * Gets isVerifiable
     *
     * @return bool
     */
    public function getIsVerifiable()
    {
        return $this->container['isVerifiable'];
    }

    /**
     * Sets isVerifiable
     *
     * @param bool $isVerifiable If set to true (1), then the service number provided for this service can be verified before making a payment request
     *
     * @return $this
     */
    public function setIsVerifiable($isVerifiable)
    {
        $this->container['isVerifiable'] = $isVerifiable;

        return $this;
    }

    /**
     * Gets validationMask
     *
     * @return string
     */
    public function getValidationMask()
    {
        return $this->container['validationMask'];
    }

    /**
     * Sets validationMask
     *
     * @param string $validationMask Optional mask for the service number entered during a payment for client side validations. All service numbers must comply to the mask in order to pass. The mask is a PCRE regular expression
     *
     * @return $this
     */
    public function setValidationMask($validationMask)
    {
        $this->container['validationMask'] = $validationMask;

        return $this;
    }

    /**
     * Gets hint
     *
     * @return \Maviance\S3PApiClient\Model\I18nText[]
     */
    public function getHint()
    {
        return $this->container['hint'];
    }

    /**
     * Sets hint
     *
     * @param \Maviance\S3PApiClient\Model\I18nText[] $hint Translation texts for the hint notes to be displayed to the customer for this service.
     *
     * @return $this
     */
    public function setHint($hint)
    {
        $this->container['hint'] = $hint;

        return $this;
    }

    /**
     * Gets denomination
     *
     * @return int
     */
    public function getDenomination()
    {
        return $this->container['denomination'];
    }

    /**
     * Sets denomination
     *
     * @param int $denomination Service payment denomination. The payment amount must be a multiple of the denomination value. Example:  |Denomination|Amount|Valid| |-----|-----|-------| |1|100|true| |5|100|true| |200|100|false| |50|60|false|
     *
     * @return $this
     */
    public function setDenomination($denomination)
    {
        $this->container['denomination'] = $denomination;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet(mixed $offset, mixed $value): void
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
     * @param int $offset Offset
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }
}
