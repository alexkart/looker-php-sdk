# RenderTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**created_at** | **string** | Date/Time render task was created | [optional] 
**dashboard_filters** | **string** | Filter values to apply to the dashboard queries, in URL query format | [optional] 
**dashboard_id** | **string** | Id of dashboard to render | [optional] 
**dashboard_style** | **string** | Dashboard layout style: single_column or tiled | [optional] 
**finalized_at** | **string** | Date/Time render task was completed | [optional] 
**height** | **int** | Output height in pixels. Flowed layouts may ignore this value. | [optional] 
**id** | **string** | Id of this render task | [optional] 
**look_id** | **string** | Id of look to render | [optional] 
**lookml_dashboard_id** | **string** | Id of lookml dashboard to render | [optional] 
**query_id** | **string** | Id of query to render | [optional] 
**dashboard_element_id** | **string** | Id of dashboard element to render: UDD dashboard element would be numeric and LookML dashboard element would be model_name::dashboard_title::lookml_link_id | [optional] 
**query_runtime** | **double** | Number of seconds elapsed running queries | [optional] 
**render_runtime** | **double** | Number of seconds elapsed rendering data | [optional] 
**result_format** | **string** | Output format: pdf, png, or jpg | [optional] 
**runtime** | **double** | Total seconds elapsed for render task | [optional] 
**status** | **string** | Render task status: enqueued_for_query, querying, enqueued_for_render, rendering, success, failure | [optional] 
**status_detail** | **string** | Additional information about the current status | [optional] 
**user_id** | **string** | The user account permissions in which the render task will execute | [optional] 
**width** | **int** | Output width in pixels | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


