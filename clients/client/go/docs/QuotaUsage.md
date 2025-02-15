# QuotaUsage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**AdditionalPrice** | **int64** | The additional price per unit in cents. | 
**CanUseMore** | **bool** |  | 
**Feature** | **string** |  region_eu RegionEU region_us RegionUS region_apac RegionAPAC region_global RegionGlobal production_projects ProductionProjects daily_active_users DailyActiveUsers custom_domains CustomDomains sla SLA collaborator_seats CollaboratorSeats edge_cache EdgeCache branding_themes BrandingThemes zendesk_support ZendeskSupport project_metrics ProjectMetrics project_metrics_time_window ProjectMetricsTimeWindow organizations Organizations rop_grant ResourceOwnerPasswordGrant rate_limit_tier RateLimitTier session_rate_limit_tier RateLimitTierSessions identities_list_rate_limit_tier RateLimitTierIdentitiesList | 
**FeatureAvailable** | **bool** |  | 
**Included** | **int64** |  | 
**Used** | **int64** |  | 

## Methods

### NewQuotaUsage

`func NewQuotaUsage(additionalPrice int64, canUseMore bool, feature string, featureAvailable bool, included int64, used int64, ) *QuotaUsage`

NewQuotaUsage instantiates a new QuotaUsage object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewQuotaUsageWithDefaults

`func NewQuotaUsageWithDefaults() *QuotaUsage`

NewQuotaUsageWithDefaults instantiates a new QuotaUsage object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetAdditionalPrice

`func (o *QuotaUsage) GetAdditionalPrice() int64`

GetAdditionalPrice returns the AdditionalPrice field if non-nil, zero value otherwise.

### GetAdditionalPriceOk

`func (o *QuotaUsage) GetAdditionalPriceOk() (*int64, bool)`

GetAdditionalPriceOk returns a tuple with the AdditionalPrice field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetAdditionalPrice

`func (o *QuotaUsage) SetAdditionalPrice(v int64)`

SetAdditionalPrice sets AdditionalPrice field to given value.


### GetCanUseMore

`func (o *QuotaUsage) GetCanUseMore() bool`

GetCanUseMore returns the CanUseMore field if non-nil, zero value otherwise.

### GetCanUseMoreOk

`func (o *QuotaUsage) GetCanUseMoreOk() (*bool, bool)`

GetCanUseMoreOk returns a tuple with the CanUseMore field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetCanUseMore

`func (o *QuotaUsage) SetCanUseMore(v bool)`

SetCanUseMore sets CanUseMore field to given value.


### GetFeature

`func (o *QuotaUsage) GetFeature() string`

GetFeature returns the Feature field if non-nil, zero value otherwise.

### GetFeatureOk

`func (o *QuotaUsage) GetFeatureOk() (*string, bool)`

GetFeatureOk returns a tuple with the Feature field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetFeature

`func (o *QuotaUsage) SetFeature(v string)`

SetFeature sets Feature field to given value.


### GetFeatureAvailable

`func (o *QuotaUsage) GetFeatureAvailable() bool`

GetFeatureAvailable returns the FeatureAvailable field if non-nil, zero value otherwise.

### GetFeatureAvailableOk

`func (o *QuotaUsage) GetFeatureAvailableOk() (*bool, bool)`

GetFeatureAvailableOk returns a tuple with the FeatureAvailable field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetFeatureAvailable

`func (o *QuotaUsage) SetFeatureAvailable(v bool)`

SetFeatureAvailable sets FeatureAvailable field to given value.


### GetIncluded

`func (o *QuotaUsage) GetIncluded() int64`

GetIncluded returns the Included field if non-nil, zero value otherwise.

### GetIncludedOk

`func (o *QuotaUsage) GetIncludedOk() (*int64, bool)`

GetIncludedOk returns a tuple with the Included field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIncluded

`func (o *QuotaUsage) SetIncluded(v int64)`

SetIncluded sets Included field to given value.


### GetUsed

`func (o *QuotaUsage) GetUsed() int64`

GetUsed returns the Used field if non-nil, zero value otherwise.

### GetUsedOk

`func (o *QuotaUsage) GetUsedOk() (*int64, bool)`

GetUsedOk returns a tuple with the Used field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetUsed

`func (o *QuotaUsage) SetUsed(v int64)`

SetUsed sets Used field to given value.



[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


