/*
Ory APIs

Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers. 

API version: v1.4.7
Contact: support@ory.sh
*/

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package client

import (
	"encoding/json"
)

// checks if the IdentityCredentialsPassword type satisfies the MappedNullable interface at compile time
var _ MappedNullable = &IdentityCredentialsPassword{}

// IdentityCredentialsPassword struct for IdentityCredentialsPassword
type IdentityCredentialsPassword struct {
	// HashedPassword is a hash-representation of the password.
	HashedPassword *string `json:"hashed_password,omitempty"`
	AdditionalProperties map[string]interface{}
}

type _IdentityCredentialsPassword IdentityCredentialsPassword

// NewIdentityCredentialsPassword instantiates a new IdentityCredentialsPassword object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewIdentityCredentialsPassword() *IdentityCredentialsPassword {
	this := IdentityCredentialsPassword{}
	return &this
}

// NewIdentityCredentialsPasswordWithDefaults instantiates a new IdentityCredentialsPassword object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewIdentityCredentialsPasswordWithDefaults() *IdentityCredentialsPassword {
	this := IdentityCredentialsPassword{}
	return &this
}

// GetHashedPassword returns the HashedPassword field value if set, zero value otherwise.
func (o *IdentityCredentialsPassword) GetHashedPassword() string {
	if o == nil || IsNil(o.HashedPassword) {
		var ret string
		return ret
	}
	return *o.HashedPassword
}

// GetHashedPasswordOk returns a tuple with the HashedPassword field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *IdentityCredentialsPassword) GetHashedPasswordOk() (*string, bool) {
	if o == nil || IsNil(o.HashedPassword) {
		return nil, false
	}
	return o.HashedPassword, true
}

// HasHashedPassword returns a boolean if a field has been set.
func (o *IdentityCredentialsPassword) HasHashedPassword() bool {
	if o != nil && !IsNil(o.HashedPassword) {
		return true
	}

	return false
}

// SetHashedPassword gets a reference to the given string and assigns it to the HashedPassword field.
func (o *IdentityCredentialsPassword) SetHashedPassword(v string) {
	o.HashedPassword = &v
}

func (o IdentityCredentialsPassword) MarshalJSON() ([]byte, error) {
	toSerialize,err := o.ToMap()
	if err != nil {
		return []byte{}, err
	}
	return json.Marshal(toSerialize)
}

func (o IdentityCredentialsPassword) ToMap() (map[string]interface{}, error) {
	toSerialize := map[string]interface{}{}
	if !IsNil(o.HashedPassword) {
		toSerialize["hashed_password"] = o.HashedPassword
	}

	for key, value := range o.AdditionalProperties {
		toSerialize[key] = value
	}

	return toSerialize, nil
}

func (o *IdentityCredentialsPassword) UnmarshalJSON(bytes []byte) (err error) {
	varIdentityCredentialsPassword := _IdentityCredentialsPassword{}

	err = json.Unmarshal(bytes, &varIdentityCredentialsPassword)

	if err != nil {
		return err
	}

	*o = IdentityCredentialsPassword(varIdentityCredentialsPassword)

	additionalProperties := make(map[string]interface{})

	if err = json.Unmarshal(bytes, &additionalProperties); err == nil {
		delete(additionalProperties, "hashed_password")
		o.AdditionalProperties = additionalProperties
	}

	return err
}

type NullableIdentityCredentialsPassword struct {
	value *IdentityCredentialsPassword
	isSet bool
}

func (v NullableIdentityCredentialsPassword) Get() *IdentityCredentialsPassword {
	return v.value
}

func (v *NullableIdentityCredentialsPassword) Set(val *IdentityCredentialsPassword) {
	v.value = val
	v.isSet = true
}

func (v NullableIdentityCredentialsPassword) IsSet() bool {
	return v.isSet
}

func (v *NullableIdentityCredentialsPassword) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableIdentityCredentialsPassword(val *IdentityCredentialsPassword) *NullableIdentityCredentialsPassword {
	return &NullableIdentityCredentialsPassword{value: val, isSet: true}
}

func (v NullableIdentityCredentialsPassword) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableIdentityCredentialsPassword) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


