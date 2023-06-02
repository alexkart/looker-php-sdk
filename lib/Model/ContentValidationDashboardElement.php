<?php
/**
 * ContentValidationDashboardElement
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
 * ContentValidationDashboardElement Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentValidationDashboardElement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContentValidationDashboardElement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'body_text' => 'string',
        'dashboard_id' => 'string',
        'id' => 'string',
        'look_id' => 'string',
        'note_display' => 'string',
        'note_state' => 'string',
        'note_text' => 'string',
        'note_text_as_html' => 'string',
        'query_id' => 'string',
        'subtitle_text' => 'string',
        'title' => 'string',
        'title_hidden' => 'bool',
        'title_text' => 'string',
        'type' => 'string',
        'rich_content_json' => 'string',
        'extension_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'body_text' => null,
        'dashboard_id' => null,
        'id' => null,
        'look_id' => null,
        'note_display' => null,
        'note_state' => null,
        'note_text' => null,
        'note_text_as_html' => null,
        'query_id' => null,
        'subtitle_text' => null,
        'title' => null,
        'title_hidden' => null,
        'title_text' => null,
        'type' => null,
        'rich_content_json' => null,
        'extension_id' => null
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
        'body_text' => 'body_text',
        'dashboard_id' => 'dashboard_id',
        'id' => 'id',
        'look_id' => 'look_id',
        'note_display' => 'note_display',
        'note_state' => 'note_state',
        'note_text' => 'note_text',
        'note_text_as_html' => 'note_text_as_html',
        'query_id' => 'query_id',
        'subtitle_text' => 'subtitle_text',
        'title' => 'title',
        'title_hidden' => 'title_hidden',
        'title_text' => 'title_text',
        'type' => 'type',
        'rich_content_json' => 'rich_content_json',
        'extension_id' => 'extension_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'body_text' => 'setBodyText',
        'dashboard_id' => 'setDashboardId',
        'id' => 'setId',
        'look_id' => 'setLookId',
        'note_display' => 'setNoteDisplay',
        'note_state' => 'setNoteState',
        'note_text' => 'setNoteText',
        'note_text_as_html' => 'setNoteTextAsHtml',
        'query_id' => 'setQueryId',
        'subtitle_text' => 'setSubtitleText',
        'title' => 'setTitle',
        'title_hidden' => 'setTitleHidden',
        'title_text' => 'setTitleText',
        'type' => 'setType',
        'rich_content_json' => 'setRichContentJson',
        'extension_id' => 'setExtensionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'body_text' => 'getBodyText',
        'dashboard_id' => 'getDashboardId',
        'id' => 'getId',
        'look_id' => 'getLookId',
        'note_display' => 'getNoteDisplay',
        'note_state' => 'getNoteState',
        'note_text' => 'getNoteText',
        'note_text_as_html' => 'getNoteTextAsHtml',
        'query_id' => 'getQueryId',
        'subtitle_text' => 'getSubtitleText',
        'title' => 'getTitle',
        'title_hidden' => 'getTitleHidden',
        'title_text' => 'getTitleText',
        'type' => 'getType',
        'rich_content_json' => 'getRichContentJson',
        'extension_id' => 'getExtensionId'
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
        $this->container['body_text'] = isset($data['body_text']) ? $data['body_text'] : null;
        $this->container['dashboard_id'] = isset($data['dashboard_id']) ? $data['dashboard_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['look_id'] = isset($data['look_id']) ? $data['look_id'] : null;
        $this->container['note_display'] = isset($data['note_display']) ? $data['note_display'] : null;
        $this->container['note_state'] = isset($data['note_state']) ? $data['note_state'] : null;
        $this->container['note_text'] = isset($data['note_text']) ? $data['note_text'] : null;
        $this->container['note_text_as_html'] = isset($data['note_text_as_html']) ? $data['note_text_as_html'] : null;
        $this->container['query_id'] = isset($data['query_id']) ? $data['query_id'] : null;
        $this->container['subtitle_text'] = isset($data['subtitle_text']) ? $data['subtitle_text'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['title_hidden'] = isset($data['title_hidden']) ? $data['title_hidden'] : null;
        $this->container['title_text'] = isset($data['title_text']) ? $data['title_text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['rich_content_json'] = isset($data['rich_content_json']) ? $data['rich_content_json'] : null;
        $this->container['extension_id'] = isset($data['extension_id']) ? $data['extension_id'] : null;
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
     * Gets body_text
     *
     * @return string
     */
    public function getBodyText()
    {
        return $this->container['body_text'];
    }

    /**
     * Sets body_text
     *
     * @param string $body_text Text tile body text
     *
     * @return $this
     */
    public function setBodyText($body_text)
    {
        $this->container['body_text'] = $body_text;

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
     * @param string $look_id Id Of Look
     *
     * @return $this
     */
    public function setLookId($look_id)
    {
        $this->container['look_id'] = $look_id;

        return $this;
    }

    /**
     * Gets note_display
     *
     * @return string
     */
    public function getNoteDisplay()
    {
        return $this->container['note_display'];
    }

    /**
     * Sets note_display
     *
     * @param string $note_display Note Display
     *
     * @return $this
     */
    public function setNoteDisplay($note_display)
    {
        $this->container['note_display'] = $note_display;

        return $this;
    }

    /**
     * Gets note_state
     *
     * @return string
     */
    public function getNoteState()
    {
        return $this->container['note_state'];
    }

    /**
     * Sets note_state
     *
     * @param string $note_state Note State
     *
     * @return $this
     */
    public function setNoteState($note_state)
    {
        $this->container['note_state'] = $note_state;

        return $this;
    }

    /**
     * Gets note_text
     *
     * @return string
     */
    public function getNoteText()
    {
        return $this->container['note_text'];
    }

    /**
     * Sets note_text
     *
     * @param string $note_text Note Text
     *
     * @return $this
     */
    public function setNoteText($note_text)
    {
        $this->container['note_text'] = $note_text;

        return $this;
    }

    /**
     * Gets note_text_as_html
     *
     * @return string
     */
    public function getNoteTextAsHtml()
    {
        return $this->container['note_text_as_html'];
    }

    /**
     * Sets note_text_as_html
     *
     * @param string $note_text_as_html Note Text as Html
     *
     * @return $this
     */
    public function setNoteTextAsHtml($note_text_as_html)
    {
        $this->container['note_text_as_html'] = $note_text_as_html;

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
     * @param string $query_id Id Of Query
     *
     * @return $this
     */
    public function setQueryId($query_id)
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets subtitle_text
     *
     * @return string
     */
    public function getSubtitleText()
    {
        return $this->container['subtitle_text'];
    }

    /**
     * Sets subtitle_text
     *
     * @param string $subtitle_text Text tile subtitle text
     *
     * @return $this
     */
    public function setSubtitleText($subtitle_text)
    {
        $this->container['subtitle_text'] = $subtitle_text;

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
     * @param string $title Title of dashboard element
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_hidden
     *
     * @return bool
     */
    public function getTitleHidden()
    {
        return $this->container['title_hidden'];
    }

    /**
     * Sets title_hidden
     *
     * @param bool $title_hidden Whether title is hidden
     *
     * @return $this
     */
    public function setTitleHidden($title_hidden)
    {
        $this->container['title_hidden'] = $title_hidden;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param string $title_text Text tile title
     *
     * @return $this
     */
    public function setTitleText($title_text)
    {
        $this->container['title_text'] = $title_text;

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
     * @param string $type Type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets rich_content_json
     *
     * @return string
     */
    public function getRichContentJson()
    {
        return $this->container['rich_content_json'];
    }

    /**
     * Sets rich_content_json
     *
     * @param string $rich_content_json JSON with all the properties required for rich editor and buttons elements
     *
     * @return $this
     */
    public function setRichContentJson($rich_content_json)
    {
        $this->container['rich_content_json'] = $rich_content_json;

        return $this;
    }

    /**
     * Gets extension_id
     *
     * @return string
     */
    public function getExtensionId()
    {
        return $this->container['extension_id'];
    }

    /**
     * Sets extension_id
     *
     * @param string $extension_id Extension ID
     *
     * @return $this
     */
    public function setExtensionId($extension_id)
    {
        $this->container['extension_id'] = $extension_id;

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

