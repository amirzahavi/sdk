# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.IsReady503Response do
  @moduledoc """
  
  """

  @derive [Poison.Encoder]
  defstruct [
    :errors
  ]

  @type t :: %__MODULE__{
    :errors => %{optional(String.t) => String.t} | nil
  }
end

defimpl Poison.Decoder, for: Ory.Model.IsReady503Response do
  def decode(value, _options) do
    value
  end
end

