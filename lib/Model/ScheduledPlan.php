<?php
/**
 * ScheduledPlan
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
 * ScheduledPlan Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduledPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'user_id' => 'string',
        'run_as_recipient' => 'bool',
        'enabled' => 'bool',
        'look_id' => 'string',
        'dashboard_id' => 'string',
        'lookml_dashboard_id' => 'string',
        'filters_string' => 'string',
        'dashboard_filters' => 'string',
        'require_results' => 'bool',
        'require_no_results' => 'bool',
        'require_change' => 'bool',
        'send_all_results' => 'bool',
        'crontab' => 'string',
        'datagroup' => 'string',
        'timezone' => 'string',
        'query_id' => 'string',
        'scheduled_plan_destination' => '\Swagger\Client\Model\ScheduledPlanDestination[]',
        'run_once' => 'bool',
        'include_links' => 'bool',
        'custom_url_base' => 'string',
        'custom_url_params' => 'string',
        'custom_url_label' => 'string',
        'show_custom_url' => 'bool',
        'pdf_paper_size' => 'string',
        'pdf_landscape' => 'bool',
        'embed' => 'bool',
        'color_theme' => 'string',
        'long_tables' => 'bool',
        'inline_table_width' => 'int',
        'id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'title' => 'string',
        'user' => '\Swagger\Client\Model\UserPublic',
        'next_run_at' => '\DateTime',
        'last_run_at' => '\DateTime',
        'can' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'user_id' => null,
        'run_as_recipient' => null,
        'enabled' => null,
        'look_id' => null,
        'dashboard_id' => null,
        'lookml_dashboard_id' => null,
        'filters_string' => null,
        'dashboard_filters' => null,
        'require_results' => null,
        'require_no_results' => null,
        'require_change' => null,
        'send_all_results' => null,
        'crontab' => null,
        'datagroup' => null,
        'timezone' => null,
        'query_id' => null,
        'scheduled_plan_destination' => null,
        'run_once' => null,
        'include_links' => null,
        'custom_url_base' => null,
        'custom_url_params' => null,
        'custom_url_label' => null,
        'show_custom_url' => null,
        'pdf_paper_size' => null,
        'pdf_landscape' => null,
        'embed' => null,
        'color_theme' => null,
        'long_tables' => null,
        'inline_table_width' => 'int64',
        'id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'title' => null,
        'user' => null,
        'next_run_at' => 'date-time',
        'last_run_at' => 'date-time',
        'can' => null
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
        'user_id' => 'user_id',
        'run_as_recipient' => 'run_as_recipient',
        'enabled' => 'enabled',
        'look_id' => 'look_id',
        'dashboard_id' => 'dashboard_id',
        'lookml_dashboard_id' => 'lookml_dashboard_id',
        'filters_string' => 'filters_string',
        'dashboard_filters' => 'dashboard_filters',
        'require_results' => 'require_results',
        'require_no_results' => 'require_no_results',
        'require_change' => 'require_change',
        'send_all_results' => 'send_all_results',
        'crontab' => 'crontab',
        'datagroup' => 'datagroup',
        'timezone' => 'timezone',
        'query_id' => 'query_id',
        'scheduled_plan_destination' => 'scheduled_plan_destination',
        'run_once' => 'run_once',
        'include_links' => 'include_links',
        'custom_url_base' => 'custom_url_base',
        'custom_url_params' => 'custom_url_params',
        'custom_url_label' => 'custom_url_label',
        'show_custom_url' => 'show_custom_url',
        'pdf_paper_size' => 'pdf_paper_size',
        'pdf_landscape' => 'pdf_landscape',
        'embed' => 'embed',
        'color_theme' => 'color_theme',
        'long_tables' => 'long_tables',
        'inline_table_width' => 'inline_table_width',
        'id' => 'id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'title' => 'title',
        'user' => 'user',
        'next_run_at' => 'next_run_at',
        'last_run_at' => 'last_run_at',
        'can' => 'can'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'user_id' => 'setUserId',
        'run_as_recipient' => 'setRunAsRecipient',
        'enabled' => 'setEnabled',
        'look_id' => 'setLookId',
        'dashboard_id' => 'setDashboardId',
        'lookml_dashboard_id' => 'setLookmlDashboardId',
        'filters_string' => 'setFiltersString',
        'dashboard_filters' => 'setDashboardFilters',
        'require_results' => 'setRequireResults',
        'require_no_results' => 'setRequireNoResults',
        'require_change' => 'setRequireChange',
        'send_all_results' => 'setSendAllResults',
        'crontab' => 'setCrontab',
        'datagroup' => 'setDatagroup',
        'timezone' => 'setTimezone',
        'query_id' => 'setQueryId',
        'scheduled_plan_destination' => 'setScheduledPlanDestination',
        'run_once' => 'setRunOnce',
        'include_links' => 'setIncludeLinks',
        'custom_url_base' => 'setCustomUrlBase',
        'custom_url_params' => 'setCustomUrlParams',
        'custom_url_label' => 'setCustomUrlLabel',
        'show_custom_url' => 'setShowCustomUrl',
        'pdf_paper_size' => 'setPdfPaperSize',
        'pdf_landscape' => 'setPdfLandscape',
        'embed' => 'setEmbed',
        'color_theme' => 'setColorTheme',
        'long_tables' => 'setLongTables',
        'inline_table_width' => 'setInlineTableWidth',
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'title' => 'setTitle',
        'user' => 'setUser',
        'next_run_at' => 'setNextRunAt',
        'last_run_at' => 'setLastRunAt',
        'can' => 'setCan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'user_id' => 'getUserId',
        'run_as_recipient' => 'getRunAsRecipient',
        'enabled' => 'getEnabled',
        'look_id' => 'getLookId',
        'dashboard_id' => 'getDashboardId',
        'lookml_dashboard_id' => 'getLookmlDashboardId',
        'filters_string' => 'getFiltersString',
        'dashboard_filters' => 'getDashboardFilters',
        'require_results' => 'getRequireResults',
        'require_no_results' => 'getRequireNoResults',
        'require_change' => 'getRequireChange',
        'send_all_results' => 'getSendAllResults',
        'crontab' => 'getCrontab',
        'datagroup' => 'getDatagroup',
        'timezone' => 'getTimezone',
        'query_id' => 'getQueryId',
        'scheduled_plan_destination' => 'getScheduledPlanDestination',
        'run_once' => 'getRunOnce',
        'include_links' => 'getIncludeLinks',
        'custom_url_base' => 'getCustomUrlBase',
        'custom_url_params' => 'getCustomUrlParams',
        'custom_url_label' => 'getCustomUrlLabel',
        'show_custom_url' => 'getShowCustomUrl',
        'pdf_paper_size' => 'getPdfPaperSize',
        'pdf_landscape' => 'getPdfLandscape',
        'embed' => 'getEmbed',
        'color_theme' => 'getColorTheme',
        'long_tables' => 'getLongTables',
        'inline_table_width' => 'getInlineTableWidth',
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'title' => 'getTitle',
        'user' => 'getUser',
        'next_run_at' => 'getNextRunAt',
        'last_run_at' => 'getLastRunAt',
        'can' => 'getCan'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['run_as_recipient'] = isset($data['run_as_recipient']) ? $data['run_as_recipient'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['lookml_dashboard_id'] = isset($data['lookml_dashboard_id']) ? $data['lookml_dashboard_id'] : null;
        $this->container['filters_string'] = isset($data['filters_string']) ? $data['filters_string'] : null;
        $this->container['dashboard_filters'] = isset($data['dashboard_filters']) ? $data['dashboard_filters'] : null;
        $this->container['require_results'] = isset($data['require_results']) ? $data['require_results'] : null;
        $this->container['require_no_results'] = isset($data['require_no_results']) ? $data['require_no_results'] : null;
        $this->container['require_change'] = isset($data['require_change']) ? $data['require_change'] : null;
        $this->container['send_all_results'] = isset($data['send_all_results']) ? $data['send_all_results'] : null;
        $this->container['crontab'] = isset($data['crontab']) ? $data['crontab'] : null;
        $this->container['datagroup'] = isset($data['datagroup']) ? $data['datagroup'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['scheduled_plan_destination'] = isset($data['scheduled_plan_destination']) ? $data['scheduled_plan_destination'] : null;
        $this->container['run_once'] = isset($data['run_once']) ? $data['run_once'] : null;
        $this->container['include_links'] = isset($data['include_links']) ? $data['include_links'] : null;
        $this->container['custom_url_base'] = isset($data['custom_url_base']) ? $data['custom_url_base'] : null;
        $this->container['custom_url_params'] = isset($data['custom_url_params']) ? $data['custom_url_params'] : null;
        $this->container['custom_url_label'] = isset($data['custom_url_label']) ? $data['custom_url_label'] : null;
        $this->container['show_custom_url'] = isset($data['show_custom_url']) ? $data['show_custom_url'] : null;
        $this->container['pdf_paper_size'] = isset($data['pdf_paper_size']) ? $data['pdf_paper_size'] : null;
        $this->container['pdf_landscape'] = isset($data['pdf_landscape']) ? $data['pdf_landscape'] : null;
        $this->container['embed'] = isset($data['embed']) ? $data['embed'] : null;
        $this->container['color_theme'] = isset($data['color_theme']) ? $data['color_theme'] : null;
        $this->container['long_tables'] = isset($data['long_tables']) ? $data['long_tables'] : null;
        $this->container['inline_table_width'] = isset($data['inline_table_width']) ? $data['inline_table_width'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['next_run_at'] = isset($data['next_run_at']) ? $data['next_run_at'] : null;
        $this->container['last_run_at'] = isset($data['last_run_at']) ? $data['last_run_at'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
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
     * @param string $name Name of this scheduled plan
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id User Id which owns this scheduled plan
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets run_as_recipient
     *
     * @return bool
     */
    public function getRunAsRecipient()
    {
        return $this->container['run_as_recipient'];
    }

    /**
     * Sets run_as_recipient
     *
     * @param bool $run_as_recipient Whether schedule is run as recipient (only applicable for email recipients)
     *
     * @return $this
     */
    public function setRunAsRecipient($run_as_recipient)
    {
        $this->container['run_as_recipient'] = $run_as_recipient;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Whether the ScheduledPlan is enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param string $look_id Id of a look
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
     * @param string $dashboard_id Id of a dashboard
     *
     * @return $this
     */
    public function setDashboardId($dashboard_id)
    {
        $this->container['dashboard_id'] = $dashboard_id;

        return $this;
    }

    /**
     * Gets lookml_dashboard_id
     *
     * @return string
     */
    public function getLookmlDashboardId()
    {
        return $this->container['lookml_dashboard_id'];
    }

    /**
     * Sets lookml_dashboard_id
     *
     * @param string $lookml_dashboard_id Id of a LookML dashboard
     *
     * @return $this
     */
    public function setLookmlDashboardId($lookml_dashboard_id)
    {
        $this->container['lookml_dashboard_id'] = $lookml_dashboard_id;

        return $this;
    }

    /**
     * Gets filters_string
     *
     * @return string
     */
    public function getFiltersString()
    {
        return $this->container['filters_string'];
    }

    /**
     * Sets filters_string
     *
     * @param string $filters_string Query string to run look or dashboard with
     *
     * @return $this
     */
    public function setFiltersString($filters_string)
    {
        $this->container['filters_string'] = $filters_string;

        return $this;
    }

    /**
     * Gets dashboard_filters
     *
     * @return string
     */
    public function getDashboardFilters()
    {
        return $this->container['dashboard_filters'];
    }

    /**
     * Sets dashboard_filters
     *
     * @param string $dashboard_filters (DEPRECATED) Alias for filters_string field
     *
     * @return $this
     */
    public function setDashboardFilters($dashboard_filters)
    {
        $this->container['dashboard_filters'] = $dashboard_filters;

        return $this;
    }

    /**
     * Gets require_results
     *
     * @return bool
     */
    public function getRequireResults()
    {
        return $this->container['require_results'];
    }

    /**
     * Sets require_results
     *
     * @param bool $require_results Delivery should occur if running the dashboard or look returns results
     *
     * @return $this
     */
    public function setRequireResults($require_results)
    {
        $this->container['require_results'] = $require_results;

        return $this;
    }

    /**
     * Gets require_no_results
     *
     * @return bool
     */
    public function getRequireNoResults()
    {
        return $this->container['require_no_results'];
    }

    /**
     * Sets require_no_results
     *
     * @param bool $require_no_results Delivery should occur if the dashboard look does not return results
     *
     * @return $this
     */
    public function setRequireNoResults($require_no_results)
    {
        $this->container['require_no_results'] = $require_no_results;

        return $this;
    }

    /**
     * Gets require_change
     *
     * @return bool
     */
    public function getRequireChange()
    {
        return $this->container['require_change'];
    }

    /**
     * Sets require_change
     *
     * @param bool $require_change Delivery should occur if data have changed since the last run
     *
     * @return $this
     */
    public function setRequireChange($require_change)
    {
        $this->container['require_change'] = $require_change;

        return $this;
    }

    /**
     * Gets send_all_results
     *
     * @return bool
     */
    public function getSendAllResults()
    {
        return $this->container['send_all_results'];
    }

    /**
     * Sets send_all_results
     *
     * @param bool $send_all_results Will run an unlimited query and send all results.
     *
     * @return $this
     */
    public function setSendAllResults($send_all_results)
    {
        $this->container['send_all_results'] = $send_all_results;

        return $this;
    }

    /**
     * Gets crontab
     *
     * @return string
     */
    public function getCrontab()
    {
        return $this->container['crontab'];
    }

    /**
     * Sets crontab
     *
     * @param string $crontab Vixie-Style crontab specification when to run
     *
     * @return $this
     */
    public function setCrontab($crontab)
    {
        $this->container['crontab'] = $crontab;

        return $this;
    }

    /**
     * Gets datagroup
     *
     * @return string
     */
    public function getDatagroup()
    {
        return $this->container['datagroup'];
    }

    /**
     * Sets datagroup
     *
     * @param string $datagroup Name of a datagroup; if specified will run when datagroup triggered (can't be used with cron string)
     *
     * @return $this
     */
    public function setDatagroup($datagroup)
    {
        $this->container['datagroup'] = $datagroup;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone Timezone for interpreting the specified crontab (default is Looker instance timezone)
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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
     * @param string $query_id Query id
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets scheduled_plan_destination
     *
     * @return \Swagger\Client\Model\ScheduledPlanDestination[]
     */
    public function getScheduledPlanDestination()
    {
        return $this->container['scheduled_plan_destination'];
    }

    /**
     * Sets scheduled_plan_destination
     *
     * @param \Swagger\Client\Model\ScheduledPlanDestination[] $scheduled_plan_destination Scheduled plan destinations
     *
     * @return $this
     */
    public function setScheduledPlanDestination($scheduled_plan_destination)
    {
        $this->container['scheduled_plan_destination'] = $scheduled_plan_destination;

        return $this;
    }

    /**
     * Gets run_once
     *
     * @return bool
     */
    public function getRunOnce()
    {
        return $this->container['run_once'];
    }

    /**
     * Sets run_once
     *
     * @param bool $run_once Whether the plan in question should only be run once (usually for testing)
     *
     * @return $this
     */
    public function setRunOnce($run_once)
    {
        $this->container['run_once'] = $run_once;

        return $this;
    }

    /**
     * Gets include_links
     *
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['include_links'];
    }

    /**
     * Sets include_links
     *
     * @param bool $include_links Whether links back to Looker should be included in this ScheduledPlan
     *
     * @return $this
     */
    public function setIncludeLinks($include_links)
    {
        $this->container['include_links'] = $include_links;

        return $this;
    }

    /**
     * Gets custom_url_base
     *
     * @return string
     */
    public function getCustomUrlBase()
    {
        return $this->container['custom_url_base'];
    }

    /**
     * Sets custom_url_base
     *
     * @param string $custom_url_base Custom url domain for the scheduled entity
     *
     * @return $this
     */
    public function setCustomUrlBase($custom_url_base)
    {
        $this->container['custom_url_base'] = $custom_url_base;

        return $this;
    }

    /**
     * Gets custom_url_params
     *
     * @return string
     */
    public function getCustomUrlParams()
    {
        return $this->container['custom_url_params'];
    }

    /**
     * Sets custom_url_params
     *
     * @param string $custom_url_params Custom url path and parameters for the scheduled entity
     *
     * @return $this
     */
    public function setCustomUrlParams($custom_url_params)
    {
        $this->container['custom_url_params'] = $custom_url_params;

        return $this;
    }

    /**
     * Gets custom_url_label
     *
     * @return string
     */
    public function getCustomUrlLabel()
    {
        return $this->container['custom_url_label'];
    }

    /**
     * Sets custom_url_label
     *
     * @param string $custom_url_label Custom url label for the scheduled entity
     *
     * @return $this
     */
    public function setCustomUrlLabel($custom_url_label)
    {
        $this->container['custom_url_label'] = $custom_url_label;

        return $this;
    }

    /**
     * Gets show_custom_url
     *
     * @return bool
     */
    public function getShowCustomUrl()
    {
        return $this->container['show_custom_url'];
    }

    /**
     * Sets show_custom_url
     *
     * @param bool $show_custom_url Whether to show custom link back instead of standard looker link
     *
     * @return $this
     */
    public function setShowCustomUrl($show_custom_url)
    {
        $this->container['show_custom_url'] = $show_custom_url;

        return $this;
    }

    /**
     * Gets pdf_paper_size
     *
     * @return string
     */
    public function getPdfPaperSize()
    {
        return $this->container['pdf_paper_size'];
    }

    /**
     * Sets pdf_paper_size
     *
     * @param string $pdf_paper_size The size of paper the PDF should be formatted to fit. Valid values are: \"letter\", \"legal\", \"tabloid\", \"a0\", \"a1\", \"a2\", \"a3\", \"a4\", \"a5\".
     *
     * @return $this
     */
    public function setPdfPaperSize($pdf_paper_size)
    {
        $this->container['pdf_paper_size'] = $pdf_paper_size;

        return $this;
    }

    /**
     * Gets pdf_landscape
     *
     * @return bool
     */
    public function getPdfLandscape()
    {
        return $this->container['pdf_landscape'];
    }

    /**
     * Sets pdf_landscape
     *
     * @param bool $pdf_landscape Whether the PDF should be formatted for landscape orientation
     *
     * @return $this
     */
    public function setPdfLandscape($pdf_landscape)
    {
        $this->container['pdf_landscape'] = $pdf_landscape;

        return $this;
    }

    /**
     * Gets embed
     *
     * @return bool
     */
    public function getEmbed()
    {
        return $this->container['embed'];
    }

    /**
     * Sets embed
     *
     * @param bool $embed Whether this schedule is in an embed context or not
     *
     * @return $this
     */
    public function setEmbed($embed)
    {
        $this->container['embed'] = $embed;

        return $this;
    }

    /**
     * Gets color_theme
     *
     * @return string
     */
    public function getColorTheme()
    {
        return $this->container['color_theme'];
    }

    /**
     * Sets color_theme
     *
     * @param string $color_theme Color scheme of the dashboard if applicable
     *
     * @return $this
     */
    public function setColorTheme($color_theme)
    {
        $this->container['color_theme'] = $color_theme;

        return $this;
    }

    /**
     * Gets long_tables
     *
     * @return bool
     */
    public function getLongTables()
    {
        return $this->container['long_tables'];
    }

    /**
     * Sets long_tables
     *
     * @param bool $long_tables Whether or not to expand table vis to full length
     *
     * @return $this
     */
    public function setLongTables($long_tables)
    {
        $this->container['long_tables'] = $long_tables;

        return $this;
    }

    /**
     * Gets inline_table_width
     *
     * @return int
     */
    public function getInlineTableWidth()
    {
        return $this->container['inline_table_width'];
    }

    /**
     * Sets inline_table_width
     *
     * @param int $inline_table_width The pixel width at which we render the inline table visualizations
     *
     * @return $this
     */
    public function setInlineTableWidth($inline_table_width)
    {
        $this->container['inline_table_width'] = $inline_table_width;

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
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date and time when ScheduledPlan was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date and time when ScheduledPlan was last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Swagger\Client\Model\UserPublic
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Swagger\Client\Model\UserPublic $user User who owns this ScheduledPlan
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets next_run_at
     *
     * @return \DateTime
     */
    public function getNextRunAt()
    {
        return $this->container['next_run_at'];
    }

    /**
     * Sets next_run_at
     *
     * @param \DateTime $next_run_at When the ScheduledPlan will next run (null if running once)
     *
     * @return $this
     */
    public function setNextRunAt($next_run_at)
    {
        $this->container['next_run_at'] = $next_run_at;

        return $this;
    }

    /**
     * Gets last_run_at
     *
     * @return \DateTime
     */
    public function getLastRunAt()
    {
        return $this->container['last_run_at'];
    }

    /**
     * Sets last_run_at
     *
     * @param \DateTime $last_run_at When the ScheduledPlan was last run
     *
     * @return $this
     */
    public function setLastRunAt($last_run_at)
    {
        $this->container['last_run_at'] = $last_run_at;

        return $this;
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


