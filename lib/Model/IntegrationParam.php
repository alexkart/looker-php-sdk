<?php
/**
 * IntegrationParam
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 4.0 Reference
 *
 * API 4.0 is the current release of the Looker API. API 3.1 is deprecated.  ### Authorization  The classic method of API authorization uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://cloud.google.com/looker/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://cloud.google.com/looker/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://cloud.google.com/looker/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://cloud.google.com/looker/docs/r/api/versioning).   ### In This Release  API 4.0 version was introduced to make adjustments to API functions, parameters, and response types to fix bugs and inconsistencies. These changes fall outside the bounds of non-breaking additive changes we can make to the previous API 3.1.  One benefit of these type adjustments in API 4.0 is dramatically better support for strongly typed languages like TypeScript, Kotlin, Swift, Go, C#, and more.  See the [API 4.0 GA announcement](https://developers.looker.com/api/advanced-usage/version-4-ga) for more information about API 4.0.  The API Explorer can be used to [interactively compare](https://cloud.google.com/looker/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://cloud.google.com/looker/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 4.0.23.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * IntegrationParam Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationParam';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'label' => 'string',
        'description' => 'string',
        'required' => 'bool',
        'has_value' => 'bool',
        'value' => 'string',
        'user_attribute_name' => 'string',
        'sensitive' => 'bool',
        'per_user' => 'bool',
        'delegate_oauth_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'label' => null,
        'description' => null,
        'required' => null,
        'has_value' => null,
        'value' => null,
        'user_attribute_name' => null,
        'sensitive' => null,
        'per_user' => null,
        'delegate_oauth_url' => null
    ];

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
        'name' => 'name',
        'label' => 'label',
        'description' => 'description',
        'required' => 'required',
        'has_value' => 'has_value',
        'value' => 'value',
        'user_attribute_name' => 'user_attribute_name',
        'sensitive' => 'sensitive',
        'per_user' => 'per_user',
        'delegate_oauth_url' => 'delegate_oauth_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'required' => 'setRequired',
        'has_value' => 'setHasValue',
        'value' => 'setValue',
        'user_attribute_name' => 'setUserAttributeName',
        'sensitive' => 'setSensitive',
        'per_user' => 'setPerUser',
        'delegate_oauth_url' => 'setDelegateOauthUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'required' => 'getRequired',
        'has_value' => 'getHasValue',
        'value' => 'getValue',
        'user_attribute_name' => 'getUserAttributeName',
        'sensitive' => 'getSensitive',
        'per_user' => 'getPerUser',
        'delegate_oauth_url' => 'getDelegateOauthUrl'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['has_value'] = isset($data['has_value']) ? $data['has_value'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['user_attribute_name'] = isset($data['user_attribute_name']) ? $data['user_attribute_name'] : null;
        $this->container['sensitive'] = isset($data['sensitive']) ? $data['sensitive'] : null;
        $this->container['per_user'] = isset($data['per_user']) ? $data['per_user'] : null;
        $this->container['delegate_oauth_url'] = isset($data['delegate_oauth_url']) ? $data['delegate_oauth_url'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the parameter.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label of the parameter.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param string $description Short description of the parameter.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Whether the parameter is required to be set to use the destination. If unspecified, this defaults to false.
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets has_value
     *
     * @return bool
     */
    public function getHasValue()
    {
        return $this->container['has_value'];
    }

    /**
     * Sets has_value
     *
     * @param bool $has_value Whether the parameter has a value set.
     *
     * @return $this
     */
    public function setHasValue($has_value)
    {
        $this->container['has_value'] = $has_value;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The current value of the parameter. Always null if the value is sensitive. When writing, null values will be ignored. Set the value to an empty string to clear it.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets user_attribute_name
     *
     * @return string
     */
    public function getUserAttributeName()
    {
        return $this->container['user_attribute_name'];
    }

    /**
     * Sets user_attribute_name
     *
     * @param string $user_attribute_name When present, the param's value comes from this user attribute instead of the 'value' parameter. Set to null to use the 'value'.
     *
     * @return $this
     */
    public function setUserAttributeName($user_attribute_name)
    {
        $this->container['user_attribute_name'] = $user_attribute_name;

        return $this;
    }

    /**
     * Gets sensitive
     *
     * @return bool
     */
    public function getSensitive()
    {
        return $this->container['sensitive'];
    }

    /**
     * Sets sensitive
     *
     * @param bool $sensitive Whether the parameter contains sensitive data like API credentials. If unspecified, this defaults to true.
     *
     * @return $this
     */
    public function setSensitive($sensitive)
    {
        $this->container['sensitive'] = $sensitive;

        return $this;
    }

    /**
     * Gets per_user
     *
     * @return bool
     */
    public function getPerUser()
    {
        return $this->container['per_user'];
    }

    /**
     * Sets per_user
     *
     * @param bool $per_user When true, this parameter must be assigned to a user attribute in the admin panel (instead of a constant value), and that value may be updated by the user as part of the integration flow.
     *
     * @return $this
     */
    public function setPerUser($per_user)
    {
        $this->container['per_user'] = $per_user;

        return $this;
    }

    /**
     * Gets delegate_oauth_url
     *
     * @return string
     */
    public function getDelegateOauthUrl()
    {
        return $this->container['delegate_oauth_url'];
    }

    /**
     * Sets delegate_oauth_url
     *
     * @param string $delegate_oauth_url When present, the param represents the oauth url the user will be taken to.
     *
     * @return $this
     */
    public function setDelegateOauthUrl($delegate_oauth_url)
    {
        $this->container['delegate_oauth_url'] = $delegate_oauth_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


