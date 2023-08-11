# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.CreateInviteResponse do
  @moduledoc """
  
  """

  @derive [Poison.Encoder]
  defstruct [
    :all_invites,
    :created_invite
  ]

  @type t :: %__MODULE__{
    :all_invites => [Ory.Model.MemberInvite.t],
    :created_invite => Ory.Model.MemberInvite.t
  }
end

defimpl Poison.Decoder, for: Ory.Model.CreateInviteResponse do
  import Ory.Deserializer
  def decode(value, options) do
    value
    |> deserialize(:all_invites, :list, Ory.Model.MemberInvite, options)
    |> deserialize(:created_invite, :struct, Ory.Model.MemberInvite, options)
  end
end

