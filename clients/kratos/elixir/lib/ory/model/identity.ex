# NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
# https://openapi-generator.tech
# Do not edit the class manually.

defmodule Ory.Model.Identity do
  @moduledoc """
  An [identity](https://www.ory.sh/docs/kratos/concepts/identity-user-model) represents a (human) user in Ory.
  """

  @derive [Poison.Encoder]
  defstruct [
    :created_at,
    :credentials,
    :id,
    :metadata_admin,
    :metadata_public,
    :recovery_addresses,
    :schema_id,
    :schema_url,
    :state,
    :state_changed_at,
    :traits,
    :updated_at,
    :verifiable_addresses
  ]

  @type t :: %__MODULE__{
    :created_at => DateTime.t | nil,
    :credentials => %{optional(String.t) => Ory.Model.IdentityCredentials.t} | nil,
    :id => String.t,
    :metadata_admin => AnyType | nil,
    :metadata_public => AnyType | nil,
    :recovery_addresses => [Ory.Model.RecoveryIdentityAddress.t] | nil,
    :schema_id => String.t,
    :schema_url => String.t,
    :state => Ory.Model.IdentityState.t | nil,
    :state_changed_at => DateTime.t | nil,
    :traits => AnyType | nil,
    :updated_at => DateTime.t | nil,
    :verifiable_addresses => [Ory.Model.VerifiableIdentityAddress.t] | nil
  }
end

defimpl Poison.Decoder, for: Ory.Model.Identity do
  import Ory.Deserializer
  def decode(value, options) do
    value
    |> deserialize(:credentials, :map, Ory.Model.IdentityCredentials, options)
    |> deserialize(:metadata_admin, :struct, Ory.Model.AnyType, options)
    |> deserialize(:metadata_public, :struct, Ory.Model.AnyType, options)
    |> deserialize(:recovery_addresses, :list, Ory.Model.RecoveryIdentityAddress, options)
    |> deserialize(:state, :struct, Ory.Model.IdentityState, options)
    |> deserialize(:traits, :struct, Ory.Model.AnyType, options)
    |> deserialize(:verifiable_addresses, :list, Ory.Model.VerifiableIdentityAddress, options)
  end
end

