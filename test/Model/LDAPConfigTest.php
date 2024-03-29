<?php
/**
 * LDAPConfigTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * LDAPConfigTest Class Doc Comment
 *
 * @category    Class
 * @description LDAPConfig
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LDAPConfigTest extends \PHPUnit_Framework_TestCase
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
     * Test "LDAPConfig"
     */
    public function testLDAPConfig()
    {
    }

    /**
     * Test attribute "can"
     */
    public function testPropertyCan()
    {
    }

    /**
     * Test attribute "alternate_email_login_allowed"
     */
    public function testPropertyAlternateEmailLoginAllowed()
    {
    }

    /**
     * Test attribute "auth_password"
     */
    public function testPropertyAuthPassword()
    {
    }

    /**
     * Test attribute "auth_requires_role"
     */
    public function testPropertyAuthRequiresRole()
    {
    }

    /**
     * Test attribute "auth_username"
     */
    public function testPropertyAuthUsername()
    {
    }

    /**
     * Test attribute "connection_host"
     */
    public function testPropertyConnectionHost()
    {
    }

    /**
     * Test attribute "connection_port"
     */
    public function testPropertyConnectionPort()
    {
    }

    /**
     * Test attribute "connection_tls"
     */
    public function testPropertyConnectionTls()
    {
    }

    /**
     * Test attribute "connection_tls_no_verify"
     */
    public function testPropertyConnectionTlsNoVerify()
    {
    }

    /**
     * Test attribute "default_new_user_group_ids"
     */
    public function testPropertyDefaultNewUserGroupIds()
    {
    }

    /**
     * Test attribute "default_new_user_groups"
     */
    public function testPropertyDefaultNewUserGroups()
    {
    }

    /**
     * Test attribute "default_new_user_role_ids"
     */
    public function testPropertyDefaultNewUserRoleIds()
    {
    }

    /**
     * Test attribute "default_new_user_roles"
     */
    public function testPropertyDefaultNewUserRoles()
    {
    }

    /**
     * Test attribute "enabled"
     */
    public function testPropertyEnabled()
    {
    }

    /**
     * Test attribute "force_no_page"
     */
    public function testPropertyForceNoPage()
    {
    }

    /**
     * Test attribute "groups"
     */
    public function testPropertyGroups()
    {
    }

    /**
     * Test attribute "groups_base_dn"
     */
    public function testPropertyGroupsBaseDn()
    {
    }

    /**
     * Test attribute "groups_finder_type"
     */
    public function testPropertyGroupsFinderType()
    {
    }

    /**
     * Test attribute "groups_member_attribute"
     */
    public function testPropertyGroupsMemberAttribute()
    {
    }

    /**
     * Test attribute "groups_objectclasses"
     */
    public function testPropertyGroupsObjectclasses()
    {
    }

    /**
     * Test attribute "groups_user_attribute"
     */
    public function testPropertyGroupsUserAttribute()
    {
    }

    /**
     * Test attribute "groups_with_role_ids"
     */
    public function testPropertyGroupsWithRoleIds()
    {
    }

    /**
     * Test attribute "has_auth_password"
     */
    public function testPropertyHasAuthPassword()
    {
    }

    /**
     * Test attribute "merge_new_users_by_email"
     */
    public function testPropertyMergeNewUsersByEmail()
    {
    }

    /**
     * Test attribute "modified_at"
     */
    public function testPropertyModifiedAt()
    {
    }

    /**
     * Test attribute "modified_by"
     */
    public function testPropertyModifiedBy()
    {
    }

    /**
     * Test attribute "set_roles_from_groups"
     */
    public function testPropertySetRolesFromGroups()
    {
    }

    /**
     * Test attribute "test_ldap_password"
     */
    public function testPropertyTestLdapPassword()
    {
    }

    /**
     * Test attribute "test_ldap_user"
     */
    public function testPropertyTestLdapUser()
    {
    }

    /**
     * Test attribute "user_attribute_map_email"
     */
    public function testPropertyUserAttributeMapEmail()
    {
    }

    /**
     * Test attribute "user_attribute_map_first_name"
     */
    public function testPropertyUserAttributeMapFirstName()
    {
    }

    /**
     * Test attribute "user_attribute_map_last_name"
     */
    public function testPropertyUserAttributeMapLastName()
    {
    }

    /**
     * Test attribute "user_attribute_map_ldap_id"
     */
    public function testPropertyUserAttributeMapLdapId()
    {
    }

    /**
     * Test attribute "user_attributes"
     */
    public function testPropertyUserAttributes()
    {
    }

    /**
     * Test attribute "user_attributes_with_ids"
     */
    public function testPropertyUserAttributesWithIds()
    {
    }

    /**
     * Test attribute "user_bind_base_dn"
     */
    public function testPropertyUserBindBaseDn()
    {
    }

    /**
     * Test attribute "user_custom_filter"
     */
    public function testPropertyUserCustomFilter()
    {
    }

    /**
     * Test attribute "user_id_attribute_names"
     */
    public function testPropertyUserIdAttributeNames()
    {
    }

    /**
     * Test attribute "user_objectclass"
     */
    public function testPropertyUserObjectclass()
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
     * Test attribute "allow_direct_roles"
     */
    public function testPropertyAllowDirectRoles()
    {
    }

    /**
     * Test attribute "url"
     */
    public function testPropertyUrl()
    {
    }
}
