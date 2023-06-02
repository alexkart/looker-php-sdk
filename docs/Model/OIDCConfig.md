# OIDCConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**alternate_email_login_allowed** | **bool** | Allow alternate email-based login via &#39;/login/email&#39; for admins and for specified users with the &#39;login_special_email&#39; permission. This option is useful as a fallback during ldap setup, if ldap config problems occur later, or if you need to support some users who are not in your ldap directory. Looker email/password logins are always disabled for regular users when ldap is enabled. | [optional] 
**audience** | **string** | OpenID Provider Audience | [optional] 
**auth_requires_role** | **bool** | Users will not be allowed to login at all unless a role for them is found in OIDC if set to true | [optional] 
**authorization_endpoint** | **string** | OpenID Provider Authorization Url | [optional] 
**default_new_user_group_ids** | **string[]** | (Write-Only) Array of ids of groups that will be applied to new users the first time they login via OIDC | [optional] 
**default_new_user_groups** | [**\Swagger\Client\Model\Group[]**](Group.md) | (Read-only) Groups that will be applied to new users the first time they login via OIDC | [optional] 
**default_new_user_role_ids** | **string[]** | (Write-Only) Array of ids of roles that will be applied to new users the first time they login via OIDC | [optional] 
**default_new_user_roles** | [**\Swagger\Client\Model\Role[]**](Role.md) | (Read-only) Roles that will be applied to new users the first time they login via OIDC | [optional] 
**enabled** | **bool** | Enable/Disable OIDC authentication for the server | [optional] 
**groups** | [**\Swagger\Client\Model\OIDCGroupRead[]**](OIDCGroupRead.md) | (Read-only) Array of mappings between OIDC Groups and Looker Roles | [optional] 
**groups_attribute** | **string** | Name of user record attributes used to indicate groups. Used when &#39;groups_finder_type&#39; is set to &#39;grouped_attribute_values&#39; | [optional] 
**groups_with_role_ids** | [**\Swagger\Client\Model\OIDCGroupWrite[]**](OIDCGroupWrite.md) | (Read/Write) Array of mappings between OIDC Groups and arrays of Looker Role ids | [optional] 
**identifier** | **string** | Relying Party Identifier (provided by OpenID Provider) | [optional] 
**issuer** | **string** | OpenID Provider Issuer | [optional] 
**modified_at** | [**\DateTime**](\DateTime.md) | When this config was last modified | [optional] 
**modified_by** | **string** | User id of user who last modified this config | [optional] 
**new_user_migration_types** | **string** | Merge first-time oidc login to existing user account by email addresses. When a user logs in for the first time via oidc this option will connect this user into their existing account by finding the account with a matching email address by testing the given types of credentials for existing users. Otherwise a new user account will be created for the user. This list (if provided) must be a comma separated list of string like &#39;email,ldap,google&#39; | [optional] 
**scopes** | **string[]** | Array of scopes to request. | [optional] 
**secret** | **string** | (Write-Only) Relying Party Secret (provided by OpenID Provider) | [optional] 
**set_roles_from_groups** | **bool** | Set user roles in Looker based on groups from OIDC | [optional] 
**test_slug** | **string** | Slug to identify configurations that are created in order to run a OIDC config test | [optional] 
**token_endpoint** | **string** | OpenID Provider Token Url | [optional] 
**user_attribute_map_email** | **string** | Name of user record attributes used to indicate email address field | [optional] 
**user_attribute_map_first_name** | **string** | Name of user record attributes used to indicate first name | [optional] 
**user_attribute_map_last_name** | **string** | Name of user record attributes used to indicate last name | [optional] 
**user_attributes** | [**\Swagger\Client\Model\OIDCUserAttributeRead[]**](OIDCUserAttributeRead.md) | (Read-only) Array of mappings between OIDC User Attributes and Looker User Attributes | [optional] 
**user_attributes_with_ids** | [**\Swagger\Client\Model\OIDCUserAttributeWrite[]**](OIDCUserAttributeWrite.md) | (Read/Write) Array of mappings between OIDC User Attributes and arrays of Looker User Attribute ids | [optional] 
**userinfo_endpoint** | **string** | OpenID Provider User Information Url | [optional] 
**allow_normal_group_membership** | **bool** | Allow OIDC auth&#39;d users to be members of non-reflected Looker groups. If &#39;false&#39;, user will be removed from non-reflected groups on login. | [optional] 
**allow_roles_from_normal_groups** | **bool** | OIDC auth&#39;d users will inherit roles from non-reflected Looker groups. | [optional] 
**allow_direct_roles** | **bool** | Allows roles to be directly assigned to OIDC auth&#39;d users. | [optional] 
**url** | **string** | Link to get this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


