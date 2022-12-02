/*
 * Ory Identities API
 *
 * This is the API specification for Ory Identities with features such as registration, login, recovery, account verification, profile settings, password reset, identity management, session management, email and sms delivery, and more. 
 *
 * The version of the OpenAPI document: v0.11.0
 * Contact: office@ory.sh
 * Generated by: https://openapi-generator.tech
 */

/// UpdateLoginFlowWithOidcMethod : Update Login Flow with OpenID Connect Method



#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
pub struct UpdateLoginFlowWithOidcMethod {
    /// The CSRF Token
    #[serde(rename = "csrf_token", skip_serializing_if = "Option::is_none")]
    pub csrf_token: Option<String>,
    /// Method to use  This field must be set to `oidc` when using the oidc method.
    #[serde(rename = "method")]
    pub method: String,
    /// The provider to register with
    #[serde(rename = "provider")]
    pub provider: String,
    /// The identity traits. This is a placeholder for the registration flow.
    #[serde(rename = "traits", skip_serializing_if = "Option::is_none")]
    pub traits: Option<serde_json::Value>,
}


impl UpdateLoginFlowWithOidcMethod {
    /// Update Login Flow with OpenID Connect Method
    pub fn new(method: String, provider: String) -> UpdateLoginFlowWithOidcMethod {
        UpdateLoginFlowWithOidcMethod {
                csrf_token: None,
                method,
                provider,
                traits: None,
        }
    }
}


