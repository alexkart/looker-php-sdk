<?php
/**
 * QueryTask
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
 * QueryTask Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'id' => 'string',
        'query_id' => 'string',
        'query' => '\Swagger\Client\Model\Query',
        'generate_links' => 'bool',
        'force_production' => 'bool',
        'path_prefix' => 'string',
        'cache' => 'bool',
        'server_table_calcs' => 'bool',
        'cache_only' => 'bool',
        'cache_key' => 'string',
        'status' => 'string',
        'source' => 'string',
        'runtime' => 'float',
        'rebuild_pdts' => 'bool',
        'result_source' => 'string',
        'look_id' => 'string',
        'dashboard_id' => 'string',
        'result_format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'id' => null,
        'query_id' => null,
        'query' => null,
        'generate_links' => null,
        'force_production' => null,
        'path_prefix' => null,
        'cache' => null,
        'server_table_calcs' => null,
        'cache_only' => null,
        'cache_key' => null,
        'status' => null,
        'source' => null,
        'runtime' => 'float',
        'rebuild_pdts' => null,
        'result_source' => null,
        'look_id' => null,
        'dashboard_id' => null,
        'result_format' => null
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
        'query_id' => 'query_id',
        'query' => 'query',
        'generate_links' => 'generate_links',
        'force_production' => 'force_production',
        'path_prefix' => 'path_prefix',
        'cache' => 'cache',
        'server_table_calcs' => 'server_table_calcs',
        'cache_only' => 'cache_only',
        'cache_key' => 'cache_key',
        'status' => 'status',
        'source' => 'source',
        'runtime' => 'runtime',
        'rebuild_pdts' => 'rebuild_pdts',
        'result_source' => 'result_source',
        'look_id' => 'look_id',
        'dashboard_id' => 'dashboard_id',
        'result_format' => 'result_format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'query_id' => 'setQueryId',
        'query' => 'setQuery',
        'generate_links' => 'setGenerateLinks',
        'force_production' => 'setForceProduction',
        'path_prefix' => 'setPathPrefix',
        'cache' => 'setCache',
        'server_table_calcs' => 'setServerTableCalcs',
        'cache_only' => 'setCacheOnly',
        'cache_key' => 'setCacheKey',
        'status' => 'setStatus',
        'source' => 'setSource',
        'runtime' => 'setRuntime',
        'rebuild_pdts' => 'setRebuildPdts',
        'result_source' => 'setResultSource',
        'look_id' => 'setLookId',
        'dashboard_id' => 'setDashboardId',
        'result_format' => 'setResultFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'query_id' => 'getQueryId',
        'query' => 'getQuery',
        'generate_links' => 'getGenerateLinks',
        'force_production' => 'getForceProduction',
        'path_prefix' => 'getPathPrefix',
        'cache' => 'getCache',
        'server_table_calcs' => 'getServerTableCalcs',
        'cache_only' => 'getCacheOnly',
        'cache_key' => 'getCacheKey',
        'status' => 'getStatus',
        'source' => 'getSource',
        'runtime' => 'getRuntime',
        'rebuild_pdts' => 'getRebuildPdts',
        'result_source' => 'getResultSource',
        'look_id' => 'getLookId',
        'dashboard_id' => 'getDashboardId',
        'result_format' => 'getResultFormat'
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
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['generate_links'] = isset($data['generate_links']) ? $data['generate_links'] : null;
        $this->container['force_production'] = isset($data['force_production']) ? $data['force_production'] : null;
        $this->container['path_prefix'] = isset($data['path_prefix']) ? $data['path_prefix'] : null;
        $this->container['cache'] = isset($data['cache']) ? $data['cache'] : null;
        $this->container['server_table_calcs'] = isset($data['server_table_calcs']) ? $data['server_table_calcs'] : null;
        $this->container['cache_only'] = isset($data['cache_only']) ? $data['cache_only'] : null;
        $this->container['cache_key'] = isset($data['cache_key']) ? $data['cache_key'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['rebuild_pdts'] = isset($data['rebuild_pdts']) ? $data['rebuild_pdts'] : null;
        $this->container['result_source'] = isset($data['result_source']) ? $data['result_source'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['result_format'] = isset($data['result_format']) ? $data['result_format'] : null;
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
     * Gets query_id
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param string $query_id Id of query
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets query
     *
     * @return \Swagger\Client\Model\Query
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Swagger\Client\Model\Query $query Query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets generate_links
     *
     * @return bool
     */
    public function getGenerateLinks()
    {
        return $this->container['generate_links'];
    }

    /**
     * Sets generate_links
     *
     * @param bool $generate_links whether or not to generate links in the query response.
     *
     * @return $this
     */
    public function setGenerateLinks($generate_links)
    {
        $this->container['generate_links'] = $generate_links;

        return $this;
    }

    /**
     * Gets force_production
     *
     * @return bool
     */
    public function getForceProduction()
    {
        return $this->container['force_production'];
    }

    /**
     * Sets force_production
     *
     * @param bool $force_production Use production models to run query (even is user is in dev mode).
     *
     * @return $this
     */
    public function setForceProduction($force_production)
    {
        $this->container['force_production'] = $force_production;

        return $this;
    }

    /**
     * Gets path_prefix
     *
     * @return string
     */
    public function getPathPrefix()
    {
        return $this->container['path_prefix'];
    }

    /**
     * Sets path_prefix
     *
     * @param string $path_prefix Prefix to use for drill links.
     *
     * @return $this
     */
    public function setPathPrefix($path_prefix)
    {
        $this->container['path_prefix'] = $path_prefix;

        return $this;
    }

    /**
     * Gets cache
     *
     * @return bool
     */
    public function getCache()
    {
        return $this->container['cache'];
    }

    /**
     * Sets cache
     *
     * @param bool $cache Whether or not to use the cache
     *
     * @return $this
     */
    public function setCache($cache)
    {
        $this->container['cache'] = $cache;

        return $this;
    }

    /**
     * Gets server_table_calcs
     *
     * @return bool
     */
    public function getServerTableCalcs()
    {
        return $this->container['server_table_calcs'];
    }

    /**
     * Sets server_table_calcs
     *
     * @param bool $server_table_calcs Whether or not to run table calculations on the server
     *
     * @return $this
     */
    public function setServerTableCalcs($server_table_calcs)
    {
        $this->container['server_table_calcs'] = $server_table_calcs;

        return $this;
    }

    /**
     * Gets cache_only
     *
     * @return bool
     */
    public function getCacheOnly()
    {
        return $this->container['cache_only'];
    }

    /**
     * Sets cache_only
     *
     * @param bool $cache_only Retrieve any results from cache even if the results have expired.
     *
     * @return $this
     */
    public function setCacheOnly($cache_only)
    {
        $this->container['cache_only'] = $cache_only;

        return $this;
    }

    /**
     * Gets cache_key
     *
     * @return string
     */
    public function getCacheKey()
    {
        return $this->container['cache_key'];
    }

    /**
     * Sets cache_key
     *
     * @param string $cache_key cache key used to cache query.
     *
     * @return $this
     */
    public function setCacheKey($cache_key)
    {
        $this->container['cache_key'] = $cache_key;

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
     * @param string $status Status of query task.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Source of query task.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets runtime
     *
     * @return float
     */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
     * Sets runtime
     *
     * @param float $runtime Runtime of prior queries.
     *
     * @return $this
     */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;

        return $this;
    }

    /**
     * Gets rebuild_pdts
     *
     * @return bool
     */
    public function getRebuildPdts()
    {
        return $this->container['rebuild_pdts'];
    }

    /**
     * Sets rebuild_pdts
     *
     * @param bool $rebuild_pdts Rebuild PDTS used in query.
     *
     * @return $this
     */
    public function setRebuildPdts($rebuild_pdts)
    {
        $this->container['rebuild_pdts'] = $rebuild_pdts;

        return $this;
    }

    /**
     * Gets result_source
     *
     * @return string
     */
    public function getResultSource()
    {
        return $this->container['result_source'];
    }

    /**
     * Sets result_source
     *
     * @param string $result_source Source of the results of the query.
     *
     * @return $this
     */
    public function setResultSource($result_source)
    {
        $this->container['result_source'] = $result_source;

        return $this;
    }

    /**
     * Gets look_id
     *
     * @return string
     */
    public function getLookId()
    {
        return $this->container['look_id'];
    }

    /**
     * Sets look_id
     *
     * @param string $look_id Id of look associated with query.
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

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
     * @param string $dashboard_id Id of dashboard associated with query.
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets result_format
     *
     * @return string
     */
    public function getResultFormat()
    {
        return $this->container['result_format'];
    }

    /**
     * Sets result_format
     *
     * @param string $result_format The data format of the query results.
     *
     * @return $this
     */
    public function setResultFormat($result_format)
    {
        $this->container['result_format'] = $result_format;

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


