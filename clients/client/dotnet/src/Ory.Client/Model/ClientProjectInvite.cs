/*
 * Ory APIs
 *
 * Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 
 *
 * The version of the OpenAPI document: v0.0.1-alpha.80
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
    /// ClientProjectInvite
    /// </summary>
    [DataContract(Name = "projectInvite")]
    public partial class ClientProjectInvite : IEquatable<ClientProjectInvite>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientProjectInvite" /> class.
        /// </summary>
        [JsonConstructorAttribute]
        protected ClientProjectInvite()
        {
            this.AdditionalProperties = new Dictionary<string, object>();
        }
        /// <summary>
        /// Initializes a new instance of the <see cref="ClientProjectInvite" /> class.
        /// </summary>
        /// <param name="id">id (required).</param>
        /// <param name="inviteeEmail">The invitee&#39;s email (required).</param>
        /// <param name="inviteeId">inviteeId.</param>
        /// <param name="ownerEmail">The invite owner&#39;s email Usually the project&#39;s owner email (required).</param>
        /// <param name="ownerId">ownerId (required).</param>
        /// <param name="projectId">projectId (required).</param>
        /// <param name="status">The invite&#39;s status Keeps track of the invites status such as pending, accepted, declined, expired (required).</param>
        public ClientProjectInvite(string id = default(string), string inviteeEmail = default(string), string inviteeId = default(string), string ownerEmail = default(string), string ownerId = default(string), string projectId = default(string), string status = default(string))
        {
            // to ensure "id" is required (not null)
            if (id == null) {
                throw new ArgumentNullException("id is a required property for ClientProjectInvite and cannot be null");
            }
            this.Id = id;
            // to ensure "inviteeEmail" is required (not null)
            if (inviteeEmail == null) {
                throw new ArgumentNullException("inviteeEmail is a required property for ClientProjectInvite and cannot be null");
            }
            this.InviteeEmail = inviteeEmail;
            // to ensure "ownerEmail" is required (not null)
            if (ownerEmail == null) {
                throw new ArgumentNullException("ownerEmail is a required property for ClientProjectInvite and cannot be null");
            }
            this.OwnerEmail = ownerEmail;
            // to ensure "ownerId" is required (not null)
            if (ownerId == null) {
                throw new ArgumentNullException("ownerId is a required property for ClientProjectInvite and cannot be null");
            }
            this.OwnerId = ownerId;
            // to ensure "projectId" is required (not null)
            if (projectId == null) {
                throw new ArgumentNullException("projectId is a required property for ClientProjectInvite and cannot be null");
            }
            this.ProjectId = projectId;
            // to ensure "status" is required (not null)
            if (status == null) {
                throw new ArgumentNullException("status is a required property for ClientProjectInvite and cannot be null");
            }
            this.Status = status;
            this.InviteeId = inviteeId;
            this.AdditionalProperties = new Dictionary<string, object>();
        }

        /// <summary>
        /// The Project&#39;s Revision Creation Date
        /// </summary>
        /// <value>The Project&#39;s Revision Creation Date</value>
        [DataMember(Name = "created_at", IsRequired = true, EmitDefaultValue = false)]
        public DateTime CreatedAt { get; private set; }

        /// <summary>
        /// Returns false as CreatedAt should not be serialized given that it's read-only.
        /// </summary>
        /// <returns>false (boolean)</returns>
        public bool ShouldSerializeCreatedAt()
        {
            return false;
        }
        /// <summary>
        /// Gets or Sets Id
        /// </summary>
        [DataMember(Name = "id", IsRequired = true, EmitDefaultValue = false)]
        public string Id { get; set; }

        /// <summary>
        /// The invitee&#39;s email
        /// </summary>
        /// <value>The invitee&#39;s email</value>
        [DataMember(Name = "invitee_email", IsRequired = true, EmitDefaultValue = false)]
        public string InviteeEmail { get; set; }

        /// <summary>
        /// Gets or Sets InviteeId
        /// </summary>
        [DataMember(Name = "invitee_id", EmitDefaultValue = false)]
        public string InviteeId { get; set; }

        /// <summary>
        /// The invite owner&#39;s email Usually the project&#39;s owner email
        /// </summary>
        /// <value>The invite owner&#39;s email Usually the project&#39;s owner email</value>
        [DataMember(Name = "owner_email", IsRequired = true, EmitDefaultValue = false)]
        public string OwnerEmail { get; set; }

        /// <summary>
        /// Gets or Sets OwnerId
        /// </summary>
        [DataMember(Name = "owner_id", IsRequired = true, EmitDefaultValue = false)]
        public string OwnerId { get; set; }

        /// <summary>
        /// Gets or Sets ProjectId
        /// </summary>
        [DataMember(Name = "project_id", IsRequired = true, EmitDefaultValue = false)]
        public string ProjectId { get; set; }

        /// <summary>
        /// The invite&#39;s status Keeps track of the invites status such as pending, accepted, declined, expired
        /// </summary>
        /// <value>The invite&#39;s status Keeps track of the invites status such as pending, accepted, declined, expired</value>
        [DataMember(Name = "status", IsRequired = true, EmitDefaultValue = false)]
        public string Status { get; set; }

        /// <summary>
        /// Last Time Project&#39;s Revision was Updated
        /// </summary>
        /// <value>Last Time Project&#39;s Revision was Updated</value>
        [DataMember(Name = "updated_at", IsRequired = true, EmitDefaultValue = false)]
        public DateTime UpdatedAt { get; private set; }

        /// <summary>
        /// Returns false as UpdatedAt should not be serialized given that it's read-only.
        /// </summary>
        /// <returns>false (boolean)</returns>
        public bool ShouldSerializeUpdatedAt()
        {
            return false;
        }
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
            sb.Append("class ClientProjectInvite {\n");
            sb.Append("  CreatedAt: ").Append(CreatedAt).Append("\n");
            sb.Append("  Id: ").Append(Id).Append("\n");
            sb.Append("  InviteeEmail: ").Append(InviteeEmail).Append("\n");
            sb.Append("  InviteeId: ").Append(InviteeId).Append("\n");
            sb.Append("  OwnerEmail: ").Append(OwnerEmail).Append("\n");
            sb.Append("  OwnerId: ").Append(OwnerId).Append("\n");
            sb.Append("  ProjectId: ").Append(ProjectId).Append("\n");
            sb.Append("  Status: ").Append(Status).Append("\n");
            sb.Append("  UpdatedAt: ").Append(UpdatedAt).Append("\n");
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
            return this.Equals(input as ClientProjectInvite);
        }

        /// <summary>
        /// Returns true if ClientProjectInvite instances are equal
        /// </summary>
        /// <param name="input">Instance of ClientProjectInvite to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(ClientProjectInvite input)
        {
            if (input == null)
            {
                return false;
            }
            return 
                (
                    this.CreatedAt == input.CreatedAt ||
                    (this.CreatedAt != null &&
                    this.CreatedAt.Equals(input.CreatedAt))
                ) && 
                (
                    this.Id == input.Id ||
                    (this.Id != null &&
                    this.Id.Equals(input.Id))
                ) && 
                (
                    this.InviteeEmail == input.InviteeEmail ||
                    (this.InviteeEmail != null &&
                    this.InviteeEmail.Equals(input.InviteeEmail))
                ) && 
                (
                    this.InviteeId == input.InviteeId ||
                    (this.InviteeId != null &&
                    this.InviteeId.Equals(input.InviteeId))
                ) && 
                (
                    this.OwnerEmail == input.OwnerEmail ||
                    (this.OwnerEmail != null &&
                    this.OwnerEmail.Equals(input.OwnerEmail))
                ) && 
                (
                    this.OwnerId == input.OwnerId ||
                    (this.OwnerId != null &&
                    this.OwnerId.Equals(input.OwnerId))
                ) && 
                (
                    this.ProjectId == input.ProjectId ||
                    (this.ProjectId != null &&
                    this.ProjectId.Equals(input.ProjectId))
                ) && 
                (
                    this.Status == input.Status ||
                    (this.Status != null &&
                    this.Status.Equals(input.Status))
                ) && 
                (
                    this.UpdatedAt == input.UpdatedAt ||
                    (this.UpdatedAt != null &&
                    this.UpdatedAt.Equals(input.UpdatedAt))
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
                if (this.CreatedAt != null)
                {
                    hashCode = (hashCode * 59) + this.CreatedAt.GetHashCode();
                }
                if (this.Id != null)
                {
                    hashCode = (hashCode * 59) + this.Id.GetHashCode();
                }
                if (this.InviteeEmail != null)
                {
                    hashCode = (hashCode * 59) + this.InviteeEmail.GetHashCode();
                }
                if (this.InviteeId != null)
                {
                    hashCode = (hashCode * 59) + this.InviteeId.GetHashCode();
                }
                if (this.OwnerEmail != null)
                {
                    hashCode = (hashCode * 59) + this.OwnerEmail.GetHashCode();
                }
                if (this.OwnerId != null)
                {
                    hashCode = (hashCode * 59) + this.OwnerId.GetHashCode();
                }
                if (this.ProjectId != null)
                {
                    hashCode = (hashCode * 59) + this.ProjectId.GetHashCode();
                }
                if (this.Status != null)
                {
                    hashCode = (hashCode * 59) + this.Status.GetHashCode();
                }
                if (this.UpdatedAt != null)
                {
                    hashCode = (hashCode * 59) + this.UpdatedAt.GetHashCode();
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
