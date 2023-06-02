# CreateDashboardFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Id | [optional] 
**dashboard_id** | **string** | Id of Dashboard | 
**name** | **string** | Name of filter | 
**title** | **string** | Title of filter | 
**type** | **string** | Type of filter: one of date, number, string, or field | 
**default_value** | **string** | Default value of filter | [optional] 
**model** | **string** | Model of filter (required if type &#x3D; field) | [optional] 
**explore** | **string** | Explore of filter (required if type &#x3D; field) | [optional] 
**dimension** | **string** | Dimension of filter (required if type &#x3D; field) | [optional] 
**field** | **object** | Field information | [optional] 
**row** | **int** | Display order of this filter relative to other filters | [optional] 
**listens_to_filters** | **string[]** | Array of listeners for faceted filters | [optional] 
**allow_multiple_values** | **bool** | Whether the filter allows multiple filter values (deprecated in the latest version of dashboards) | [optional] 
**required** | **bool** | Whether the filter requires a value to run the dashboard | [optional] 
**ui_config** | **object** | The visual configuration for this filter. Used to set up how the UI for this filter should appear. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


