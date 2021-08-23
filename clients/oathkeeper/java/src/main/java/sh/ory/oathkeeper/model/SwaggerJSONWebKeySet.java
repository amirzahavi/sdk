/*
 * ORY Oathkeeper
 * ORY Oathkeeper is a reverse proxy that checks the HTTP Authorization for validity against a set of rules. This service uses Hydra to validate access tokens and policies.
 *
 * The version of the OpenAPI document: v0.0.0-alpha.42
 * Contact: hi@ory.am
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package sh.ory.oathkeeper.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import sh.ory.oathkeeper.model.SwaggerJSONWebKey;

/**
 * SwaggerJSONWebKeySet swagger JSON web key set
 */
@ApiModel(description = "SwaggerJSONWebKeySet swagger JSON web key set")
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2021-08-23T19:47:41.269506447Z[GMT]")
public class SwaggerJSONWebKeySet {
  public static final String SERIALIZED_NAME_KEYS = "keys";
  @SerializedName(SERIALIZED_NAME_KEYS)
  private List<SwaggerJSONWebKey> keys = null;


  public SwaggerJSONWebKeySet keys(List<SwaggerJSONWebKey> keys) {
    
    this.keys = keys;
    return this;
  }

  public SwaggerJSONWebKeySet addKeysItem(SwaggerJSONWebKey keysItem) {
    if (this.keys == null) {
      this.keys = new ArrayList<>();
    }
    this.keys.add(keysItem);
    return this;
  }

   /**
   * The value of the \&quot;keys\&quot; parameter is an array of JWK values.  By default, the order of the JWK values within the array does not imply an order of preference among them, although applications of JWK Sets can choose to assign a meaning to the order for their purposes, if desired.
   * @return keys
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "The value of the \"keys\" parameter is an array of JWK values.  By default, the order of the JWK values within the array does not imply an order of preference among them, although applications of JWK Sets can choose to assign a meaning to the order for their purposes, if desired.")

  public List<SwaggerJSONWebKey> getKeys() {
    return keys;
  }


  public void setKeys(List<SwaggerJSONWebKey> keys) {
    this.keys = keys;
  }


  @Override
  public boolean equals(Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    SwaggerJSONWebKeySet swaggerJSONWebKeySet = (SwaggerJSONWebKeySet) o;
    return Objects.equals(this.keys, swaggerJSONWebKeySet.keys);
  }

  @Override
  public int hashCode() {
    return Objects.hash(keys);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class SwaggerJSONWebKeySet {\n");
    sb.append("    keys: ").append(toIndentedString(keys)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

