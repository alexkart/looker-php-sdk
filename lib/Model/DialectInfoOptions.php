<?php
/**
 * DialectInfoOptions
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
 * DialectInfoOptions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DialectInfoOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DialectInfoOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_params' => 'bool',
        'after_connect_statements' => 'bool',
        'analytical_view_dataset' => 'bool',
        'auth' => 'bool',
        'cost_estimate' => 'bool',
        'disable_context_comment' => 'bool',
        'host' => 'bool',
        'instance_name' => 'bool',
        'max_billing_gigabytes' => 'bool',
        'oauth_credentials' => 'bool',
        'pdts_for_oauth' => 'bool',
        'port' => 'bool',
        'project_name' => 'bool',
        'schema' => 'bool',
        'service_account_credentials' => 'bool',
        'ssl' => 'bool',
        'timezone' => 'bool',
        'tmp_table' => 'bool',
        'tns' => 'bool',
        'username' => 'bool',
        'username_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_params' => null,
        'after_connect_statements' => null,
        'analytical_view_dataset' => null,
        'auth' => null,
        'cost_estimate' => null,
        'disable_context_comment' => null,
        'host' => null,
        'instance_name' => null,
        'max_billing_gigabytes' => null,
        'oauth_credentials' => null,
        'pdts_for_oauth' => null,
        'port' => null,
        'project_name' => null,
        'schema' => null,
        'service_account_credentials' => null,
        'ssl' => null,
        'timezone' => null,
        'tmp_table' => null,
        'tns' => null,
        'username' => null,
        'username_required' => null
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
        'additional_params' => 'additional_params',
        'after_connect_statements' => 'after_connect_statements',
        'analytical_view_dataset' => 'analytical_view_dataset',
        'auth' => 'auth',
        'cost_estimate' => 'cost_estimate',
        'disable_context_comment' => 'disable_context_comment',
        'host' => 'host',
        'instance_name' => 'instance_name',
        'max_billing_gigabytes' => 'max_billing_gigabytes',
        'oauth_credentials' => 'oauth_credentials',
        'pdts_for_oauth' => 'pdts_for_oauth',
        'port' => 'port',
        'project_name' => 'project_name',
        'schema' => 'schema',
        'service_account_credentials' => 'service_account_credentials',
        'ssl' => 'ssl',
        'timezone' => 'timezone',
        'tmp_table' => 'tmp_table',
        'tns' => 'tns',
        'username' => 'username',
        'username_required' => 'username_required'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_params' => 'setAdditionalParams',
        'after_connect_statements' => 'setAfterConnectStatements',
        'analytical_view_dataset' => 'setAnalyticalViewDataset',
        'auth' => 'setAuth',
        'cost_estimate' => 'setCostEstimate',
        'disable_context_comment' => 'setDisableContextComment',
        'host' => 'setHost',
        'instance_name' => 'setInstanceName',
        'max_billing_gigabytes' => 'setMaxBillingGigabytes',
        'oauth_credentials' => 'setOauthCredentials',
        'pdts_for_oauth' => 'setPdtsForOauth',
        'port' => 'setPort',
        'project_name' => 'setProjectName',
        'schema' => 'setSchema',
        'service_account_credentials' => 'setServiceAccountCredentials',
        'ssl' => 'setSsl',
        'timezone' => 'setTimezone',
        'tmp_table' => 'setTmpTable',
        'tns' => 'setTns',
        'username' => 'setUsername',
        'username_required' => 'setUsernameRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_params' => 'getAdditionalParams',
        'after_connect_statements' => 'getAfterConnectStatements',
        'analytical_view_dataset' => 'getAnalyticalViewDataset',
        'auth' => 'getAuth',
        'cost_estimate' => 'getCostEstimate',
        'disable_context_comment' => 'getDisableContextComment',
        'host' => 'getHost',
        'instance_name' => 'getInstanceName',
        'max_billing_gigabytes' => 'getMaxBillingGigabytes',
        'oauth_credentials' => 'getOauthCredentials',
        'pdts_for_oauth' => 'getPdtsForOauth',
        'port' => 'getPort',
        'project_name' => 'getProjectName',
        'schema' => 'getSchema',
        'service_account_credentials' => 'getServiceAccountCredentials',
        'ssl' => 'getSsl',
        'timezone' => 'getTimezone',
        'tmp_table' => 'getTmpTable',
        'tns' => 'getTns',
        'username' => 'getUsername',
        'username_required' => 'getUsernameRequired'
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
        $this->container['additional_params'] = isset($data['additional_params']) ? $data['additional_params'] : null;
        $this->container['after_connect_statements'] = isset($data['after_connect_statements']) ? $data['after_connect_statements'] : null;
        $this->container['analytical_view_dataset'] = isset($data['analytical_view_dataset']) ? $data['analytical_view_dataset'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['cost_estimate'] = isset($data['cost_estimate']) ? $data['cost_estimate'] : null;
        $this->container['disable_context_comment'] = isset($data['disable_context_comment']) ? $data['disable_context_comment'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['instance_name'] = isset($data['instance_name']) ? $data['instance_name'] : null;
        $this->container['max_billing_gigabytes'] = isset($data['max_billing_gigabytes']) ? $data['max_billing_gigabytes'] : null;
        $this->container['oauth_credentials'] = isset($data['oauth_credentials']) ? $data['oauth_credentials'] : null;
        $this->container['pdts_for_oauth'] = isset($data['pdts_for_oauth']) ? $data['pdts_for_oauth'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['service_account_credentials'] = isset($data['service_account_credentials']) ? $data['service_account_credentials'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['tmp_table'] = isset($data['tmp_table']) ? $data['tmp_table'] : null;
        $this->container['tns'] = isset($data['tns']) ? $data['tns'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['username_required'] = isset($data['username_required']) ? $data['username_required'] : null;
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
     * Gets additional_params
     *
     * @return bool
     */
    public function getAdditionalParams()
    {
        return $this->container['additional_params'];
    }

    /**
     * Sets additional_params
     *
     * @param bool $additional_params Has additional params support
     *
     * @return $this
     */
    public function setAdditionalParams($additional_params)
    {
        $this->container['additional_params'] = $additional_params;

        return $this;
    }

    /**
     * Gets after_connect_statements
     *
     * @return bool
     */
    public function getAfterConnectStatements()
    {
        return $this->container['after_connect_statements'];
    }

    /**
     * Sets after_connect_statements
     *
     * @param bool $after_connect_statements Has support for issuing statements after connecting to the database
     *
     * @return $this
     */
    public function setAfterConnectStatements($after_connect_statements)
    {
        $this->container['after_connect_statements'] = $after_connect_statements;

        return $this;
    }

    /**
     * Gets analytical_view_dataset
     *
     * @return bool
     */
    public function getAnalyticalViewDataset()
    {
        return $this->container['analytical_view_dataset'];
    }

    /**
     * Sets analytical_view_dataset
     *
     * @param bool $analytical_view_dataset Has analytical view support
     *
     * @return $this
     */
    public function setAnalyticalViewDataset($analytical_view_dataset)
    {
        $this->container['analytical_view_dataset'] = $analytical_view_dataset;

        return $this;
    }

    /**
     * Gets auth
     *
     * @return bool
     */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth
     *
     * @param bool $auth Has auth support
     *
     * @return $this
     */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;

        return $this;
    }

    /**
     * Gets cost_estimate
     *
     * @return bool
     */
    public function getCostEstimate()
    {
        return $this->container['cost_estimate'];
    }

    /**
     * Sets cost_estimate
     *
     * @param bool $cost_estimate Has configurable cost estimation
     *
     * @return $this
     */
    public function setCostEstimate($cost_estimate)
    {
        $this->container['cost_estimate'] = $cost_estimate;

        return $this;
    }

    /**
     * Gets disable_context_comment
     *
     * @return bool
     */
    public function getDisableContextComment()
    {
        return $this->container['disable_context_comment'];
    }

    /**
     * Sets disable_context_comment
     *
     * @param bool $disable_context_comment Can disable query context comments
     *
     * @return $this
     */
    public function setDisableContextComment($disable_context_comment)
    {
        $this->container['disable_context_comment'] = $disable_context_comment;

        return $this;
    }

    /**
     * Gets host
     *
     * @return bool
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param bool $host Host is required
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets instance_name
     *
     * @return bool
     */
    public function getInstanceName()
    {
        return $this->container['instance_name'];
    }

    /**
     * Sets instance_name
     *
     * @param bool $instance_name Instance name is required
     *
     * @return $this
     */
    public function setInstanceName($instance_name)
    {
        $this->container['instance_name'] = $instance_name;

        return $this;
    }

    /**
     * Gets max_billing_gigabytes
     *
     * @return bool
     */
    public function getMaxBillingGigabytes()
    {
        return $this->container['max_billing_gigabytes'];
    }

    /**
     * Sets max_billing_gigabytes
     *
     * @param bool $max_billing_gigabytes Has max billing gigabytes support
     *
     * @return $this
     */
    public function setMaxBillingGigabytes($max_billing_gigabytes)
    {
        $this->container['max_billing_gigabytes'] = $max_billing_gigabytes;

        return $this;
    }

    /**
     * Gets oauth_credentials
     *
     * @return bool
     */
    public function getOauthCredentials()
    {
        return $this->container['oauth_credentials'];
    }

    /**
     * Sets oauth_credentials
     *
     * @param bool $oauth_credentials Has support for a service account
     *
     * @return $this
     */
    public function setOauthCredentials($oauth_credentials)
    {
        $this->container['oauth_credentials'] = $oauth_credentials;

        return $this;
    }

    /**
     * Gets pdts_for_oauth
     *
     * @return bool
     */
    public function getPdtsForOauth()
    {
        return $this->container['pdts_for_oauth'];
    }

    /**
     * Sets pdts_for_oauth
     *
     * @param bool $pdts_for_oauth Has OAuth for PDT support
     *
     * @return $this
     */
    public function setPdtsForOauth($pdts_for_oauth)
    {
        $this->container['pdts_for_oauth'] = $pdts_for_oauth;

        return $this;
    }

    /**
     * Gets port
     *
     * @return bool
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param bool $port Port can be specified
     *
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return bool
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param bool $project_name Has project name support
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return bool
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param bool $schema Schema can be specified
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets service_account_credentials
     *
     * @return bool
     */
    public function getServiceAccountCredentials()
    {
        return $this->container['service_account_credentials'];
    }

    /**
     * Sets service_account_credentials
     *
     * @param bool $service_account_credentials Has support for a service account
     *
     * @return $this
     */
    public function setServiceAccountCredentials($service_account_credentials)
    {
        $this->container['service_account_credentials'] = $service_account_credentials;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return bool
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param bool $ssl Has TLS/SSL support
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return bool
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param bool $timezone Has timezone support
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets tmp_table
     *
     * @return bool
     */
    public function getTmpTable()
    {
        return $this->container['tmp_table'];
    }

    /**
     * Sets tmp_table
     *
     * @param bool $tmp_table Has tmp table support
     *
     * @return $this
     */
    public function setTmpTable($tmp_table)
    {
        $this->container['tmp_table'] = $tmp_table;

        return $this;
    }

    /**
     * Gets tns
     *
     * @return bool
     */
    public function getTns()
    {
        return $this->container['tns'];
    }

    /**
     * Sets tns
     *
     * @param bool $tns Has Oracle TNS support
     *
     * @return $this
     */
    public function setTns($tns)
    {
        $this->container['tns'] = $tns;

        return $this;
    }

    /**
     * Gets username
     *
     * @return bool
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param bool $username Username can be specified
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets username_required
     *
     * @return bool
     */
    public function getUsernameRequired()
    {
        return $this->container['username_required'];
    }

    /**
     * Sets username_required
     *
     * @param bool $username_required Username is required
     *
     * @return $this
     */
    public function setUsernameRequired($username_required)
    {
        $this->container['username_required'] = $username_required;

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


