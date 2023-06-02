<?php
/**
 * DashboardFilter
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
 * DashboardFilter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DashboardFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'id' => 'string',
        'dashboard_id' => 'string',
        'name' => 'string',
        'title' => 'string',
        'type' => 'string',
        'default_value' => 'string',
        'model' => 'string',
        'explore' => 'string',
        'dimension' => 'string',
        'field' => 'object',
        'row' => 'int',
        'listens_to_filters' => 'string[]',
        'allow_multiple_values' => 'bool',
        'required' => 'bool',
        'ui_config' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'id' => null,
        'dashboard_id' => null,
        'name' => null,
        'title' => null,
        'type' => null,
        'default_value' => null,
        'model' => null,
        'explore' => null,
        'dimension' => null,
        'field' => null,
        'row' => 'int64',
        'listens_to_filters' => null,
        'allow_multiple_values' => null,
        'required' => null,
        'ui_config' => null
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
        'dashboard_id' => 'dashboard_id',
        'name' => 'name',
        'title' => 'title',
        'type' => 'type',
        'default_value' => 'default_value',
        'model' => 'model',
        'explore' => 'explore',
        'dimension' => 'dimension',
        'field' => 'field',
        'row' => 'row',
        'listens_to_filters' => 'listens_to_filters',
        'allow_multiple_values' => 'allow_multiple_values',
        'required' => 'required',
        'ui_config' => 'ui_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'dashboard_id' => 'setDashboardId',
        'name' => 'setName',
        'title' => 'setTitle',
        'type' => 'setType',
        'default_value' => 'setDefaultValue',
        'model' => 'setModel',
        'explore' => 'setExplore',
        'dimension' => 'setDimension',
        'field' => 'setField',
        'row' => 'setRow',
        'listens_to_filters' => 'setListensToFilters',
        'allow_multiple_values' => 'setAllowMultipleValues',
        'required' => 'setRequired',
        'ui_config' => 'setUiConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'dashboard_id' => 'getDashboardId',
        'name' => 'getName',
        'title' => 'getTitle',
        'type' => 'getType',
        'default_value' => 'getDefaultValue',
        'model' => 'getModel',
        'explore' => 'getExplore',
        'dimension' => 'getDimension',
        'field' => 'getField',
        'row' => 'getRow',
        'listens_to_filters' => 'getListensToFilters',
        'allow_multiple_values' => 'getAllowMultipleValues',
        'required' => 'getRequired',
        'ui_config' => 'getUiConfig'
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
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['explore'] = isset($data['explore']) ? $data['explore'] : null;
        $this->container['dimension'] = isset($data['dimension']) ? $data['dimension'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['row'] = isset($data['row']) ? $data['row'] : null;
        $this->container['listens_to_filters'] = isset($data['listens_to_filters']) ? $data['listens_to_filters'] : null;
        $this->container['allow_multiple_values'] = isset($data['allow_multiple_values']) ? $data['allow_multiple_values'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['ui_config'] = isset($data['ui_config']) ? $data['ui_config'] : null;
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
     * Gets dashboard_id
     *
     * @return string
     */
    public function getDashboardId()
    {
        return $this->container['dashboard_id'];
    }

    /**
     * Sets dashboard_id
     *
     * @param string $dashboard_id Id of Dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

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
     * @param string $name Name of filter
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $title Title of filter
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $type Type of filter: one of date, number, string, or field
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
     * @param string $default_value Default value of filter
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model Model of filter (required if type = field)
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets explore
     *
     * @return string
     */
    public function getExplore()
    {
        return $this->container['explore'];
    }

    /**
     * Sets explore
     *
     * @param string $explore Explore of filter (required if type = field)
     *
     * @return $this
     */
    public function setExplore($explore)
    {
        $this->container['explore'] = $explore;

        return $this;
    }

    /**
     * Gets dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->container['dimension'];
    }

    /**
     * Sets dimension
     *
     * @param string $dimension Dimension of filter (required if type = field)
     *
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->container['dimension'] = $dimension;

        return $this;
    }

    /**
     * Gets field
     *
     * @return object
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param object $field Field information
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets row
     *
     * @return int
     */
    public function getRow()
    {
        return $this->container['row'];
    }

    /**
     * Sets row
     *
     * @param int $row Display order of this filter relative to other filters
     *
     * @return $this
     */
    public function setRow($row)
    {
        $this->container['row'] = $row;

        return $this;
    }

    /**
     * Gets listens_to_filters
     *
     * @return string[]
     */
    public function getListensToFilters()
    {
        return $this->container['listens_to_filters'];
    }

    /**
     * Sets listens_to_filters
     *
     * @param string[] $listens_to_filters Array of listeners for faceted filters
     *
     * @return $this
     */
    public function setListensToFilters($listens_to_filters)
    {
        $this->container['listens_to_filters'] = $listens_to_filters;

        return $this;
    }

    /**
     * Gets allow_multiple_values
     *
     * @return bool
     */
    public function getAllowMultipleValues()
    {
        return $this->container['allow_multiple_values'];
    }

    /**
     * Sets allow_multiple_values
     *
     * @param bool $allow_multiple_values Whether the filter allows multiple filter values (deprecated in the latest version of dashboards)
     *
     * @return $this
     */
    public function setAllowMultipleValues($allow_multiple_values)
    {
        $this->container['allow_multiple_values'] = $allow_multiple_values;

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
     * @param bool $required Whether the filter requires a value to run the dashboard
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets ui_config
     *
     * @return object
     */
    public function getUiConfig()
    {
        return $this->container['ui_config'];
    }

    /**
     * Sets ui_config
     *
     * @param object $ui_config The visual configuration for this filter. Used to set up how the UI for this filter should appear.
     *
     * @return $this
     */
    public function setUiConfig($ui_config)
    {
        $this->container['ui_config'] = $ui_config;

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

