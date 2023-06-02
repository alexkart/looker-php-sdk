# UserAttribute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**id** | **string** | Unique Id | [optional] 
**name** | **string** | Name of user attribute | 
**label** | **string** | Human-friendly label for user attribute | 
**type** | **string** | Type of user attribute (\&quot;string\&quot;, \&quot;number\&quot;, \&quot;datetime\&quot;, \&quot;yesno\&quot;, \&quot;zipcode\&quot;) | 
**default_value** | **string** | Default value for when no value is set on the user | [optional] 
**is_system** | **bool** | Attribute is a system default | [optional] 
**is_permanent** | **bool** | Attribute is permanent and cannot be deleted | [optional] 
**value_is_hidden** | **bool** | If true, users will not be able to view values of this attribute | [optional] 
**user_can_view** | **bool** | Non-admin users can see the values of their attributes and use them in filters | [optional] 
**user_can_edit** | **bool** | Users can change the value of this attribute for themselves | [optional] 
**hidden_value_domain_whitelist** | **string** | Destinations to which a hidden attribute may be sent. Once set, cannot be edited. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


