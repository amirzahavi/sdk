# # RegistrationFlow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | [**\Ory\Client\Model\IdentityCredentialsType**](IdentityCredentialsType.md) |  | [optional]
**expiresAt** | **\DateTime** | ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to log in, a new flow has to be initiated. |
**id** | **string** | ID represents the flow&#39;s unique ID. When performing the registration flow, this represents the id in the registration ui&#39;s query parameter: http://&lt;selfservice.flows.registration.ui_url&gt;/?flow&#x3D;&lt;id&gt; |
**issuedAt** | **\DateTime** | IssuedAt is the time (UTC) when the flow occurred. |
**oauth2LoginChallenge** | **string** | Ory OAuth 2.0 Login Challenge.  This value is set using the &#x60;login_challenge&#x60; query parameter of the registration and login endpoints. If set will cooperate with Ory OAuth2 and OpenID to act as an OAuth2 server / OpenID Provider. | [optional]
**oauth2LoginRequest** | [**\Ory\Client\Model\OAuth2LoginRequest**](OAuth2LoginRequest.md) |  | [optional]
**organizationId** | **string** |  | [optional]
**requestUrl** | **string** | RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL&#39;s path or query for example. |
**returnTo** | **string** | ReturnTo contains the requested return_to URL. | [optional]
**sessionTokenExchangeCode** | **string** | SessionTokenExchangeCode holds the secret code that the client can use to retrieve a session token after the flow has been completed. This is only set if the client has requested a session token exchange code, and if the flow is of type \&quot;api\&quot;, and only on creating the flow. | [optional]
**state** | **mixed** | State represents the state of this request:  choose_method: ask the user to choose a method (e.g. registration with email) sent_email: the email has been sent to the user passed_challenge: the request was successful and the registration challenge was passed. |
**transientPayload** | **object** | TransientPayload is used to pass data from the registration to a webhook | [optional]
**type** | **string** | The flow type can either be &#x60;api&#x60; or &#x60;browser&#x60;. |
**ui** | [**\Ory\Client\Model\UiContainer**](UiContainer.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
