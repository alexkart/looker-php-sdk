<?php
/**
 * UserAttribute
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
 * UserAttribute Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'id' => 'string',
        'name' => 'string',
        'label' => 'string',
        'type' => 'string',
        'default_value' => 'string',
        'is_system' => 'bool',
        'is_permanent' => 'bool',
        'value_is_hidden' => 'bool',
        'user_can_view' => 'bool',
        'user_can_edit' => 'bool',
        'hidden_value_domain_whitelist' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'id' => null,
        'name' => null,
        'label' => null,
        'type' => null,
        'default_value' => null,
        'is_system' => null,
        'is_permanent' => null,
        'value_is_hidden' => null,
        'user_can_view' => null,
        'user_can_edit' => null,
        'hidden_value_domain_whitelist' => null
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
        'can' => 'can',
        'id' => 'id',
        'name' => 'name',
        'label' => 'label',
        'type' => 'type',
        'default_value' => 'default_value',
        'is_system' => 'is_system',
        'is_permanent' => 'is_permanent',
        'value_is_hidden' => 'value_is_hidden',
        'user_can_view' => 'user_can_view',
        'user_can_edit' => 'user_can_edit',
        'hidden_value_domain_whitelist' => 'hidden_value_domain_whitelist'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'name' => 'setName',
        'label' => 'setLabel',
        'type' => 'setType',
        'default_value' => 'setDefaultValue',
        'is_system' => 'setIsSystem',
        'is_permanent' => 'setIsPermanent',
        'value_is_hidden' => 'setValueIsHidden',
        'user_can_view' => 'setUserCanView',
        'user_can_edit' => 'setUserCanEdit',
        'hidden_value_domain_whitelist' => 'setHiddenValueDomainWhitelist'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'name' => 'getName',
        'label' => 'getLabel',
        'type' => 'getType',
        'default_value' => 'getDefaultValue',
        'is_system' => 'getIsSystem',
        'is_permanent' => 'getIsPermanent',
        'value_is_hidden' => 'getValueIsHidden',
        'user_can_view' => 'getUserCanView',
        'user_can_edit' => 'getUserCanEdit',
        'hidden_value_domain_whitelist' => 'getHiddenValueDomainWhitelist'
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
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['is_system'] = isset($data['is_system']) ? $data['is_system'] : null;
        $this->container['is_permanent'] = isset($data['is_permanent']) ? $data['is_permanent'] : null;
        $this->container['value_is_hidden'] = isset($data['value_is_hidden']) ? $data['value_is_hidden'] : null;
        $this->container['user_can_view'] = isset($data['user_can_view']) ? $data['user_can_view'] : null;
        $this->container['user_can_edit'] = isset($data['user_can_edit']) ? $data['user_can_edit'] : null;
        $this->container['hidden_value_domain_whitelist'] = isset($data['hidden_value_domain_whitelist']) ? $data['hidden_value_domain_whitelist'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

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
     * @param string $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name Name of user attribute
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
     * @param string $label Human-friendly label for user attribute
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param string $type Type of user attribute (\"string\", \"number\", \"datetime\", \"yesno\", \"zipcode\")
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value Default value for when no value is set on the user
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool $is_system Attribute is a system default
     *
     * @return $this
     */
    public function setIsSystem($is_system)
    {
        $this->container['is_system'] = $is_system;

        return $this;
    }

    /**
     * Gets is_permanent
     *
     * @return bool
     */
    public function getIsPermanent()
    {
        return $this->container['is_permanent'];
    }

    /**
     * Sets is_permanent
     *
     * @param bool $is_permanent Attribute is permanent and cannot be deleted
     *
     * @return $this
     */
    public function setIsPermanent($is_permanent)
    {
        $this->container['is_permanent'] = $is_permanent;

        return $this;
    }

    /**
     * Gets value_is_hidden
     *
     * @return bool
     */
    public function getValueIsHidden()
    {
        return $this->container['value_is_hidden'];
    }

    /**
     * Sets value_is_hidden
     *
     * @param bool $value_is_hidden If true, users will not be able to view values of this attribute
     *
     * @return $this
     */
    public function setValueIsHidden($value_is_hidden)
    {
        $this->container['value_is_hidden'] = $value_is_hidden;

        return $this;
    }

    /**
     * Gets user_can_view
     *
     * @return bool
     */
    public function getUserCanView()
    {
        return $this->container['user_can_view'];
    }

    /**
     * Sets user_can_view
     *
     * @param bool $user_can_view Non-admin users can see the values of their attributes and use them in filters
     *
     * @return $this
     */
    public function setUserCanView($user_can_view)
    {
        $this->container['user_can_view'] = $user_can_view;

        return $this;
    }

    /**
     * Gets user_can_edit
     *
     * @return bool
     */
    public function getUserCanEdit()
    {
        return $this->container['user_can_edit'];
    }

    /**
     * Sets user_can_edit
     *
     * @param bool $user_can_edit Users can change the value of this attribute for themselves
     *
     * @return $this
     */
    public function setUserCanEdit($user_can_edit)
    {
        $this->container['user_can_edit'] = $user_can_edit;

        return $this;
    }

    /**
     * Gets hidden_value_domain_whitelist
     *
     * @return string
     */
    public function getHiddenValueDomainWhitelist()
    {
        return $this->container['hidden_value_domain_whitelist'];
    }

    /**
     * Sets hidden_value_domain_whitelist
     *
     * @param string $hidden_value_domain_whitelist Destinations to which a hidden attribute may be sent. Once set, cannot be edited.
     *
     * @return $this
     */
    public function setHiddenValueDomainWhitelist($hidden_value_domain_whitelist)
    {
        $this->container['hidden_value_domain_whitelist'] = $hidden_value_domain_whitelist;

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


