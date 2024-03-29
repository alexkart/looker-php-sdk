# DBConnection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can** | **map[string,bool]** | Operations the current user is able to perform on this object | [optional] 
**name** | **string** | Name of the connection. Also used as the unique identifier | [optional] 
**dialect** | [**\Swagger\Client\Model\Dialect**](Dialect.md) | (Read-only) SQL Dialect details | [optional] 
**snippets** | [**\Swagger\Client\Model\Snippet[]**](Snippet.md) | SQL Runner snippets for this connection | [optional] 
**pdts_enabled** | **bool** | True if PDTs are enabled on this connection | [optional] 
**host** | **string** | Host name/address of server | [optional] 
**port** | **string** | Port number on server | [optional] 
**username** | **string** | Username for server authentication | [optional] 
**password** | **string** | (Write-Only) Password for server authentication | [optional] 
**uses_oauth** | **bool** | Whether the connection uses OAuth for authentication. | [optional] 
**certificate** | **string** | (Write-Only) Base64 encoded Certificate body for server authentication (when appropriate for dialect). | [optional] 
**file_type** | **string** | (Write-Only) Certificate keyfile type - .json or .p12 | [optional] 
**database** | **string** | Database name | [optional] 
**db_timezone** | **string** | Time zone of database | [optional] 
**query_timezone** | **string** | Timezone to use in queries | [optional] 
**schema** | **string** | Scheme name | [optional] 
**max_connections** | **int** | Maximum number of concurrent connection to use | [optional] 
**max_billing_gigabytes** | **string** | Maximum size of query in GBs (BigQuery only, can be a user_attribute name) | [optional] 
**ssl** | **bool** | Use SSL/TLS when connecting to server | [optional] 
**verify_ssl** | **bool** | Verify the SSL | [optional] 
**tmp_db_name** | **string** | Name of temporary database (if used) | [optional] 
**jdbc_additional_params** | **string** | Additional params to add to JDBC connection string | [optional] 
**pool_timeout** | **int** | Connection Pool Timeout, in seconds | [optional] 
**dialect_name** | **string** | (Read/Write) SQL Dialect name | [optional] 
**supports_data_studio_link** | **bool** | Database connection has the ability to support open data studio from explore | [optional] 
**created_at** | **string** | Creation date for this connection | [optional] 
**user_id** | **string** | Id of user who last modified this connection configuration | [optional] 
**example** | **bool** | Is this an example connection? | [optional] 
**user_db_credentials** | **bool** | (Limited access feature) Are per user db credentials enabled. Enabling will remove previously set username and password | [optional] 
**user_attribute_fields** | **string[]** | Fields whose values map to user attribute names | [optional] 
**maintenance_cron** | **string** | Cron string specifying when maintenance such as PDT trigger checks and drops should be performed | [optional] 
**last_regen_at** | **string** | Unix timestamp at start of last completed PDT trigger check process | [optional] 
**last_reap_at** | **string** | Unix timestamp at start of last completed PDT reap process | [optional] 
**sql_runner_precache_tables** | **bool** | Precache tables in the SQL Runner | [optional] 
**sql_writing_with_info_schema** | **bool** | Fetch Information Schema For SQL Writing | [optional] 
**after_connect_statements** | **string** | SQL statements (semicolon separated) to issue after connecting to the database. Requires &#x60;custom_after_connect_statements&#x60; license feature | [optional] 
**pdt_context_override** | [**\Swagger\Client\Model\DBConnectionOverride**](DBConnectionOverride.md) | db_connection_override for this connection in the &#x60;pdt&#x60; maintenance context | [optional] 
**managed** | **bool** | Is this connection created and managed by Looker | [optional] 
**tunnel_id** | **string** | The Id of the ssh tunnel this connection uses | [optional] 
**pdt_concurrency** | **int** | Maximum number of threads to use to build PDTs in parallel | [optional] 
**disable_context_comment** | **bool** | When disable_context_comment is true comment will not be added to SQL | [optional] 
**oauth_application_id** | **string** | An External OAuth Application to use for authenticating to the database | [optional] 
**always_retry_failed_builds** | **bool** | When true, error PDTs will be retried every regenerator cycle | [optional] 
**cost_estimate_enabled** | **bool** | When true, query cost estimate will be displayed in explore. | [optional] 
**pdt_api_control_enabled** | **bool** | PDT builds on this connection can be kicked off and cancelled via API. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


