/*
 * ORY Oathkeeper
 *
 * ORY Oathkeeper is a reverse proxy that checks the HTTP Authorization for validity against a set of rules. This service uses Hydra to validate access tokens and policies.
 *
 * The version of the OpenAPI document: v0.0.0-alpha.42
 * Contact: hi@ory.am
 * Generated by: https://openapi-generator.tech
 */

/// SwaggerListRulesParameters : SwaggerListRulesParameters swagger list rules parameters



#[derive(Clone, Debug, PartialEq, Serialize, Deserialize)]
pub struct SwaggerListRulesParameters {
    /// The maximum amount of rules returned. in: query
    #[serde(rename = "limit", skip_serializing_if = "Option::is_none")]
    pub limit: Option<i64>,
    /// The offset from where to start looking. in: query
    #[serde(rename = "offset", skip_serializing_if = "Option::is_none")]
    pub offset: Option<i64>,
}

impl SwaggerListRulesParameters {
    /// SwaggerListRulesParameters swagger list rules parameters
    pub fn new() -> SwaggerListRulesParameters {
        SwaggerListRulesParameters {
            limit: None,
            offset: None,
        }
    }
}


