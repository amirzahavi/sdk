<?php
/**
 * CustomDomain
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers.
 *
 * The version of the OpenAPI document: v1.1.27
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ory\Client\Model;

use \ArrayAccess;
use \Ory\Client\ObjectSerializer;

/**
 * CustomDomain Class Doc Comment
 *
 * @category Class
 * @description Custom Hostname
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomDomain implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cookieDomain' => 'string',
        'corsAllowedOrigins' => 'string[]',
        'corsEnabled' => 'bool',
        'createdAt' => '\DateTime',
        'customUiBaseUrl' => 'string',
        'hostname' => 'string',
        'id' => 'string',
        'sslStatus' => 'string',
        'updatedAt' => '\DateTime',
        'verificationErrors' => 'string[]',
        'verificationStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cookieDomain' => null,
        'corsAllowedOrigins' => null,
        'corsEnabled' => null,
        'createdAt' => 'date-time',
        'customUiBaseUrl' => null,
        'hostname' => null,
        'id' => 'uuid',
        'sslStatus' => null,
        'updatedAt' => 'date-time',
        'verificationErrors' => null,
        'verificationStatus' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cookieDomain' => 'cookie_domain',
        'corsAllowedOrigins' => 'cors_allowed_origins',
        'corsEnabled' => 'cors_enabled',
        'createdAt' => 'created_at',
        'customUiBaseUrl' => 'custom_ui_base_url',
        'hostname' => 'hostname',
        'id' => 'id',
        'sslStatus' => 'ssl_status',
        'updatedAt' => 'updated_at',
        'verificationErrors' => 'verification_errors',
        'verificationStatus' => 'verification_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cookieDomain' => 'setCookieDomain',
        'corsAllowedOrigins' => 'setCorsAllowedOrigins',
        'corsEnabled' => 'setCorsEnabled',
        'createdAt' => 'setCreatedAt',
        'customUiBaseUrl' => 'setCustomUiBaseUrl',
        'hostname' => 'setHostname',
        'id' => 'setId',
        'sslStatus' => 'setSslStatus',
        'updatedAt' => 'setUpdatedAt',
        'verificationErrors' => 'setVerificationErrors',
        'verificationStatus' => 'setVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cookieDomain' => 'getCookieDomain',
        'corsAllowedOrigins' => 'getCorsAllowedOrigins',
        'corsEnabled' => 'getCorsEnabled',
        'createdAt' => 'getCreatedAt',
        'customUiBaseUrl' => 'getCustomUiBaseUrl',
        'hostname' => 'getHostname',
        'id' => 'getId',
        'sslStatus' => 'getSslStatus',
        'updatedAt' => 'getUpdatedAt',
        'verificationErrors' => 'getVerificationErrors',
        'verificationStatus' => 'getVerificationStatus'
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
        return self::$openAPIModelName;
    }

    const SSL_STATUS_INITIALIZING = 'initializing';
    const SSL_STATUS_PENDING_VALIDATION = 'pending_validation';
    const SSL_STATUS_DELETED = 'deleted';
    const SSL_STATUS_PENDING_ISSUANCE = 'pending_issuance';
    const SSL_STATUS_PENDING_DEPLOYMENT = 'pending_deployment';
    const SSL_STATUS_PENDING_DELETION = 'pending_deletion';
    const SSL_STATUS_PENDING_EXPIRATION = 'pending_expiration';
    const SSL_STATUS_EXPIRED = 'expired';
    const SSL_STATUS_ACTIVE = 'active';
    const SSL_STATUS_INITIALIZING_TIMED_OUT = 'initializing_timed_out';
    const SSL_STATUS_VALIDATION_TIMED_OUT = 'validation_timed_out';
    const SSL_STATUS_ISSUANCE_TIMED_OUT = 'issuance_timed_out';
    const SSL_STATUS_DEPLOYMENT_TIMED_OUT = 'deployment_timed_out';
    const SSL_STATUS_DELETION_TIMED_OUT = 'deletion_timed_out';
    const SSL_STATUS_PENDING_CLEANUP = 'pending_cleanup';
    const SSL_STATUS_STAGING_DEPLOYMENT = 'staging_deployment';
    const SSL_STATUS_STAGING_ACTIVE = 'staging_active';
    const SSL_STATUS_DEACTIVATING = 'deactivating';
    const SSL_STATUS_INACTIVE = 'inactive';
    const SSL_STATUS_BACKUP_ISSUED = 'backup_issued';
    const SSL_STATUS_HOLDING_DEPLOYMENT = 'holding_deployment';
    const SSL_STATUS_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSslStatusAllowableValues()
    {
        return [
            self::SSL_STATUS_INITIALIZING,
            self::SSL_STATUS_PENDING_VALIDATION,
            self::SSL_STATUS_DELETED,
            self::SSL_STATUS_PENDING_ISSUANCE,
            self::SSL_STATUS_PENDING_DEPLOYMENT,
            self::SSL_STATUS_PENDING_DELETION,
            self::SSL_STATUS_PENDING_EXPIRATION,
            self::SSL_STATUS_EXPIRED,
            self::SSL_STATUS_ACTIVE,
            self::SSL_STATUS_INITIALIZING_TIMED_OUT,
            self::SSL_STATUS_VALIDATION_TIMED_OUT,
            self::SSL_STATUS_ISSUANCE_TIMED_OUT,
            self::SSL_STATUS_DEPLOYMENT_TIMED_OUT,
            self::SSL_STATUS_DELETION_TIMED_OUT,
            self::SSL_STATUS_PENDING_CLEANUP,
            self::SSL_STATUS_STAGING_DEPLOYMENT,
            self::SSL_STATUS_STAGING_ACTIVE,
            self::SSL_STATUS_DEACTIVATING,
            self::SSL_STATUS_INACTIVE,
            self::SSL_STATUS_BACKUP_ISSUED,
            self::SSL_STATUS_HOLDING_DEPLOYMENT,
            self::SSL_STATUS_EMPTY,
        ];
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
        $this->container['cookieDomain'] = $data['cookieDomain'] ?? null;
        $this->container['corsAllowedOrigins'] = $data['corsAllowedOrigins'] ?? null;
        $this->container['corsEnabled'] = $data['corsEnabled'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['customUiBaseUrl'] = $data['customUiBaseUrl'] ?? null;
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['sslStatus'] = $data['sslStatus'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['verificationErrors'] = $data['verificationErrors'] ?? null;
        $this->container['verificationStatus'] = $data['verificationStatus'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSslStatusAllowableValues();
        if (!is_null($this->container['sslStatus']) && !in_array($this->container['sslStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sslStatus', must be one of '%s'",
                $this->container['sslStatus'],
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
     * Gets cookieDomain
     *
     * @return string|null
     */
    public function getCookieDomain()
    {
        return $this->container['cookieDomain'];
    }

    /**
     * Sets cookieDomain
     *
     * @param string|null $cookieDomain cookieDomain
     *
     * @return self
     */
    public function setCookieDomain($cookieDomain)
    {
        $this->container['cookieDomain'] = $cookieDomain;

        return $this;
    }

    /**
     * Gets corsAllowedOrigins
     *
     * @return string[]|null
     */
    public function getCorsAllowedOrigins()
    {
        return $this->container['corsAllowedOrigins'];
    }

    /**
     * Sets corsAllowedOrigins
     *
     * @param string[]|null $corsAllowedOrigins corsAllowedOrigins
     *
     * @return self
     */
    public function setCorsAllowedOrigins($corsAllowedOrigins)
    {
        $this->container['corsAllowedOrigins'] = $corsAllowedOrigins;

        return $this;
    }

    /**
     * Gets corsEnabled
     *
     * @return bool|null
     */
    public function getCorsEnabled()
    {
        return $this->container['corsEnabled'];
    }

    /**
     * Sets corsEnabled
     *
     * @param bool|null $corsEnabled corsEnabled
     *
     * @return self
     */
    public function setCorsEnabled($corsEnabled)
    {
        $this->container['corsEnabled'] = $corsEnabled;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets customUiBaseUrl
     *
     * @return string|null
     */
    public function getCustomUiBaseUrl()
    {
        return $this->container['customUiBaseUrl'];
    }

    /**
     * Sets customUiBaseUrl
     *
     * @param string|null $customUiBaseUrl customUiBaseUrl
     *
     * @return self
     */
    public function setCustomUiBaseUrl($customUiBaseUrl)
    {
        $this->container['customUiBaseUrl'] = $customUiBaseUrl;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sslStatus
     *
     * @return string|null
     */
    public function getSslStatus()
    {
        return $this->container['sslStatus'];
    }

    /**
     * Sets sslStatus
     *
     * @param string|null $sslStatus sslStatus
     *
     * @return self
     */
    public function setSslStatus($sslStatus)
    {
        $allowedValues = $this->getSslStatusAllowableValues();
        if (!is_null($sslStatus) && !in_array($sslStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sslStatus', must be one of '%s'",
                    $sslStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sslStatus'] = $sslStatus;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets verificationErrors
     *
     * @return string[]|null
     */
    public function getVerificationErrors()
    {
        return $this->container['verificationErrors'];
    }

    /**
     * Sets verificationErrors
     *
     * @param string[]|null $verificationErrors verificationErrors
     *
     * @return self
     */
    public function setVerificationErrors($verificationErrors)
    {
        $this->container['verificationErrors'] = $verificationErrors;

        return $this;
    }

    /**
     * Gets verificationStatus
     *
     * @return string|null
     */
    public function getVerificationStatus()
    {
        return $this->container['verificationStatus'];
    }

    /**
     * Sets verificationStatus
     *
     * @param string|null $verificationStatus verificationStatus
     *
     * @return self
     */
    public function setVerificationStatus($verificationStatus)
    {
        $this->container['verificationStatus'] = $verificationStatus;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


