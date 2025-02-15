# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.ErrorGeneric do
  @moduledoc """
  The standard Ory JSON API error format.
  """

  @derive [Poison.Encoder]
  defstruct [
    :error
  ]

  @type t :: %__MODULE__{
    :error => Ory.Model.GenericErrorContent.t
  }
end

defimpl Poison.Decoder, for: Ory.Model.ErrorGeneric do
  import Ory.Deserializer
  def decode(value, options) do
    value
    |> deserialize(:error, :struct, Ory.Model.GenericErrorContent, options)
  end
end

