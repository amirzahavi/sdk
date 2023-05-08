/*
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 
 *
 * The version of the OpenAPI document: v1.1.27
 * Contact: support@ory.sh
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */


using System;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.IO;
using System.Runtime.Serialization;
using System.Text;
using System.Text.RegularExpressions;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using Newtonsoft.Json.Linq;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = Ory.Client.Client.OpenAPIDateConverter;

namespace Ory.Client.Model
{
    /// <summary>
    /// Create Recovery Code for Identity Request Body
    /// </summary>
    [DataContract(Name = "createRecoveryCodeForIdentityBody")]
    public partial class ClientCreateRecoveryCodeForIdentityBody : IEquatable<ClientCreateRecoveryCodeForIdentityBody>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientCreateRecoveryCodeForIdentityBody" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected ClientCreateRecoveryCodeForIdentityBody()
        {
            this.AdditionalProperties = new Dictionary<string, object>();
        }
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientCreateRecoveryCodeForIdentityBody" /> class.
        /// </summary>
        /// <param name="expiresIn">Code Expires In  The recovery code will expire after that amount of time has passed. Defaults to the configuration value of &#x60;selfservice.methods.code.config.lifespan&#x60;..</param>
        /// <param name="identityId">Identity to Recover  The identity&#39;s ID you wish to recover. (required).</param>
        public ClientCreateRecoveryCodeForIdentityBody(string expiresIn = default(string), string identityId = default(string))
        {
            // to ensure "identityId" is required (not null)
            if (identityId == null) {
                throw new ArgumentNullException("identityId is a required property for ClientCreateRecoveryCodeForIdentityBody and cannot be null");
            }
            this.IdentityId = identityId;
            this.ExpiresIn = expiresIn;
            this.AdditionalProperties = new Dictionary<string, object>();
        }

        /// <summary>
        /// Code Expires In  The recovery code will expire after that amount of time has passed. Defaults to the configuration value of &#x60;selfservice.methods.code.config.lifespan&#x60;.
        /// </summary>
        /// <value>Code Expires In  The recovery code will expire after that amount of time has passed. Defaults to the configuration value of &#x60;selfservice.methods.code.config.lifespan&#x60;.</value>
        [DataMember(Name = "expires_in", EmitDefaultValue = false)]
        public string ExpiresIn { get; set; }

        /// <summary>
        /// Identity to Recover  The identity&#39;s ID you wish to recover.
        /// </summary>
        /// <value>Identity to Recover  The identity&#39;s ID you wish to recover.</value>
        [DataMember(Name = "identity_id", IsRequired = true, EmitDefaultValue = false)]
        public string IdentityId { get; set; }

        /// <summary>
        /// Gets or Sets additional properties
        /// </summary>
        [JsonExtensionData]
        public IDictionary<string, object> AdditionalProperties { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            StringBuilder sb = new StringBuilder();
            sb.Append("class ClientCreateRecoveryCodeForIdentityBody {\n");
            sb.Append("  ExpiresIn: ").Append(ExpiresIn).Append("\n");
            sb.Append("  IdentityId: ").Append(IdentityId).Append("\n");
            sb.Append("  AdditionalProperties: ").Append(AdditionalProperties).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }

        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return Newtonsoft.Json.JsonConvert.SerializeObject(this, Newtonsoft.Json.Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as ClientCreateRecoveryCodeForIdentityBody);
        }

        /// <summary>
        /// Returns true if ClientCreateRecoveryCodeForIdentityBody instances are equal
        /// </summary>
        /// <param name="input">Instance of ClientCreateRecoveryCodeForIdentityBody to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ClientCreateRecoveryCodeForIdentityBody input)
        {
            if (input == null)
            {
                return false;
            }
            return 
                (
                    this.ExpiresIn == input.ExpiresIn ||
                    (this.ExpiresIn != null &&
                    this.ExpiresIn.Equals(input.ExpiresIn))
                ) && 
                (
                    this.IdentityId == input.IdentityId ||
                    (this.IdentityId != null &&
                    this.IdentityId.Equals(input.IdentityId))
                )
                && (this.AdditionalProperties.Count == input.AdditionalProperties.Count && !this.AdditionalProperties.Except(input.AdditionalProperties).Any());
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.ExpiresIn != null)
                {
                    hashCode = (hashCode * 59) + this.ExpiresIn.GetHashCode();
                }
                if (this.IdentityId != null)
                {
                    hashCode = (hashCode * 59) + this.IdentityId.GetHashCode();
                }
                if (this.AdditionalProperties != null)
                {
                    hashCode = (hashCode * 59) + this.AdditionalProperties.GetHashCode();
                }
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        public IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> Validate(ValidationContext validationContext)
        {
            // ExpiresIn (string) pattern
            Regex regexExpiresIn = new Regex(@"^([0-9]+(ns|us|ms|s|m|h))*$", RegexOptions.CultureInvariant);
            if (false == regexExpiresIn.Match(this.ExpiresIn).Success)
            {
                yield return new System.ComponentModel.DataAnnotations.ValidationResult("Invalid value for ExpiresIn, must match a pattern of " + regexExpiresIn, new [] { "ExpiresIn" });
            }

            yield break;
        }
    }

}
