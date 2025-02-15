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
	"fmt"
)

// checks if the CreateSubscriptionBody type satisfies the MappedNullable interface at compile time
var _ MappedNullable = &CreateSubscriptionBody{}

// CreateSubscriptionBody Create Subscription Request Body
type CreateSubscriptionBody struct {
	//  usd USD eur Euro
	Currency *string `json:"currency,omitempty"`
	//  monthly Monthly yearly Yearly
	Interval string `json:"interval"`
	Plan string `json:"plan"`
	ProvisionFirstProject NullableString `json:"provision_first_project,omitempty"`
	ReturnTo *string `json:"return_to,omitempty"`
	Workspace NullableString `json:"workspace,omitempty"`
	AdditionalProperties map[string]interface{}
}

type _CreateSubscriptionBody CreateSubscriptionBody

// NewCreateSubscriptionBody instantiates a new CreateSubscriptionBody object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewCreateSubscriptionBody(interval string, plan string) *CreateSubscriptionBody {
	this := CreateSubscriptionBody{}
	this.Interval = interval
	this.Plan = plan
	return &this
}

// NewCreateSubscriptionBodyWithDefaults instantiates a new CreateSubscriptionBody object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewCreateSubscriptionBodyWithDefaults() *CreateSubscriptionBody {
	this := CreateSubscriptionBody{}
	return &this
}

// GetCurrency returns the Currency field value if set, zero value otherwise.
func (o *CreateSubscriptionBody) GetCurrency() string {
	if o == nil || IsNil(o.Currency) {
		var ret string
		return ret
	}
	return *o.Currency
}

// GetCurrencyOk returns a tuple with the Currency field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *CreateSubscriptionBody) GetCurrencyOk() (*string, bool) {
	if o == nil || IsNil(o.Currency) {
		return nil, false
	}
	return o.Currency, true
}

// HasCurrency returns a boolean if a field has been set.
func (o *CreateSubscriptionBody) HasCurrency() bool {
	if o != nil && !IsNil(o.Currency) {
		return true
	}

	return false
}

// SetCurrency gets a reference to the given string and assigns it to the Currency field.
func (o *CreateSubscriptionBody) SetCurrency(v string) {
	o.Currency = &v
}

// GetInterval returns the Interval field value
func (o *CreateSubscriptionBody) GetInterval() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.Interval
}

// GetIntervalOk returns a tuple with the Interval field value
// and a boolean to check if the value has been set.
func (o *CreateSubscriptionBody) GetIntervalOk() (*string, bool) {
	if o == nil {
		return nil, false
	}
	return &o.Interval, true
}

// SetInterval sets field value
func (o *CreateSubscriptionBody) SetInterval(v string) {
	o.Interval = v
}

// GetPlan returns the Plan field value
func (o *CreateSubscriptionBody) GetPlan() string {
	if o == nil {
		var ret string
		return ret
	}

	return o.Plan
}

// GetPlanOk returns a tuple with the Plan field value
// and a boolean to check if the value has been set.
func (o *CreateSubscriptionBody) GetPlanOk() (*string, bool) {
	if o == nil {
		return nil, false
	}
	return &o.Plan, true
}

// SetPlan sets field value
func (o *CreateSubscriptionBody) SetPlan(v string) {
	o.Plan = v
}

// GetProvisionFirstProject returns the ProvisionFirstProject field value if set, zero value otherwise (both if not set or set to explicit null).
func (o *CreateSubscriptionBody) GetProvisionFirstProject() string {
	if o == nil || IsNil(o.ProvisionFirstProject.Get()) {
		var ret string
		return ret
	}
	return *o.ProvisionFirstProject.Get()
}

// GetProvisionFirstProjectOk returns a tuple with the ProvisionFirstProject field value if set, nil otherwise
// and a boolean to check if the value has been set.
// NOTE: If the value is an explicit nil, `nil, true` will be returned
func (o *CreateSubscriptionBody) GetProvisionFirstProjectOk() (*string, bool) {
	if o == nil {
		return nil, false
	}
	return o.ProvisionFirstProject.Get(), o.ProvisionFirstProject.IsSet()
}

// HasProvisionFirstProject returns a boolean if a field has been set.
func (o *CreateSubscriptionBody) HasProvisionFirstProject() bool {
	if o != nil && o.ProvisionFirstProject.IsSet() {
		return true
	}

	return false
}

// SetProvisionFirstProject gets a reference to the given NullableString and assigns it to the ProvisionFirstProject field.
func (o *CreateSubscriptionBody) SetProvisionFirstProject(v string) {
	o.ProvisionFirstProject.Set(&v)
}
// SetProvisionFirstProjectNil sets the value for ProvisionFirstProject to be an explicit nil
func (o *CreateSubscriptionBody) SetProvisionFirstProjectNil() {
	o.ProvisionFirstProject.Set(nil)
}

// UnsetProvisionFirstProject ensures that no value is present for ProvisionFirstProject, not even an explicit nil
func (o *CreateSubscriptionBody) UnsetProvisionFirstProject() {
	o.ProvisionFirstProject.Unset()
}

// GetReturnTo returns the ReturnTo field value if set, zero value otherwise.
func (o *CreateSubscriptionBody) GetReturnTo() string {
	if o == nil || IsNil(o.ReturnTo) {
		var ret string
		return ret
	}
	return *o.ReturnTo
}

