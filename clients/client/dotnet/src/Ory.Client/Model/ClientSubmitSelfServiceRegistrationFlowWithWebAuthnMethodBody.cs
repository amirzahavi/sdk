/*
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 
 *
 * The version of the OpenAPI document: v0.0.1-alpha.179
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
    /// ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody
    /// </summary>
    [DataContract(Name = "submitSelfServiceRegistrationFlowWithWebAuthnMethodBody")]
    public partial class ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody : IEquatable<ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody()
        {
            this.AdditionalProperties = new Dictionary<string, object>();
        }
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody" /> class.
        /// </summary>
        /// <param name="csrfToken">CSRFToken is the anti-CSRF token.</param>
        /// <param name="method">Method  Should be set to \&quot;webauthn\&quot; when trying to add, update, or remove a webAuthn pairing. (required).</param>
        /// <param name="traits">The identity&#39;s traits (required).</param>
        /// <param name="webauthnRegister">Register a WebAuthn Security Key  It is expected that the JSON returned by the WebAuthn registration process is included here..</param>
        /// <param name="webauthnRegisterDisplayname">Name of the WebAuthn Security Key to be Added  A human-readable name for the security key which will be added..</param>
        public ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody(string csrfToken = default(string), string method = default(string), Object traits = default(Object), string webauthnRegister = default(string), string webauthnRegisterDisplayname = default(string))
        {
            // to ensure "method" is required (not null)
            if (method == null) {
                throw new ArgumentNullException("method is a required property for ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody and cannot be null");
            }
            this.Method = method;
            // to ensure "traits" is required (not null)
            if (traits == null) {
                throw new ArgumentNullException("traits is a required property for ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody and cannot be null");
            }
            this.Traits = traits;
            this.CsrfToken = csrfToken;
            this.WebauthnRegister = webauthnRegister;
            this.WebauthnRegisterDisplayname = webauthnRegisterDisplayname;
            this.AdditionalProperties = new Dictionary<string, object>();
        }

        /// <summary>
        /// CSRFToken is the anti-CSRF token
        /// </summary>
        /// <value>CSRFToken is the anti-CSRF token</value>
        [DataMember(Name = "csrf_token", EmitDefaultValue = false)]
        public string CsrfToken { get; set; }

        /// <summary>
        /// Method  Should be set to \&quot;webauthn\&quot; when trying to add, update, or remove a webAuthn pairing.
        /// </summary>
        /// <value>Method  Should be set to \&quot;webauthn\&quot; when trying to add, update, or remove a webAuthn pairing.</value>
        [DataMember(Name = "method", IsRequired = true, EmitDefaultValue = false)]
        public string Method { get; set; }

        /// <summary>
        /// The identity&#39;s traits
        /// </summary>
        /// <value>The identity&#39;s traits</value>
        [DataMember(Name = "traits", IsRequired = true, EmitDefaultValue = false)]
        public Object Traits { get; set; }

        /// <summary>
        /// Register a WebAuthn Security Key  It is expected that the JSON returned by the WebAuthn registration process is included here.
        /// </summary>
        /// <value>Register a WebAuthn Security Key  It is expected that the JSON returned by the WebAuthn registration process is included here.</value>
        [DataMember(Name = "webauthn_register", EmitDefaultValue = false)]
        public string WebauthnRegister { get; set; }

        /// <summary>
        /// Name of the WebAuthn Security Key to be Added  A human-readable name for the security key which will be added.
        /// </summary>
        /// <value>Name of the WebAuthn Security Key to be Added  A human-readable name for the security key which will be added.</value>
        [DataMember(Name = "webauthn_register_displayname", EmitDefaultValue = false)]
        public string WebauthnRegisterDisplayname { get; set; }

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
            sb.Append("class ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody {\n");
            sb.Append("  CsrfToken: ").Append(CsrfToken).Append("\n");
            sb.Append("  Method: ").Append(Method).Append("\n");
            sb.Append("  Traits: ").Append(Traits).Append("\n");
            sb.Append("  WebauthnRegister: ").Append(WebauthnRegister).Append("\n");
            sb.Append("  WebauthnRegisterDisplayname: ").Append(WebauthnRegisterDisplayname).Append("\n");
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
            return this.Equals(input as ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody);
        }

        /// <summary>
        /// Returns true if ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody instances are equal
        /// </summary>
        /// <param name="input">Instance of ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ClientSubmitSelfServiceRegistrationFlowWithWebAuthnMethodBody input)
        {
            if (input == null)
            {
                return false;
            }
            return 
                (
                    this.CsrfToken == input.CsrfToken ||
                    (this.CsrfToken != null &&
                    this.CsrfToken.Equals(input.CsrfToken))
                ) && 
                (
                    this.Method == input.Method ||
                    (this.Method != null &&
                    this.Method.Equals(input.Method))
                ) && 
                (
                    this.Traits == input.Traits ||
                    (this.Traits != null &&
                    this.Traits.Equals(input.Traits))
                ) && 
                (
                    this.WebauthnRegister == input.WebauthnRegister ||
                    (this.WebauthnRegister != null &&
                    this.WebauthnRegister.Equals(input.WebauthnRegister))
                ) && 
                (
                    this.WebauthnRegisterDisplayname == input.WebauthnRegisterDisplayname ||
                    (this.WebauthnRegisterDisplayname != null &&
                    this.WebauthnRegisterDisplayname.Equals(input.WebauthnRegisterDisplayname))
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
                if (this.CsrfToken != null)
                {
                    hashCode = (hashCode * 59) + this.CsrfToken.GetHashCode();
                }
                if (this.Method != null)
                {
                    hashCode = (hashCode * 59) + this.Method.GetHashCode();
                }
                if (this.Traits != null)
                {
                    hashCode = (hashCode * 59) + this.Traits.GetHashCode();
                }
                if (this.WebauthnRegister != null)
                {
                    hashCode = (hashCode * 59) + this.WebauthnRegister.GetHashCode();
                }
                if (this.WebauthnRegisterDisplayname != null)
                {
                    hashCode = (hashCode * 59) + this.WebauthnRegisterDisplayname.GetHashCode();
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
            yield break;
        }
    }

}
