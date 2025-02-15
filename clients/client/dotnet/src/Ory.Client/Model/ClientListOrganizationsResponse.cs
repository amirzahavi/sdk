/*
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 
 *
 * The version of the OpenAPI document: v1.4.7
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
    /// B2B SSO Organization List
    /// </summary>
    [DataContract(Name = "listOrganizationsResponse")]
    public partial class ClientListOrganizationsResponse : IEquatable<ClientListOrganizationsResponse>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientListOrganizationsResponse" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected ClientListOrganizationsResponse()
        {
            this.AdditionalProperties = new Dictionary<string, object>();
        }
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientListOrganizationsResponse" /> class.
        /// </summary>
        /// <param name="organizations">organizations (required).</param>
        public ClientListOrganizationsResponse(List<ClientOrganization> organizations = default(List<ClientOrganization>))
        {
            // to ensure "organizations" is required (not null)
            if (organizations == null) {
                throw new ArgumentNullException("organizations is a required property for ClientListOrganizationsResponse and cannot be null");
            }
            this.Organizations = organizations;
            this.AdditionalProperties = new Dictionary<string, object>();
        }

        /// <summary>
        /// Gets or Sets Organizations
        /// </summary>
        [DataMember(Name = "organizations", IsRequired = true, EmitDefaultValue = false)]
        public List<ClientOrganization> Organizations { get; set; }

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
            sb.Append("class ClientListOrganizationsResponse {\n");
            sb.Append("  Organizations: ").Append(Organizations).Append("\n");
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
            return this.Equals(input as ClientListOrganizationsResponse);
        }

        /// <summary>
        /// Returns true if ClientListOrganizationsResponse instances are equal
        /// </summary>
        /// <param name="input">Instance of ClientListOrganizationsResponse to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ClientListOrganizationsResponse input)
        {
            if (input == null)
            {
                return false;
            }
            return 
                (
                    this.Organizations == input.Organizations ||
                    this.Organizations != null &&
                    input.Organizations != null &&
                    this.Organizations.SequenceEqual(input.Organizations)
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
                if (this.Organizations != null)
                {
                    hashCode = (hashCode * 59) + this.Organizations.GetHashCode();
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
