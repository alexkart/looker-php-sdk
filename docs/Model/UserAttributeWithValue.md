# UserAttributeWithValue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**name** | **string** | Name of user attribute | [optional] 
**label** | **string** | Human-friendly label for user attribute | [optional] 
**rank** | **int** | Precedence for setting value on user (lowest wins) | [optional] 
**value** | **string** | Value of attribute for user | [optional] 
**user_id** | **string** | Id of User | [optional] 
**user_can_edit** | **bool** | Can the user set this value | [optional] 
**value_is_hidden** | **bool** | If true, the \&quot;value\&quot; field will be null, because the attribute settings block access to this value | [optional] 
**user_attribute_id** | **string** | Id of User Attribute | [optional] 
**source** | **string** | How user got this value for this attribute | [optional] 
**hidden_value_domain_whitelist** | **string** | If this user attribute is hidden, whitelist of destinations to which it may be sent. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


