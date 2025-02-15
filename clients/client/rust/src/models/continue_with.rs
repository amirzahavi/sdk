/*
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 
 *
 * The version of the OpenAPI document: v1.4.7
 * Contact: support@ory.sh
 * Generated by: https://openapi-generator.tech
 */



#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
#[serde(tag = "action")]
pub enum ContinueWith {
    #[serde(rename="set_ory_session_token")]
    ContinueWithSetOrySessionToken {
        /// Token is the token of the session
        #[serde(rename = "ory_session_token")]
        // true, false, , String, false
        ory_session_token: String,
    },
    #[serde(rename="show_recovery_ui")]
    ContinueWithRecoveryUi {
        #[serde(rename = "flow")]
        // true, false, , crate::models::ContinueWithRecoveryUiFlow, true
        flow: Box<crate::models::ContinueWithRecoveryUiFlow>,
    },
    #[serde(rename="show_settings_ui")]
    ContinueWithSettingsUi {
        #[serde(rename = "flow")]
        // true, false, , crate::models::ContinueWithSettingsUiFlow, true
        flow: Box<crate::models::ContinueWithSettingsUiFlow>,
    },
    #[serde(rename="show_verification_ui")]
    ContinueWithVerificationUi {
        #[serde(rename = "flow")]
        // true, false, , crate::models::ContinueWithVerificationUiFlow, true
        flow: Box<crate::models::ContinueWithVerificationUiFlow>,
    },
}





