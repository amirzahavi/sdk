/*
 * Ory Identities API
 *
 * This is the API specification for Ory Identities with features such as registration, login, recovery, account verification, profile settings, password reset, identity management, session management, email and sms delivery, and more. 
 *
 * The version of the OpenAPI document: v0.11.0
 * Contact: office@ory.sh
 * Generated by: https://openapi-generator.tech
 */

/// IdentityWithCredentialsPassword : Create Identity and Import Password Credentials



#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
pub struct IdentityWithCredentialsPassword {
    #[serde(rename = "config", skip_serializing_if = "Option::is_none")]
    pub config: Option<Box<crate::models::IdentityWithCredentialsPasswordConfig>>,
}

impl Default for IdentityWithCredentialsPassword {
    fn default() -> Self {
        Self::new()
    }
}

impl IdentityWithCredentialsPassword {
    /// Create Identity and Import Password Credentials
    pub fn new() -> IdentityWithCredentialsPassword {
        IdentityWithCredentialsPassword {
                config: None,
        }
    }
}


