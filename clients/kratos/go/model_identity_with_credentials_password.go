/*
Ory Identities API

This is the API specification for Ory Identities with features such as registration, login, recovery, account verification, profile settings, password reset, identity management, session management, email and sms delivery, and more. 

API version: v0.11.0
Contact: office@ory.sh
*/

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package client

import (
	"encoding/json"
)

// IdentityWithCredentialsPassword Create Identity and Import Password Credentials
type IdentityWithCredentialsPassword struct {
	Config *IdentityWithCredentialsPasswordConfig `json:"config,omitempty"`
}

// NewIdentityWithCredentialsPassword instantiates a new IdentityWithCredentialsPassword object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewIdentityWithCredentialsPassword() *IdentityWithCredentialsPassword {
	this := IdentityWithCredentialsPassword{}
	return &this
}

// NewIdentityWithCredentialsPasswordWithDefaults instantiates a new IdentityWithCredentialsPassword object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewIdentityWithCredentialsPasswordWithDefaults() *IdentityWithCredentialsPassword {
	this := IdentityWithCredentialsPassword{}
	return &this
}

// GetConfig returns the Config field value if set, zero value otherwise.
func (o *IdentityWithCredentialsPassword) GetConfig() IdentityWithCredentialsPasswordConfig {
	if o == nil || o.Config == nil {
		var ret IdentityWithCredentialsPasswordConfig
		return ret
	}
	return *o.Config
}

// GetConfigOk returns a tuple with the Config field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *IdentityWithCredentialsPassword) GetConfigOk() (*IdentityWithCredentialsPasswordConfig, bool) {
	if o == nil || o.Config == nil {
		return nil, false
	}
	return o.Config, true
}

// HasConfig returns a boolean if a field has been set.
func (o *IdentityWithCredentialsPassword) HasConfig() bool {
	if o != nil && o.Config != nil {
		return true
	}

	return false
}

// SetConfig gets a reference to the given IdentityWithCredentialsPasswordConfig and assigns it to the Config field.
func (o *IdentityWithCredentialsPassword) SetConfig(v IdentityWithCredentialsPasswordConfig) {
	o.Config = &v
}

func (o IdentityWithCredentialsPassword) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if o.Config != nil {
		toSerialize["config"] = o.Config
	}
	return json.Marshal(toSerialize)
}

type NullableIdentityWithCredentialsPassword struct {
	value *IdentityWithCredentialsPassword
	isSet bool
}

func (v NullableIdentityWithCredentialsPassword) Get() *IdentityWithCredentialsPassword {
	return v.value
}

func (v *NullableIdentityWithCredentialsPassword) Set(val *IdentityWithCredentialsPassword) {
	v.value = val
	v.isSet = true
}

func (v NullableIdentityWithCredentialsPassword) IsSet() bool {
	return v.isSet
}

func (v *NullableIdentityWithCredentialsPassword) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableIdentityWithCredentialsPassword(val *IdentityWithCredentialsPassword) *NullableIdentityWithCredentialsPassword {
	return &NullableIdentityWithCredentialsPassword{value: val, isSet: true}
}

func (v NullableIdentityWithCredentialsPassword) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableIdentityWithCredentialsPassword) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


