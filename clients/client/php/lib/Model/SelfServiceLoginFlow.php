<?php
/**
 * SelfServiceLoginFlow
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
 * The version of the OpenAPI document: v0.0.1-alpha.80
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
 * SelfServiceLoginFlow Class Doc Comment
 *
 * @category Class
 * @description This object represents a login flow. A login flow is initiated at the \&quot;Initiate Login API / Browser Flow\&quot; endpoint by a client.  Once a login flow is completed successfully, a session cookie or session token will be issued.
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SelfServiceLoginFlow implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'selfServiceLoginFlow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => '\Ory\Client\Model\IdentityCredentialsType',
        'createdAt' => '\DateTime',
        'expiresAt' => '\DateTime',
        'id' => 'string',
        'issuedAt' => '\DateTime',
        'refresh' => 'bool',
        'requestUrl' => 'string',
        'requestedAal' => '\Ory\Client\Model\AuthenticatorAssuranceLevel',
        'returnTo' => 'string',
        'type' => 'string',
        'ui' => '\Ory\Client\Model\UiContainer',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'createdAt' => 'date-time',
        'expiresAt' => 'date-time',
        'id' => 'uuid4',
        'issuedAt' => 'date-time',
        'refresh' => null,
        'requestUrl' => null,
        'requestedAal' => null,
        'returnTo' => null,
        'type' => null,
        'ui' => null,
        'updatedAt' => 'date-time'
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
        'active' => 'active',
        'createdAt' => 'created_at',
        'expiresAt' => 'expires_at',
        'id' => 'id',
        'issuedAt' => 'issued_at',
        'refresh' => 'refresh',
        'requestUrl' => 'request_url',
        'requestedAal' => 'requested_aal',
        'returnTo' => 'return_to',
        'type' => 'type',
        'ui' => 'ui',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'createdAt' => 'setCreatedAt',
        'expiresAt' => 'setExpiresAt',
        'id' => 'setId',
        'issuedAt' => 'setIssuedAt',
        'refresh' => 'setRefresh',
        'requestUrl' => 'setRequestUrl',
        'requestedAal' => 'setRequestedAal',
        'returnTo' => 'setReturnTo',
        'type' => 'setType',
        'ui' => 'setUi',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'createdAt' => 'getCreatedAt',
        'expiresAt' => 'getExpiresAt',
        'id' => 'getId',
        'issuedAt' => 'getIssuedAt',
        'refresh' => 'getRefresh',
        'requestUrl' => 'getRequestUrl',
        'requestedAal' => 'getRequestedAal',
        'returnTo' => 'getReturnTo',
        'type' => 'getType',
        'ui' => 'getUi',
        'updatedAt' => 'getUpdatedAt'
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['expiresAt'] = $data['expiresAt'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['issuedAt'] = $data['issuedAt'] ?? null;
        $this->container['refresh'] = $data['refresh'] ?? null;
        $this->container['requestUrl'] = $data['requestUrl'] ?? null;
        $this->container['requestedAal'] = $data['requestedAal'] ?? null;
        $this->container['returnTo'] = $data['returnTo'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['ui'] = $data['ui'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['expiresAt'] === null) {
            $invalidProperties[] = "'expiresAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['issuedAt'] === null) {
            $invalidProperties[] = "'issuedAt' can't be null";
        }
        if ($this->container['requestUrl'] === null) {
            $invalidProperties[] = "'requestUrl' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['ui'] === null) {
            $invalidProperties[] = "'ui' can't be null";
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
     * @return \Ory\Client\Model\IdentityCredentialsType|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param \Ory\Client\Model\IdentityCredentialsType|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param \DateTime|null $createdAt CreatedAt is a helper struct field for gobuffalo.pop.
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     *
     * @param \DateTime $expiresAt ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to log in, a new flow has to be initiated.
     *
     * @return self
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issuedAt
     *
     * @return \DateTime
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     *
     * @param \DateTime $issuedAt IssuedAt is the time (UTC) when the flow started.
     *
     * @return self
     */
    public function setIssuedAt($issuedAt)
    {
        $this->container['issuedAt'] = $issuedAt;

        return $this;
    }

    /**
     * Gets refresh
     *
     * @return bool|null
     */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
     * Sets refresh
     *
     * @param bool|null $refresh Refresh stores whether this login flow should enforce re-authentication.
     *
     * @return self
     */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;

        return $this;
    }

    /**
     * Gets requestUrl
     *
     * @return string
     */
    public function getRequestUrl()
    {
        return $this->container['requestUrl'];
    }

    /**
     * Sets requestUrl
     *
     * @param string $requestUrl RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL's path or query for example.
     *
     * @return self
     */
    public function setRequestUrl($requestUrl)
    {
        $this->container['requestUrl'] = $requestUrl;

        return $this;
    }

    /**
     * Gets requestedAal
     *
     * @return \Ory\Client\Model\AuthenticatorAssuranceLevel|null
     */
    public function getRequestedAal()
    {
        return $this->container['requestedAal'];
    }

    /**
     * Sets requestedAal
     *
     * @param \Ory\Client\Model\AuthenticatorAssuranceLevel|null $requestedAal requestedAal
     *
     * @return self
     */
    public function setRequestedAal($requestedAal)
    {
        $this->container['requestedAal'] = $requestedAal;

        return $this;
    }

    /**
     * Gets returnTo
     *
     * @return string|null
     */
    public function getReturnTo()
    {
        return $this->container['returnTo'];
    }

    /**
     * Sets returnTo
     *
     * @param string|null $returnTo ReturnTo contains the requested return_to URL.
     *
     * @return self
     */
    public function setReturnTo($returnTo)
    {
        $this->container['returnTo'] = $returnTo;

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
     * @param string $type The flow type can either be `api` or `browser`.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets ui
     *
     * @return \Ory\Client\Model\UiContainer
     */
    public function getUi()
    {
        return $this->container['ui'];
    }

    /**
     * Sets ui
     *
     * @param \Ory\Client\Model\UiContainer $ui ui
     *
     * @return self
     */
    public function setUi($ui)
    {
        $this->container['ui'] = $ui;

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
     * @param \DateTime|null $updatedAt UpdatedAt is a helper struct field for gobuffalo.pop.
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

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


