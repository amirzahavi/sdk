/*
 * Ory Hydra API
 *
 * Documentation for all of Ory Hydra's APIs. 
 *
 * The version of the OpenAPI document: v2.2.0-rc.3
 * Contact: hi@ory.sh
 * Generated by: https://openapi-generator.tech
 */




#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
pub struct CreateVerifiableCredentialRequestBody {
    #[serde(rename = "format", skip_serializing_if = "Option::is_none")]
    pub format: Option<String>,
    #[serde(rename = "proof", skip_serializing_if = "Option::is_none")]
    pub proof: Option<Box<crate::models::VerifiableCredentialProof>>,
    #[serde(rename = "types", skip_serializing_if = "Option::is_none")]
    pub types: Option<Vec<String>>,
}

impl Default for CreateVerifiableCredentialRequestBody {
    fn default() -> Self {
        Self::new()
    }
}

impl CreateVerifiableCredentialRequestBody {
    pub fn new() -> CreateVerifiableCredentialRequestBody {
        CreateVerifiableCredentialRequestBody {
                format: None,
                proof: None,
                types: None,
        }
    }
}


