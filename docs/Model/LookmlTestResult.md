# LookmlTestResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**model_name** | **string** | Name of model containing this test. | [optional] 
**test_name** | **string** | Name of this test. | [optional] 
**assertions_count** | **int** | Number of assertions in this test | [optional] 
**assertions_failed** | **int** | Number of assertions passed in this test | [optional] 
**errors** | [**\Swagger\Client\Model\ProjectError[]**](ProjectError.md) | A list of any errors encountered by the test. | [optional] 
**warnings** | [**\Swagger\Client\Model\ProjectError[]**](ProjectError.md) | A list of any warnings encountered by the test. | [optional] 
**success** | **bool** | True if this test passsed without errors. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


