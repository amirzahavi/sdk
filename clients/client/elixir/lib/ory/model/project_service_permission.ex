# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.ProjectServicePermission do
  @moduledoc """
  
  """

  @derive [Poison.Encoder]
  defstruct [
    :config
  ]

  @type t :: %__MODULE__{
    :config => map()
  }
end

defimpl Poison.Decoder, for: Ory.Model.ProjectServicePermission do
  def decode(value, _options) do
    value
  end
end