// GetReturnToOk returns a tuple with the ReturnTo field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *CreateSubscriptionBody) GetReturnToOk() (*string, bool) {
	if o == nil || IsNil(o.ReturnTo) {
		return nil, false
	}
	return o.ReturnTo, true
}

// HasReturnTo returns a boolean if a field has been set.
func (o *CreateSubscriptionBody) HasReturnTo() bool {
	if o != nil && !IsNil(o.ReturnTo) {
		return true
	}

	return false
}

// SetReturnTo gets a reference to the given string and assigns it to the ReturnTo field.
func (o *CreateSubscriptionBody) SetReturnTo(v string) {
	o.ReturnTo = &v
}

// GetWorkspace returns the Workspace field value if set, zero value otherwise (both if not set or set to explicit null).
func (o *CreateSubscriptionBody) GetWorkspace() string {
	if o == nil || IsNil(o.Workspace.Get()) {
		var ret string
		return ret
	}
	return *o.Workspace.Get()
}

// GetWorkspaceOk returns a tuple with the Workspace field value if set, nil otherwise
// and a boolean to check if the value has been set.
// NOTE: If the value is an explicit nil, `nil, true` will be returned
func (o *CreateSubscriptionBody) GetWorkspaceOk() (*string, bool) {
	if o == nil {
		return nil, false
	}
	return o.Workspace.Get(), o.Workspace.IsSet()
}

// HasWorkspace returns a boolean if a field has been set.
func (o *CreateSubscriptionBody) HasWorkspace() bool {
	if o != nil && o.Workspace.IsSet() {
		return true
	}

	return false
}

// SetWorkspace gets a reference to the given NullableString and assigns it to the Workspace field.
func (o *CreateSubscriptionBody) SetWorkspace(v string) {
	o.Workspace.Set(&v)
}
// SetWorkspaceNil sets the value for Workspace to be an explicit nil
func (o *CreateSubscriptionBody) SetWorkspaceNil() {
	o.Workspace.Set(nil)
}

// UnsetWorkspace ensures that no value is present for Workspace, not even an explicit nil
func (o *CreateSubscriptionBody) UnsetWorkspace() {
	o.Workspace.Unset()
}

func (o CreateSubscriptionBody) MarshalJSON() ([]byte, error) {
	toSerialize,err := o.ToMap()
	if err != nil {
		return []byte{}, err
	}
	return json.Marshal(toSerialize)
}

func (o CreateSubscriptionBody) ToMap() (map[string]interface{}, error) {
	toSerialize := map[string]interface{}{}
	if !IsNil(o.Currency) {
		toSerialize["currency"] = o.Currency
	}
	toSerialize["interval"] = o.Interval
	toSerialize["plan"] = o.Plan
	if o.ProvisionFirstProject.IsSet() {
		toSerialize["provision_first_project"] = o.ProvisionFirstProject.Get()
	}
	if !IsNil(o.ReturnTo) {
		toSerialize["return_to"] = o.ReturnTo
	}
	if o.Workspace.IsSet() {
		toSerialize["workspace"] = o.Workspace.Get()
	}

	for key, value := range o.AdditionalProperties {
		toSerialize[key] = value
	}

	return toSerialize, nil
}

func (o *CreateSubscriptionBody) UnmarshalJSON(bytes []byte) (err error) {
    // This validates that all required properties are included in the JSON object
	// by unmarshalling the object into a generic map with string keys and checking
	// that every required field exists as a key in the generic map.
	requiredProperties := []string{
		"interval",
		"plan",
	}

	allProperties := make(map[string]interface{})

	err = json.Unmarshal(bytes, &allProperties)

	if err != nil {
		return err;
	}

	for _, requiredProperty := range(requiredProperties) {
		if _, exists := allProperties[requiredProperty]; !exists {
			return fmt.Errorf("no value given for required property %v", requiredProperty)
		}
	}

	varCreateSubscriptionBody := _CreateSubscriptionBody{}

	err = json.Unmarshal(bytes, &varCreateSubscriptionBody)

	if err != nil {
		return err
	}

	*o = CreateSubscriptionBody(varCreateSubscriptionBody)

	additionalProperties := make(map[string]interface{})

	if err = json.Unmarshal(bytes, &additionalProperties); err == nil {
		delete(additionalProperties, "currency")
		delete(additionalProperties, "interval")
		delete(additionalProperties, "plan")
		delete(additionalProperties, "provision_first_project")
		delete(additionalProperties, "return_to")
		delete(additionalProperties, "workspace")
		o.AdditionalProperties = additionalProperties
	}

	return err
}

type NullableCreateSubscriptionBody struct {
	value *CreateSubscriptionBody
	isSet bool
}

func (v NullableCreateSubscriptionBody) Get() *CreateSubscriptionBody {
	return v.value
}

func (v *NullableCreateSubscriptionBody) Set(val *CreateSubscriptionBody) {
	v.value = val
	v.isSet = true
}

func (v NullableCreateSubscriptionBody) IsSet() bool {
	return v.isSet
}

func (v *NullableCreateSubscriptionBody) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableCreateSubscriptionBody(val *CreateSubscriptionBody) *NullableCreateSubscriptionBody {
	return &NullableCreateSubscriptionBody{value: val, isSet: true}
}

func (v NullableCreateSubscriptionBody) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableCreateSubscriptionBody) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


