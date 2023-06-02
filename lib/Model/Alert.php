<?php
/**
 * Alert
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
 * Alert Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Alert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Alert';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'applied_dashboard_filters' => '\Swagger\Client\Model\AlertAppliedDashboardFilter[]',
        'comparison_type' => 'string',
        'cron' => 'string',
        'custom_url_base' => 'string',
        'custom_url_params' => 'string',
        'custom_url_label' => 'string',
        'show_custom_url' => 'bool',
        'custom_title' => 'string',
        'dashboard_element_id' => 'string',
        'description' => 'string',
        'destinations' => '\Swagger\Client\Model\AlertDestination[]',
        'field' => '\Swagger\Client\Model\AlertField',
        'followed' => 'bool',
        'followable' => 'bool',
        'id' => 'string',
        'is_disabled' => 'bool',
        'disabled_reason' => 'string',
        'is_public' => 'bool',
        'investigative_content_type' => 'string',
        'investigative_content_id' => 'string',
        'investigative_content_title' => 'string',
        'lookml_dashboard_id' => 'string',
        'lookml_link_id' => 'string',
        'owner_id' => 'string',
        'owner_display_name' => 'string',
        'threshold' => 'double',
        'time_series_condition_state' => '\Swagger\Client\Model\AlertConditionState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'applied_dashboard_filters' => null,
        'comparison_type' => null,
        'cron' => null,
        'custom_url_base' => null,
        'custom_url_params' => null,
        'custom_url_label' => null,
        'show_custom_url' => null,
        'custom_title' => null,
        'dashboard_element_id' => null,
        'description' => null,
        'destinations' => null,
        'field' => null,
        'followed' => null,
        'followable' => null,
        'id' => null,
        'is_disabled' => null,
        'disabled_reason' => null,
        'is_public' => null,
        'investigative_content_type' => null,
        'investigative_content_id' => null,
        'investigative_content_title' => null,
        'lookml_dashboard_id' => null,
        'lookml_link_id' => null,
        'owner_id' => null,
        'owner_display_name' => null,
        'threshold' => 'double',
        'time_series_condition_state' => null
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
        'applied_dashboard_filters' => 'applied_dashboard_filters',
        'comparison_type' => 'comparison_type',
        'cron' => 'cron',
        'custom_url_base' => 'custom_url_base',
        'custom_url_params' => 'custom_url_params',
        'custom_url_label' => 'custom_url_label',
        'show_custom_url' => 'show_custom_url',
        'custom_title' => 'custom_title',
        'dashboard_element_id' => 'dashboard_element_id',
        'description' => 'description',
        'destinations' => 'destinations',
        'field' => 'field',
        'followed' => 'followed',
        'followable' => 'followable',
        'id' => 'id',
        'is_disabled' => 'is_disabled',
        'disabled_reason' => 'disabled_reason',
        'is_public' => 'is_public',
        'investigative_content_type' => 'investigative_content_type',
        'investigative_content_id' => 'investigative_content_id',
        'investigative_content_title' => 'investigative_content_title',
        'lookml_dashboard_id' => 'lookml_dashboard_id',
        'lookml_link_id' => 'lookml_link_id',
        'owner_id' => 'owner_id',
        'owner_display_name' => 'owner_display_name',
        'threshold' => 'threshold',
        'time_series_condition_state' => 'time_series_condition_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applied_dashboard_filters' => 'setAppliedDashboardFilters',
        'comparison_type' => 'setComparisonType',
        'cron' => 'setCron',
        'custom_url_base' => 'setCustomUrlBase',
        'custom_url_params' => 'setCustomUrlParams',
        'custom_url_label' => 'setCustomUrlLabel',
        'show_custom_url' => 'setShowCustomUrl',
        'custom_title' => 'setCustomTitle',
        'dashboard_element_id' => 'setDashboardElementId',
        'description' => 'setDescription',
        'destinations' => 'setDestinations',
        'field' => 'setField',
        'followed' => 'setFollowed',
        'followable' => 'setFollowable',
        'id' => 'setId',
        'is_disabled' => 'setIsDisabled',
        'disabled_reason' => 'setDisabledReason',
        'is_public' => 'setIsPublic',
        'investigative_content_type' => 'setInvestigativeContentType',
        'investigative_content_id' => 'setInvestigativeContentId',
        'investigative_content_title' => 'setInvestigativeContentTitle',
        'lookml_dashboard_id' => 'setLookmlDashboardId',
        'lookml_link_id' => 'setLookmlLinkId',
        'owner_id' => 'setOwnerId',
        'owner_display_name' => 'setOwnerDisplayName',
        'threshold' => 'setThreshold',
        'time_series_condition_state' => 'setTimeSeriesConditionState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applied_dashboard_filters' => 'getAppliedDashboardFilters',
        'comparison_type' => 'getComparisonType',
        'cron' => 'getCron',
        'custom_url_base' => 'getCustomUrlBase',
        'custom_url_params' => 'getCustomUrlParams',
        'custom_url_label' => 'getCustomUrlLabel',
        'show_custom_url' => 'getShowCustomUrl',
        'custom_title' => 'getCustomTitle',
        'dashboard_element_id' => 'getDashboardElementId',
        'description' => 'getDescription',
        'destinations' => 'getDestinations',
        'field' => 'getField',
        'followed' => 'getFollowed',
        'followable' => 'getFollowable',
        'id' => 'getId',
        'is_disabled' => 'getIsDisabled',
        'disabled_reason' => 'getDisabledReason',
        'is_public' => 'getIsPublic',
        'investigative_content_type' => 'getInvestigativeContentType',
        'investigative_content_id' => 'getInvestigativeContentId',
        'investigative_content_title' => 'getInvestigativeContentTitle',
        'lookml_dashboard_id' => 'getLookmlDashboardId',
        'lookml_link_id' => 'getLookmlLinkId',
        'owner_id' => 'getOwnerId',
        'owner_display_name' => 'getOwnerDisplayName',
        'threshold' => 'getThreshold',
        'time_series_condition_state' => 'getTimeSeriesConditionState'
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
        $this->container['applied_dashboard_filters'] = isset($data['applied_dashboard_filters']) ? $data['applied_dashboard_filters'] : null;
        $this->container['comparison_type'] = isset($data['comparison_type']) ? $data['comparison_type'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['custom_url_base'] = isset($data['custom_url_base']) ? $data['custom_url_base'] : null;
        $this->container['custom_url_params'] = isset($data['custom_url_params']) ? $data['custom_url_params'] : null;
        $this->container['custom_url_label'] = isset($data['custom_url_label']) ? $data['custom_url_label'] : null;
        $this->container['show_custom_url'] = isset($data['show_custom_url']) ? $data['show_custom_url'] : null;
        $this->container['custom_title'] = isset($data['custom_title']) ? $data['custom_title'] : null;
        $this->container['dashboard_element_id'] = isset($data['dashboard_element_id']) ? $data['dashboard_element_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destinations'] = isset($data['destinations']) ? $data['destinations'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['followed'] = isset($data['followed']) ? $data['followed'] : null;
        $this->container['followable'] = isset($data['followable']) ? $data['followable'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_disabled'] = isset($data['is_disabled']) ? $data['is_disabled'] : null;
        $this->container['disabled_reason'] = isset($data['disabled_reason']) ? $data['disabled_reason'] : null;
        $this->container['is_public'] = isset($data['is_public']) ? $data['is_public'] : null;
        $this->container['investigative_content_type'] = isset($data['investigative_content_type']) ? $data['investigative_content_type'] : null;
        $this->container['investigative_content_id'] = isset($data['investigative_content_id']) ? $data['investigative_content_id'] : null;
        $this->container['investigative_content_title'] = isset($data['investigative_content_title']) ? $data['investigative_content_title'] : null;
        $this->container['lookml_dashboard_id'] = isset($data['lookml_dashboard_id']) ? $data['lookml_dashboard_id'] : null;
        $this->container['lookml_link_id'] = isset($data['lookml_link_id']) ? $data['lookml_link_id'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['owner_display_name'] = isset($data['owner_display_name']) ? $data['owner_display_name'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['time_series_condition_state'] = isset($data['time_series_condition_state']) ? $data['time_series_condition_state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['comparison_type'] === null) {
            $invalidProperties[] = "'comparison_type' can't be null";
        }
        if ($this->container['cron'] === null) {
            $invalidProperties[] = "'cron' can't be null";
        }
        if ($this->container['destinations'] === null) {
            $invalidProperties[] = "'destinations' can't be null";
        }
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['owner_id'] === null) {
            $invalidProperties[] = "'owner_id' can't be null";
        }
        if ($this->container['threshold'] === null) {
            $invalidProperties[] = "'threshold' can't be null";
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
     * Gets applied_dashboard_filters
     *
     * @return \Swagger\Client\Model\AlertAppliedDashboardFilter[]
     */
    public function getAppliedDashboardFilters()
    {
        return $this->container['applied_dashboard_filters'];
    }

    /**
     * Sets applied_dashboard_filters
     *
     * @param \Swagger\Client\Model\AlertAppliedDashboardFilter[] $applied_dashboard_filters Filters coming from the dashboard that are applied. Example `[{ \"filter_title\": \"Name\", \"field_name\": \"distribution_centers.name\", \"filter_value\": \"Los Angeles CA\" }]`
     *
     * @return $this
     */
    public function setAppliedDashboardFilters($applied_dashboard_filters)
    {
        $this->container['applied_dashboard_filters'] = $applied_dashboard_filters;

        return $this;
    }

    /**
     * Gets comparison_type
     *
     * @return string
     */
    public function getComparisonType()
    {
        return $this->container['comparison_type'];
    }

    /**
     * Sets comparison_type
     *
     * @param string $comparison_type This property informs the check what kind of comparison we are performing. Only certain condition types are valid for time series alerts. For details, refer to [Setting Alert Conditions](https://cloud.google.com/looker/docs/sharing-and-publishing/creating-alerts#setting_alert_conditions) Valid values are: \"EQUAL_TO\", \"GREATER_THAN\", \"GREATER_THAN_OR_EQUAL_TO\", \"LESS_THAN\", \"LESS_THAN_OR_EQUAL_TO\", \"INCREASES_BY\", \"DECREASES_BY\", \"CHANGES_BY\".
     *
     * @return $this
     */
    public function setComparisonType($comparison_type)
    {
        $this->container['comparison_type'] = $comparison_type;

        return $this;
    }

    /**
     * Gets cron
     *
     * @return string
     */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
     * Sets cron
     *
     * @param string $cron Vixie-Style crontab specification when to run. At minumum, it has to be longer than 15 minute intervals
     *
     * @return $this
     */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;

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
     * @param string $custom_url_base Domain for the custom url selected by the alert creator from the admin defined domain allowlist
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
     * @param string $custom_url_params Parameters and path for the custom url defined by the alert creator
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
     * @param string $custom_url_label Label for the custom url defined by the alert creator
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
     * @param bool $show_custom_url Boolean to determine if the custom url should be used
     *
     * @return $this
     */
    public function setShowCustomUrl($show_custom_url)
    {
        $this->container['show_custom_url'] = $show_custom_url;

        return $this;
    }

    /**
     * Gets custom_title
     *
     * @return string
     */
    public function getCustomTitle()
    {
        return $this->container['custom_title'];
    }

    /**
     * Sets custom_title
     *
     * @param string $custom_title An optional, user-defined title for the alert
     *
     * @return $this
     */
    public function setCustomTitle($custom_title)
    {
        $this->container['custom_title'] = $custom_title;

        return $this;
    }

    /**
     * Gets dashboard_element_id
     *
     * @return string
     */
    public function getDashboardElementId()
    {
        return $this->container['dashboard_element_id'];
    }

    /**
     * Sets dashboard_element_id
     *
     * @param string $dashboard_element_id ID of the dashboard element associated with the alert. Refer to [dashboard_element()](#!/Dashboard/DashboardElement)
     *
     * @return $this
     */
    public function setDashboardElementId($dashboard_element_id)
    {
        $this->container['dashboard_element_id'] = $dashboard_element_id;

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
     * @param string $description An optional description for the alert. This supplements the title
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \Swagger\Client\Model\AlertDestination[]
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Swagger\Client\Model\AlertDestination[] $destinations Array of destinations to send alerts to. Must be the same type of destination. Example `[{ \"destination_type\": \"EMAIL\", \"email_address\": \"test@test.com\" }]`
     *
     * @return $this
     */
    public function setDestinations($destinations)
    {
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets field
     *
     * @return \Swagger\Client\Model\AlertField
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param \Swagger\Client\Model\AlertField $field The field the alert threshold is compared against when determining when to send notifications
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets followed
     *
     * @return bool
     */
    public function getFollowed()
    {
        return $this->container['followed'];
    }

    /**
     * Sets followed
     *
     * @param bool $followed Whether or not the user follows this alert.
     *
     * @return $this
     */
    public function setFollowed($followed)
    {
        $this->container['followed'] = $followed;

        return $this;
    }

    /**
     * Gets followable
     *
     * @return bool
     */
    public function getFollowable()
    {
        return $this->container['followable'];
    }

    /**
     * Sets followable
     *
     * @param bool $followable Whether or not the alert is followable
     *
     * @return $this
     */
    public function setFollowable($followable)
    {
        $this->container['followable'] = $followable;

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
     * @param string $id ID of the alert
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool $is_disabled Whether or not the alert is disabled
     *
     * @return $this
     */
    public function setIsDisabled($is_disabled)
    {
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets disabled_reason
     *
     * @return string
     */
    public function getDisabledReason()
    {
        return $this->container['disabled_reason'];
    }

    /**
     * Sets disabled_reason
     *
     * @param string $disabled_reason Reason for disabling alert
     *
     * @return $this
     */
    public function setDisabledReason($disabled_reason)
    {
        $this->container['disabled_reason'] = $disabled_reason;

        return $this;
    }

    /**
     * Gets is_public
     *
     * @return bool
     */
    public function getIsPublic()
    {
        return $this->container['is_public'];
    }

    /**
     * Sets is_public
     *
     * @param bool $is_public Whether or not the alert is public
     *
     * @return $this
     */
    public function setIsPublic($is_public)
    {
        $this->container['is_public'] = $is_public;

        return $this;
    }

    /**
     * Gets investigative_content_type
     *
     * @return string
     */
    public function getInvestigativeContentType()
    {
        return $this->container['investigative_content_type'];
    }

    /**
     * Sets investigative_content_type
     *
     * @param string $investigative_content_type The type of the investigative content Valid values are: \"dashboard\".
     *
     * @return $this
     */
    public function setInvestigativeContentType($investigative_content_type)
    {
        $this->container['investigative_content_type'] = $investigative_content_type;

        return $this;
    }

    /**
     * Gets investigative_content_id
     *
     * @return string
     */
    public function getInvestigativeContentId()
    {
        return $this->container['investigative_content_id'];
    }

    /**
     * Sets investigative_content_id
     *
     * @param string $investigative_content_id The ID of the investigative content. For dashboards, this will be the dashboard ID
     *
     * @return $this
     */
    public function setInvestigativeContentId($investigative_content_id)
    {
        $this->container['investigative_content_id'] = $investigative_content_id;

        return $this;
    }

    /**
     * Gets investigative_content_title
     *
     * @return string
     */
    public function getInvestigativeContentTitle()
    {
        return $this->container['investigative_content_title'];
    }

    /**
     * Sets investigative_content_title
     *
     * @param string $investigative_content_title The title of the investigative content.
     *
     * @return $this
     */
    public function setInvestigativeContentTitle($investigative_content_title)
    {
        $this->container['investigative_content_title'] = $investigative_content_title;

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
     * @param string $lookml_dashboard_id ID of the LookML dashboard associated with the alert
     *
     * @return $this
     */
    public function setLookmlDashboardId($lookml_dashboard_id)
    {
        $this->container['lookml_dashboard_id'] = $lookml_dashboard_id;

        return $this;
    }

    /**
     * Gets lookml_link_id
     *
     * @return string
     */
    public function getLookmlLinkId()
    {
        return $this->container['lookml_link_id'];
    }

    /**
     * Sets lookml_link_id
     *
     * @param string $lookml_link_id ID of the LookML dashboard element associated with the alert
     *
     * @return $this
     */
    public function setLookmlLinkId($lookml_link_id)
    {
        $this->container['lookml_link_id'] = $lookml_link_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string $owner_id User id of alert owner
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets owner_display_name
     *
     * @return string
     */
    public function getOwnerDisplayName()
    {
        return $this->container['owner_display_name'];
    }

    /**
     * Sets owner_display_name
     *
     * @param string $owner_display_name Alert owner's display name
     *
     * @return $this
     */
    public function setOwnerDisplayName($owner_display_name)
    {
        $this->container['owner_display_name'] = $owner_display_name;

        return $this;
    }

    /**
     * Gets threshold
     *
     * @return double
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param double $threshold Value of the alert threshold
     *
     * @return $this
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

        return $this;
    }

    /**
     * Gets time_series_condition_state
     *
     * @return \Swagger\Client\Model\AlertConditionState
     */
    public function getTimeSeriesConditionState()
    {
        return $this->container['time_series_condition_state'];
    }

    /**
     * Sets time_series_condition_state
     *
     * @param \Swagger\Client\Model\AlertConditionState $time_series_condition_state (Write-Only) (Optional) Only used when first creating time series alerts. It's used to pick a starting time reference from which alerts will be evaluated again. Without it, alerts be run against all time series data. Refer to [docs](https://cloud.google.com/looker/docs/sharing-and-publishing/creating-alerts) for details. Example `{ latest_time_series_id: '2020-09-17', previous_time_series_id: '2020-09-16' }`.
     *
     * @return $this
     */
    public function setTimeSeriesConditionState($time_series_condition_state)
    {
        $this->container['time_series_condition_state'] = $time_series_condition_state;

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


