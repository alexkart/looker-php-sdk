<?php
/**
 * Query
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
 * Query Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Query implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Query';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'id' => 'string',
        'model' => 'string',
        'view' => 'string',
        'fields' => 'string[]',
        'pivots' => 'string[]',
        'fill_fields' => 'string[]',
        'filters' => 'map[string,string]',
        'filter_expression' => 'string',
        'sorts' => 'string[]',
        'limit' => 'string',
        'column_limit' => 'string',
        'total' => 'bool',
        'row_total' => 'string',
        'subtotals' => 'string[]',
        'vis_config' => 'object',
        'filter_config' => 'object',
        'visible_ui_sections' => 'string',
        'slug' => 'string',
        'dynamic_fields' => 'string',
        'client_id' => 'string',
        'share_url' => 'string',
        'expanded_share_url' => 'string',
        'url' => 'string',
        'query_timezone' => 'string',
        'has_table_calculations' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'id' => null,
        'model' => null,
        'view' => null,
        'fields' => null,
        'pivots' => null,
        'fill_fields' => null,
        'filters' => null,
        'filter_expression' => null,
        'sorts' => null,
        'limit' => null,
        'column_limit' => null,
        'total' => null,
        'row_total' => null,
        'subtotals' => null,
        'vis_config' => null,
        'filter_config' => null,
        'visible_ui_sections' => null,
        'slug' => null,
        'dynamic_fields' => null,
        'client_id' => null,
        'share_url' => null,
        'expanded_share_url' => null,
        'url' => null,
        'query_timezone' => null,
        'has_table_calculations' => null
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
        'model' => 'model',
        'view' => 'view',
        'fields' => 'fields',
        'pivots' => 'pivots',
        'fill_fields' => 'fill_fields',
        'filters' => 'filters',
        'filter_expression' => 'filter_expression',
        'sorts' => 'sorts',
        'limit' => 'limit',
        'column_limit' => 'column_limit',
        'total' => 'total',
        'row_total' => 'row_total',
        'subtotals' => 'subtotals',
        'vis_config' => 'vis_config',
        'filter_config' => 'filter_config',
        'visible_ui_sections' => 'visible_ui_sections',
        'slug' => 'slug',
        'dynamic_fields' => 'dynamic_fields',
        'client_id' => 'client_id',
        'share_url' => 'share_url',
        'expanded_share_url' => 'expanded_share_url',
        'url' => 'url',
        'query_timezone' => 'query_timezone',
        'has_table_calculations' => 'has_table_calculations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'model' => 'setModel',
        'view' => 'setView',
        'fields' => 'setFields',
        'pivots' => 'setPivots',
        'fill_fields' => 'setFillFields',
        'filters' => 'setFilters',
        'filter_expression' => 'setFilterExpression',
        'sorts' => 'setSorts',
        'limit' => 'setLimit',
        'column_limit' => 'setColumnLimit',
        'total' => 'setTotal',
        'row_total' => 'setRowTotal',
        'subtotals' => 'setSubtotals',
        'vis_config' => 'setVisConfig',
        'filter_config' => 'setFilterConfig',
        'visible_ui_sections' => 'setVisibleUiSections',
        'slug' => 'setSlug',
        'dynamic_fields' => 'setDynamicFields',
        'client_id' => 'setClientId',
        'share_url' => 'setShareUrl',
        'expanded_share_url' => 'setExpandedShareUrl',
        'url' => 'setUrl',
        'query_timezone' => 'setQueryTimezone',
        'has_table_calculations' => 'setHasTableCalculations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'model' => 'getModel',
        'view' => 'getView',
        'fields' => 'getFields',
        'pivots' => 'getPivots',
        'fill_fields' => 'getFillFields',
        'filters' => 'getFilters',
        'filter_expression' => 'getFilterExpression',
        'sorts' => 'getSorts',
        'limit' => 'getLimit',
        'column_limit' => 'getColumnLimit',
        'total' => 'getTotal',
        'row_total' => 'getRowTotal',
        'subtotals' => 'getSubtotals',
        'vis_config' => 'getVisConfig',
        'filter_config' => 'getFilterConfig',
        'visible_ui_sections' => 'getVisibleUiSections',
        'slug' => 'getSlug',
        'dynamic_fields' => 'getDynamicFields',
        'client_id' => 'getClientId',
        'share_url' => 'getShareUrl',
        'expanded_share_url' => 'getExpandedShareUrl',
        'url' => 'getUrl',
        'query_timezone' => 'getQueryTimezone',
        'has_table_calculations' => 'getHasTableCalculations'
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
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['pivots'] = isset($data['pivots']) ? $data['pivots'] : null;
        $this->container['fill_fields'] = isset($data['fill_fields']) ? $data['fill_fields'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['filter_expression'] = isset($data['filter_expression']) ? $data['filter_expression'] : null;
        $this->container['sorts'] = isset($data['sorts']) ? $data['sorts'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['column_limit'] = isset($data['column_limit']) ? $data['column_limit'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['row_total'] = isset($data['row_total']) ? $data['row_total'] : null;
        $this->container['subtotals'] = isset($data['subtotals']) ? $data['subtotals'] : null;
        $this->container['vis_config'] = isset($data['vis_config']) ? $data['vis_config'] : null;
        $this->container['filter_config'] = isset($data['filter_config']) ? $data['filter_config'] : null;
        $this->container['visible_ui_sections'] = isset($data['visible_ui_sections']) ? $data['visible_ui_sections'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['dynamic_fields'] = isset($data['dynamic_fields']) ? $data['dynamic_fields'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['share_url'] = isset($data['share_url']) ? $data['share_url'] : null;
        $this->container['expanded_share_url'] = isset($data['expanded_share_url']) ? $data['expanded_share_url'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['query_timezone'] = isset($data['query_timezone']) ? $data['query_timezone'] : null;
        $this->container['has_table_calculations'] = isset($data['has_table_calculations']) ? $data['has_table_calculations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['view'] === null) {
            $invalidProperties[] = "'view' can't be null";
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
     * @param string $model Model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets view
     *
     * @return string
     */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
     * Sets view
     *
     * @param string $view Explore Name
     *
     * @return $this
     */
    public function setView($view)
    {
        $this->container['view'] = $view;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[] $fields Fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets pivots
     *
     * @return string[]
     */
    public function getPivots()
    {
        return $this->container['pivots'];
    }

    /**
     * Sets pivots
     *
     * @param string[] $pivots Pivots
     *
     * @return $this
     */
    public function setPivots($pivots)
    {
        $this->container['pivots'] = $pivots;

        return $this;
    }

    /**
     * Gets fill_fields
     *
     * @return string[]
     */
    public function getFillFields()
    {
        return $this->container['fill_fields'];
    }

    /**
     * Sets fill_fields
     *
     * @param string[] $fill_fields Fill Fields
     *
     * @return $this
     */
    public function setFillFields($fill_fields)
    {
        $this->container['fill_fields'] = $fill_fields;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return map[string,string]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param map[string,string] $filters Filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets filter_expression
     *
     * @return string
     */
    public function getFilterExpression()
    {
        return $this->container['filter_expression'];
    }

    /**
     * Sets filter_expression
     *
     * @param string $filter_expression Filter Expression
     *
     * @return $this
     */
    public function setFilterExpression($filter_expression)
    {
        $this->container['filter_expression'] = $filter_expression;

        return $this;
    }

    /**
     * Gets sorts
     *
     * @return string[]
     */
    public function getSorts()
    {
        return $this->container['sorts'];
    }

    /**
     * Sets sorts
     *
     * @param string[] $sorts Sorting for the query results. Use the format `[\"view.field\", ...]` to sort on fields in ascending order. Use the format `[\"view.field desc\", ...]` to sort on fields in descending order. Use `[\"__UNSORTED__\"]` (2 underscores before and after) to disable sorting entirely. Empty sorts `[]` will trigger a default sort.
     *
     * @return $this
     */
    public function setSorts($sorts)
    {
        $this->container['sorts'] = $sorts;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return string
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param string $limit Limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets column_limit
     *
     * @return string
     */
    public function getColumnLimit()
    {
        return $this->container['column_limit'];
    }

    /**
     * Sets column_limit
     *
     * @param string $column_limit Column Limit
     *
     * @return $this
     */
    public function setColumnLimit($column_limit)
    {
        $this->container['column_limit'] = $column_limit;

        return $this;
    }

    /**
     * Gets total
     *
     * @return bool
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param bool $total Total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets row_total
     *
     * @return string
     */
    public function getRowTotal()
    {
        return $this->container['row_total'];
    }

    /**
     * Sets row_total
     *
     * @param string $row_total Raw Total
     *
     * @return $this
     */
    public function setRowTotal($row_total)
    {
        $this->container['row_total'] = $row_total;

        return $this;
    }

    /**
     * Gets subtotals
     *
     * @return string[]
     */
    public function getSubtotals()
    {
        return $this->container['subtotals'];
    }

    /**
     * Sets subtotals
     *
     * @param string[] $subtotals Fields on which to run subtotals
     *
     * @return $this
     */
    public function setSubtotals($subtotals)
    {
        $this->container['subtotals'] = $subtotals;

        return $this;
    }

    /**
     * Gets vis_config
     *
     * @return object
     */
    public function getVisConfig()
    {
        return $this->container['vis_config'];
    }

    /**
     * Sets vis_config
     *
     * @param object $vis_config Visualization configuration properties. These properties are typically opaque and differ based on the type of visualization used. There is no specified set of allowed keys. The values can be any type supported by JSON. A \"type\" key with a string value is often present, and is used by Looker to determine which visualization to present. Visualizations ignore unknown vis_config properties.
     *
     * @return $this
     */
    public function setVisConfig($vis_config)
    {
        $this->container['vis_config'] = $vis_config;

        return $this;
    }

    /**
     * Gets filter_config
     *
     * @return object
     */
    public function getFilterConfig()
    {
        return $this->container['filter_config'];
    }

    /**
     * Sets filter_config
     *
     * @param object $filter_config The filter_config represents the state of the filter UI on the explore page for a given query. When running a query via the Looker UI, this parameter takes precedence over \"filters\". When creating a query or modifying an existing query, \"filter_config\" should be set to null. Setting it to any other value could cause unexpected filtering behavior. The format should be considered opaque.
     *
     * @return $this
     */
    public function setFilterConfig($filter_config)
    {
        $this->container['filter_config'] = $filter_config;

        return $this;
    }

    /**
     * Gets visible_ui_sections
     *
     * @return string
     */
    public function getVisibleUiSections()
    {
        return $this->container['visible_ui_sections'];
    }

    /**
     * Sets visible_ui_sections
     *
     * @param string $visible_ui_sections Visible UI Sections
     *
     * @return $this
     */
    public function setVisibleUiSections($visible_ui_sections)
    {
        $this->container['visible_ui_sections'] = $visible_ui_sections;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug Slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets dynamic_fields
     *
     * @return string
     */
    public function getDynamicFields()
    {
        return $this->container['dynamic_fields'];
    }

    /**
     * Sets dynamic_fields
     *
     * @param string $dynamic_fields Dynamic Fields
     *
     * @return $this
     */
    public function setDynamicFields($dynamic_fields)
    {
        $this->container['dynamic_fields'] = $dynamic_fields;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Client Id: used to generate shortened explore URLs. If set by client, must be a unique 22 character alphanumeric string. Otherwise one will be generated.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets share_url
     *
     * @return string
     */
    public function getShareUrl()
    {
        return $this->container['share_url'];
    }

    /**
     * Sets share_url
     *
     * @param string $share_url Share Url
     *
     * @return $this
     */
    public function setShareUrl($share_url)
    {
        $this->container['share_url'] = $share_url;

        return $this;
    }

    /**
     * Gets expanded_share_url
     *
     * @return string
     */
    public function getExpandedShareUrl()
    {
        return $this->container['expanded_share_url'];
    }

    /**
     * Sets expanded_share_url
     *
     * @param string $expanded_share_url Expanded Share Url
     *
     * @return $this
     */
    public function setExpandedShareUrl($expanded_share_url)
    {
        $this->container['expanded_share_url'] = $expanded_share_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Expanded Url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets query_timezone
     *
     * @return string
     */
    public function getQueryTimezone()
    {
        return $this->container['query_timezone'];
    }

    /**
     * Sets query_timezone
     *
     * @param string $query_timezone Query Timezone
     *
     * @return $this
     */
    public function setQueryTimezone($query_timezone)
    {
        $this->container['query_timezone'] = $query_timezone;

        return $this;
    }

    /**
     * Gets has_table_calculations
     *
     * @return bool
     */
    public function getHasTableCalculations()
    {
        return $this->container['has_table_calculations'];
    }

    /**
     * Sets has_table_calculations
     *
     * @param bool $has_table_calculations Has Table Calculations
     *
     * @return $this
     */
    public function setHasTableCalculations($has_table_calculations)
    {
        $this->container['has_table_calculations'] = $has_table_calculations;

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

