# NOTE: This file is auto generated by OpenAPI Generator 6.6.0 (https://openapi-generator.tech).
# Do not edit this file manually.

defmodule Ory.Model.CreateProjectBody do
  @moduledoc """
  Create Project Request Body
  """

  @derive [Poison.Encoder]
  defstruct [
    :name,
    :workspace_id
  ]

  @type t :: %__MODULE__{
    :name => String.t,
    :workspace_id => String.t | nil
  }
end

defimpl Poison.Decoder, for: Ory.Model.CreateProjectBody do
  def decode(value, _options) do
    value
  end
end

