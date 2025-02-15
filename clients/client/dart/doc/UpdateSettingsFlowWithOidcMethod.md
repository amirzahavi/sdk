# ory_client.model.UpdateSettingsFlowWithOidcMethod

## Load the model package
```dart
import 'package:ory_client/api.dart';
```

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flow** | **String** | Flow ID is the flow's ID.  in: query | [optional] 
**link** | **String** | Link this provider  Either this or `unlink` must be set.  type: string in: body | [optional] 
**method** | **String** | Method  Should be set to profile when trying to update a profile. | 
**traits** | [**JsonObject**](.md) | The identity's traits  in: body | [optional] 
**unlink** | **String** | Unlink this provider  Either this or `link` must be set.  type: string in: body | [optional] 
**upstreamParameters** | [**JsonObject**](.md) | UpstreamParameters are the parameters that are passed to the upstream identity provider.  These parameters are optional and depend on what the upstream identity provider supports. Supported parameters are: `login_hint` (string): The `login_hint` parameter suppresses the account chooser and either pre-fills the email box on the sign-in form, or selects the proper session. `hd` (string): The `hd` parameter limits the login/registration process to a Google Organization, e.g. `mycollege.edu`. `prompt` (string): The `prompt` specifies whether the Authorization Server prompts the End-User for reauthentication and consent, e.g. `select_account`. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


