# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.Plan do
  @moduledoc """
  
  """

  @derive [Poison.Encoder]
  defstruct [
    :name,
    :version
  ]

  @type t :: %__MODULE__{
    :name => String.t,
    :version => integer()
  }
end

defimpl Poison.Decoder, for: Ory.Model.Plan do
  def decode(value, _options) do
    value
  end
end

