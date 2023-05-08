/*
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 
 *
 * The version of the OpenAPI document: v1.1.27
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 */

/// LoginFlow : This object represents a login flow. A login flow is initiated at the \"Initiate Login API / Browser Flow\" endpoint by a client.  Once a login flow is completed successfully, a session cookie or session token will be issued.



#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
pub struct LoginFlow {
    #[serde(rename = "active", skip_serializing_if = "Option::is_none")]
    pub active: Option<crate::models::IdentityCredentialsType>,
    /// CreatedAt is a helper struct field for gobuffalo.pop.
    #[serde(rename = "created_at", skip_serializing_if = "Option::is_none")]
    pub created_at: Option<String>,
    /// ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to log in, a new flow has to be initiated.
    #[serde(rename = "expires_at")]
    pub expires_at: String,
    /// ID represents the flow's unique ID. When performing the login flow, this represents the id in the login UI's query parameter: http://<selfservice.flows.login.ui_url>/?flow=<flow_id>
    #[serde(rename = "id")]
    pub id: String,
    /// IssuedAt is the time (UTC) when the flow started.
    #[serde(rename = "issued_at")]
    pub issued_at: String,
    #[serde(rename = "oauth2_login_challenge", skip_serializing_if = "Option::is_none")]
    pub oauth2_login_challenge: Option<String>,
    #[serde(rename = "oauth2_login_request", skip_serializing_if = "Option::is_none")]
    pub oauth2_login_request: Option<Box<crate::models::OAuth2LoginRequest>>,
    /// Refresh stores whether this login flow should enforce re-authentication.
    #[serde(rename = "refresh", skip_serializing_if = "Option::is_none")]
    pub refresh: Option<bool>,
    /// RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL's path or query for example.
    #[serde(rename = "request_url")]
    pub request_url: String,
    #[serde(rename = "requested_aal", skip_serializing_if = "Option::is_none")]
    pub requested_aal: Option<crate::models::AuthenticatorAssuranceLevel>,
    /// ReturnTo contains the requested return_to URL.
    #[serde(rename = "return_to", skip_serializing_if = "Option::is_none")]
    pub return_to: Option<String>,
    /// SessionTokenExchangeCode holds the secret code that the client can use to retrieve a session token after the login flow has been completed. This is only set if the client has requested a session token exchange code, and if the flow is of type \"api\", and only on creating the login flow.
    #[serde(rename = "session_token_exchange_code", skip_serializing_if = "Option::is_none")]
    pub session_token_exchange_code: Option<String>,
    /// The flow type can either be `api` or `browser`.
    #[serde(rename = "type")]
    pub _type: String,
    #[serde(rename = "ui")]
    pub ui: Box<crate::models::UiContainer>,
    /// UpdatedAt is a helper struct field for gobuffalo.pop.
    #[serde(rename = "updated_at", skip_serializing_if = "Option::is_none")]
    pub updated_at: Option<String>,
}


impl LoginFlow {
    /// This object represents a login flow. A login flow is initiated at the \"Initiate Login API / Browser Flow\" endpoint by a client.  Once a login flow is completed successfully, a session cookie or session token will be issued.
    pub fn new(expires_at: String, id: String, issued_at: String, request_url: String, _type: String, ui: crate::models::UiContainer) -> LoginFlow {
        LoginFlow {
                active: None,
                created_at: None,
                expires_at,
                id,
                issued_at,
                oauth2_login_challenge: None,
                oauth2_login_request: None,
                refresh: None,
                request_url,
                requested_aal: None,
                return_to: None,
                session_token_exchange_code: None,
                _type,
                ui: Box::new(ui),
                updated_at: None,
        }
    }
}


