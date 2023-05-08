<?php
/**
 * OidcUserInfo
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
 * OidcUserInfo Class Doc Comment
 *
 * @category Class
 * @description OpenID Connect Userinfo
 * @package  Ory\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OidcUserInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'oidcUserInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'birthdate' => 'string',
        'email' => 'string',
        'emailVerified' => 'bool',
        'familyName' => 'string',
        'gender' => 'string',
        'givenName' => 'string',
        'locale' => 'string',
        'middleName' => 'string',
        'name' => 'string',
        'nickname' => 'string',
        'phoneNumber' => 'string',
        'phoneNumberVerified' => 'bool',
        'picture' => 'string',
        'preferredUsername' => 'string',
        'profile' => 'string',
        'sub' => 'string',
        'updatedAt' => 'int',
        'website' => 'string',
        'zoneinfo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'birthdate' => null,
        'email' => null,
        'emailVerified' => null,
        'familyName' => null,
        'gender' => null,
        'givenName' => null,
        'locale' => null,
        'middleName' => null,
        'name' => null,
        'nickname' => null,
        'phoneNumber' => null,
        'phoneNumberVerified' => null,
        'picture' => null,
        'preferredUsername' => null,
        'profile' => null,
        'sub' => null,
        'updatedAt' => 'int64',
        'website' => null,
        'zoneinfo' => null
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
        'birthdate' => 'birthdate',
        'email' => 'email',
        'emailVerified' => 'email_verified',
        'familyName' => 'family_name',
        'gender' => 'gender',
        'givenName' => 'given_name',
        'locale' => 'locale',
        'middleName' => 'middle_name',
        'name' => 'name',
        'nickname' => 'nickname',
        'phoneNumber' => 'phone_number',
        'phoneNumberVerified' => 'phone_number_verified',
        'picture' => 'picture',
        'preferredUsername' => 'preferred_username',
        'profile' => 'profile',
        'sub' => 'sub',
        'updatedAt' => 'updated_at',
        'website' => 'website',
        'zoneinfo' => 'zoneinfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birthdate' => 'setBirthdate',
        'email' => 'setEmail',
        'emailVerified' => 'setEmailVerified',
        'familyName' => 'setFamilyName',
        'gender' => 'setGender',
        'givenName' => 'setGivenName',
        'locale' => 'setLocale',
        'middleName' => 'setMiddleName',
        'name' => 'setName',
        'nickname' => 'setNickname',
        'phoneNumber' => 'setPhoneNumber',
        'phoneNumberVerified' => 'setPhoneNumberVerified',
        'picture' => 'setPicture',
        'preferredUsername' => 'setPreferredUsername',
        'profile' => 'setProfile',
        'sub' => 'setSub',
        'updatedAt' => 'setUpdatedAt',
        'website' => 'setWebsite',
        'zoneinfo' => 'setZoneinfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birthdate' => 'getBirthdate',
        'email' => 'getEmail',
        'emailVerified' => 'getEmailVerified',
        'familyName' => 'getFamilyName',
        'gender' => 'getGender',
        'givenName' => 'getGivenName',
        'locale' => 'getLocale',
        'middleName' => 'getMiddleName',
        'name' => 'getName',
        'nickname' => 'getNickname',
        'phoneNumber' => 'getPhoneNumber',
        'phoneNumberVerified' => 'getPhoneNumberVerified',
        'picture' => 'getPicture',
        'preferredUsername' => 'getPreferredUsername',
        'profile' => 'getProfile',
        'sub' => 'getSub',
        'updatedAt' => 'getUpdatedAt',
        'website' => 'getWebsite',
        'zoneinfo' => 'getZoneinfo'
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
        $this->container['birthdate'] = $data['birthdate'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['emailVerified'] = $data['emailVerified'] ?? null;
        $this->container['familyName'] = $data['familyName'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['givenName'] = $data['givenName'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['middleName'] = $data['middleName'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['phoneNumber'] = $data['phoneNumber'] ?? null;
        $this->container['phoneNumberVerified'] = $data['phoneNumberVerified'] ?? null;
        $this->container['picture'] = $data['picture'] ?? null;
        $this->container['preferredUsername'] = $data['preferredUsername'] ?? null;
        $this->container['profile'] = $data['profile'] ?? null;
        $this->container['sub'] = $data['sub'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['zoneinfo'] = $data['zoneinfo'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets birthdate
     *
     * @return string|null
     */
    public function getBirthdate()
    {
        return $this->container['birthdate'];
    }

    /**
     * Sets birthdate
     *
     * @param string|null $birthdate End-User's birthday, represented as an ISO 8601:2004 [ISO8601‑2004] YYYY-MM-DD format. The year MAY be 0000, indicating that it is omitted. To represent only the year, YYYY format is allowed. Note that depending on the underlying platform's date related function, providing just year can result in varying month and day, so the implementers need to take this factor into account to correctly process the dates.
     *
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->container['birthdate'] = $birthdate;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email End-User's preferred e-mail address. Its value MUST conform to the RFC 5322 [RFC5322] addr-spec syntax. The RP MUST NOT rely upon this value being unique, as discussed in Section 5.7.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets emailVerified
     *
     * @return bool|null
     */
    public function getEmailVerified()
    {
        return $this->container['emailVerified'];
    }

    /**
     * Sets emailVerified
     *
     * @param bool|null $emailVerified True if the End-User's e-mail address has been verified; otherwise false. When this Claim Value is true, this means that the OP took affirmative steps to ensure that this e-mail address was controlled by the End-User at the time the verification was performed. The means by which an e-mail address is verified is context-specific, and dependent upon the trust framework or contractual agreements within which the parties are operating.
     *
     * @return self
     */
    public function setEmailVerified($emailVerified)
    {
        $this->container['emailVerified'] = $emailVerified;

        return $this;
    }

    /**
     * Gets familyName
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['familyName'];
    }

    /**
     * Sets familyName
     *
     * @param string|null $familyName Surname(s) or last name(s) of the End-User. Note that in some cultures, people can have multiple family names or no family name; all can be present, with the names being separated by space characters.
     *
     * @return self
     */
    public function setFamilyName($familyName)
    {
        $this->container['familyName'] = $familyName;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender End-User's gender. Values defined by this specification are female and male. Other values MAY be used when neither of the defined values are applicable.
     *
     * @return self
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets givenName
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['givenName'];
    }

    /**
     * Sets givenName
     *
     * @param string|null $givenName Given name(s) or first name(s) of the End-User. Note that in some cultures, people can have multiple given names; all can be present, with the names being separated by space characters.
     *
     * @return self
     */
    public function setGivenName($givenName)
    {
        $this->container['givenName'] = $givenName;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale End-User's locale, represented as a BCP47 [RFC5646] language tag. This is typically an ISO 639-1 Alpha-2 [ISO639‑1] language code in lowercase and an ISO 3166-1 Alpha-2 [ISO3166‑1] country code in uppercase, separated by a dash. For example, en-US or fr-CA. As a compatibility note, some implementations have used an underscore as the separator rather than a dash, for example, en_US; Relying Parties MAY choose to accept this locale syntax as well.
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets middleName
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     *
     * @param string|null $middleName Middle name(s) of the End-User. Note that in some cultures, people can have multiple middle names; all can be present, with the names being separated by space characters. Also note that in some cultures, middle names are not used.
     *
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->container['middleName'] = $middleName;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name End-User's full name in displayable form including all name parts, possibly including titles and suffixes, ordered according to the End-User's locale and preferences.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname Casual name of the End-User that may or may not be the same as the given_name. For instance, a nickname value of Mike might be returned alongside a given_name value of Michael.
     *
     * @return self
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber End-User's preferred telephone number. E.164 [E.164] is RECOMMENDED as the format of this Claim, for example, +1 (425) 555-1212 or +56 (2) 687 2400. If the phone number contains an extension, it is RECOMMENDED that the extension be represented using the RFC 3966 [RFC3966] extension syntax, for example, +1 (604) 555-1234;ext=5678.
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets phoneNumberVerified
     *
     * @return bool|null
     */
    public function getPhoneNumberVerified()
    {
        return $this->container['phoneNumberVerified'];
    }

    /**
     * Sets phoneNumberVerified
     *
     * @param bool|null $phoneNumberVerified True if the End-User's phone number has been verified; otherwise false. When this Claim Value is true, this means that the OP took affirmative steps to ensure that this phone number was controlled by the End-User at the time the verification was performed. The means by which a phone number is verified is context-specific, and dependent upon the trust framework or contractual agreements within which the parties are operating. When true, the phone_number Claim MUST be in E.164 format and any extensions MUST be represented in RFC 3966 format.
     *
     * @return self
     */
    public function setPhoneNumberVerified($phoneNumberVerified)
    {
        $this->container['phoneNumberVerified'] = $phoneNumberVerified;

        return $this;
    }

    /**
     * Gets picture
     *
     * @return string|null
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     *
     * @param string|null $picture URL of the End-User's profile picture. This URL MUST refer to an image file (for example, a PNG, JPEG, or GIF image file), rather than to a Web page containing an image. Note that this URL SHOULD specifically reference a profile photo of the End-User suitable for displaying when describing the End-User, rather than an arbitrary photo taken by the End-User.
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets preferredUsername
     *
     * @return string|null
     */
    public function getPreferredUsername()
    {
        return $this->container['preferredUsername'];
    }

    /**
     * Sets preferredUsername
     *
     * @param string|null $preferredUsername Non-unique shorthand name by which the End-User wishes to be referred to at the RP, such as janedoe or j.doe. This value MAY be any valid JSON string including special characters such as @, /, or whitespace.
     *
     * @return self
     */
    public function setPreferredUsername($preferredUsername)
    {
        $this->container['preferredUsername'] = $preferredUsername;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string|null $profile URL of the End-User's profile page. The contents of this Web page SHOULD be about the End-User.
     *
     * @return self
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets sub
     *
     * @return string|null
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     *
     * @param string|null $sub Subject - Identifier for the End-User at the IssuerURL.
     *
     * @return self
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return int|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param int|null $updatedAt Time the End-User's information was last updated. Its value is a JSON number representing the number of seconds from 1970-01-01T0:0:0Z as measured in UTC until the date/time.
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website URL of the End-User's Web page or blog. This Web page SHOULD contain information published by the End-User or an organization that the End-User is affiliated with.
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets zoneinfo
     *
     * @return string|null
     */
    public function getZoneinfo()
    {
        return $this->container['zoneinfo'];
    }

    /**
     * Sets zoneinfo
     *
     * @param string|null $zoneinfo String from zoneinfo [zoneinfo] time zone database representing the End-User's time zone. For example, Europe/Paris or America/Los_Angeles.
     *
     * @return self
     */
    public function setZoneinfo($zoneinfo)
    {
        $this->container['zoneinfo'] = $zoneinfo;

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


