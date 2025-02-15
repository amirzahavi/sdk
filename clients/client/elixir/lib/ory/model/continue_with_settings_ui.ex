# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.ContinueWithSettingsUi do
  @moduledoc """
  Indicates, that the UI flow could be continued by showing a settings ui
  """

  @derive [Poison.Encoder]
  defstruct [
    :action,
    :flow
  ]

  @type t :: %__MODULE__{
    :action => String.t,
    :flow => Ory.Model.ContinueWithSettingsUiFlow.t
  }
end

defimpl Poison.Decoder, for: Ory.Model.ContinueWithSettingsUi do
  import Ory.Deserializer
  def decode(value, options) do
    value
    |> deserialize(:flow, :struct, Ory.Model.ContinueWithSettingsUiFlow, options)
  end
end

