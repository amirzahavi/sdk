# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.ContinueWithRecoveryUi do
  @moduledoc """
  Indicates, that the UI flow could be continued by showing a recovery ui
  """

  @derive [Poison.Encoder]
  defstruct [
    :action,
    :flow
  ]

  @type t :: %__MODULE__{
    :action => String.t,
    :flow => Ory.Model.ContinueWithRecoveryUiFlow.t
  }
end

defimpl Poison.Decoder, for: Ory.Model.ContinueWithRecoveryUi do
  import Ory.Deserializer
  def decode(value, options) do
    value
    |> deserialize(:flow, :struct, Ory.Model.ContinueWithRecoveryUiFlow, options)
  end
end

