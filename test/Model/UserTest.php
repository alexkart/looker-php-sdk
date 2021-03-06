<?php
/**
 * UserTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 3.1 Reference
 *
 * ### Authorization  The classic method of API authorization uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://looker.com/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://looker.com/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://looker.com/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://looker.com/docs/r/api/versioning).   ### 3.1 Legacy API  API 3.1 is now **deprecated**. API 4.0 should be used instead.  The text below is retained for reference purposes.  The following are a few examples of noteworthy items that have changed between API 3.0 and API 3.1. For more comprehensive coverage of API changes, please see the release notes for your Looker release.  ### Examples of new things added in API 3.1 (compared to API 3.0):  * [Dashboard construction](#!/3.1/Dashboard/) APIs * [Themes](#!/3.1/Theme/) and [custom color collections](#!/3.1/ColorCollection) APIs * Create and run [SQL Runner](#!/3.1/Query/run_sql_query) queries * Create and run [merged results](#!/3.1/Query/create_merge_query) queries * Create and modify [dashboard filters](#!/3.1/Dashboard/create_dashboard_filter) * Create and modify [password requirements](#!/3.1/Auth/password_config)  ### Deprecated in API 3.0  The following functions and properties have been deprecated in API 3.0.  They continue to exist and work in API 3.0 for the next several Looker releases but they have not been carried forward to API 3.1:  * Dashboard Prefetch functions * User access_filter functions * User API 1.0 credentials functions * Space.is_root and Space.is_user_root properties. Use Space.is_shared_root and Space.is_users_root instead.  ### Semantic changes in API 3.1:  * [all_looks()](#!/3.1/Look/all_looks) no longer includes soft-deleted looks, matching [all_dashboards()](#!/3.1/Dashboard/all_dashboards) behavior. You can find soft-deleted looks using [search_looks()](#!/3.1/Look/search_looks) with the `deleted` param set to True. * [all_spaces()](#!/3.1/Space/all_spaces) no longer includes duplicate items * [search_users()](#!/3.1/User/search_users) no longer accepts Y,y,1,0,N,n for Boolean params, only \"true\" and \"false\". * For greater client and network compatibility, [render_task_results](#!/3.1/RenderTask/render_task_results) now returns HTTP status **202 Accepted** instead of HTTP status **102 Processing** * [all_running_queries()](#!/3.1/Query/all_running_queries) and [kill_query](#!/3.1/Query/kill_query) functions have moved into the [Query](#!/3.1/Query/) function group.  The API Explorer can be used to [interactively compare](https://looker.com/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://looker.com/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 3.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * UserTest Class Doc Comment
 *
 * @category    Class
 * @description User
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "User"
     */
    public function testUser()
    {
    }

    /**
     * Test attribute "can"
     */
    public function testPropertyCan()
    {
    }

    /**
     * Test attribute "avatar_url"
     */
    public function testPropertyAvatarUrl()
    {
    }

    /**
     * Test attribute "avatar_url_without_sizing"
     */
    public function testPropertyAvatarUrlWithoutSizing()
    {
    }

    /**
     * Test attribute "credentials_api3"
     */
    public function testPropertyCredentialsApi3()
    {
    }

    /**
     * Test attribute "credentials_email"
     */
    public function testPropertyCredentialsEmail()
    {
    }

    /**
     * Test attribute "credentials_embed"
     */
    public function testPropertyCredentialsEmbed()
    {
    }

    /**
     * Test attribute "credentials_google"
     */
    public function testPropertyCredentialsGoogle()
    {
    }

    /**
     * Test attribute "credentials_ldap"
     */
    public function testPropertyCredentialsLdap()
    {
    }

    /**
     * Test attribute "credentials_looker_openid"
     */
    public function testPropertyCredentialsLookerOpenid()
    {
    }

    /**
     * Test attribute "credentials_oidc"
     */
    public function testPropertyCredentialsOidc()
    {
    }

    /**
     * Test attribute "credentials_saml"
     */
    public function testPropertyCredentialsSaml()
    {
    }

    /**
     * Test attribute "credentials_totp"
     */
    public function testPropertyCredentialsTotp()
    {
    }

    /**
     * Test attribute "display_name"
     */
    public function testPropertyDisplayName()
    {
    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {
    }

    /**
     * Test attribute "embed_group_space_id"
     */
    public function testPropertyEmbedGroupSpaceId()
    {
    }

    /**
     * Test attribute "first_name"
     */
    public function testPropertyFirstName()
    {
    }

    /**
     * Test attribute "group_ids"
     */
    public function testPropertyGroupIds()
    {
    }

    /**
     * Test attribute "home_space_id"
     */
    public function testPropertyHomeSpaceId()
    {
    }

    /**
     * Test attribute "home_folder_id"
     */
    public function testPropertyHomeFolderId()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "is_disabled"
     */
    public function testPropertyIsDisabled()
    {
    }

    /**
     * Test attribute "last_name"
     */
    public function testPropertyLastName()
    {
    }

    /**
     * Test attribute "locale"
     */
    public function testPropertyLocale()
    {
    }

    /**
     * Test attribute "looker_versions"
     */
    public function testPropertyLookerVersions()
    {
    }

    /**
     * Test attribute "models_dir_validated"
     */
    public function testPropertyModelsDirValidated()
    {
    }

    /**
     * Test attribute "personal_space_id"
     */
    public function testPropertyPersonalSpaceId()
    {
    }

    /**
     * Test attribute "personal_folder_id"
     */
    public function testPropertyPersonalFolderId()
    {
    }

    /**
     * Test attribute "presumed_looker_employee"
     */
    public function testPropertyPresumedLookerEmployee()
    {
    }

    /**
     * Test attribute "role_ids"
     */
    public function testPropertyRoleIds()
    {
    }

    /**
     * Test attribute "sessions"
     */
    public function testPropertySessions()
    {
    }

    /**
     * Test attribute "ui_state"
     */
    public function testPropertyUiState()
    {
    }

    /**
     * Test attribute "verified_looker_employee"
     */
    public function testPropertyVerifiedLookerEmployee()
    {
    }

    /**
     * Test attribute "roles_externally_managed"
     */
    public function testPropertyRolesExternallyManaged()
    {
    }

    /**
     * Test attribute "allow_direct_roles"
     */
    public function testPropertyAllowDirectRoles()
    {
    }

    /**
     * Test attribute "allow_normal_group_membership"
     */
    public function testPropertyAllowNormalGroupMembership()
    {
    }

    /**
     * Test attribute "allow_roles_from_normal_groups"
     */
    public function testPropertyAllowRolesFromNormalGroups()
    {
    }

    /**
     * Test attribute "url"
     */
    public function testPropertyUrl()
    {
    }
}
