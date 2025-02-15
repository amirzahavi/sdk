//
// AUTO-GENERATED FILE, DO NOT MODIFY!
//

// ignore_for_file: unused_element
import 'package:ory_kratos_client/src/model/update_login_flow_with_lookup_secret_method.dart';
import 'package:ory_kratos_client/src/model/update_login_flow_with_password_method.dart';
import 'package:ory_kratos_client/src/model/update_login_flow_with_totp_method.dart';
import 'package:ory_kratos_client/src/model/update_login_flow_with_web_authn_method.dart';
import 'package:ory_kratos_client/src/model/update_login_flow_with_oidc_method.dart';
import 'package:built_value/json_object.dart';
import 'package:built_value/built_value.dart';
import 'package:built_value/serializer.dart';
import 'package:one_of/one_of.dart';

part 'update_login_flow_body.g.dart';

/// UpdateLoginFlowBody
///
/// Properties:
/// * [csrfToken] - Sending the anti-csrf token is only required for browser login flows.
/// * [identifier] - Identifier is the email or username of the user trying to log in.
/// * [method] - Method should be set to \"lookup_secret\" when logging in using the lookup_secret strategy.
/// * [password] - The user's password.
/// * [passwordIdentifier] - Identifier is the email or username of the user trying to log in. This field is deprecated!
/// * [provider] - The provider to register with
/// * [traits] - The identity traits. This is a placeholder for the registration flow.
/// * [upstreamParameters] - UpstreamParameters are the parameters that are passed to the upstream identity provider.  These parameters are optional and depend on what the upstream identity provider supports. Supported parameters are: `login_hint` (string): The `login_hint` parameter suppresses the account chooser and either pre-fills the email box on the sign-in form, or selects the proper session. `hd` (string): The `hd` parameter limits the login/registration process to a Google Organization, e.g. `mycollege.edu`. `prompt` (string): The `prompt` specifies whether the Authorization Server prompts the End-User for reauthentication and consent, e.g. `select_account`.
/// * [totpCode] - The TOTP code.
/// * [webauthnLogin] - Login a WebAuthn Security Key  This must contain the ID of the WebAuthN connection.
/// * [lookupSecret] - The lookup secret.
@BuiltValue()
abstract class UpdateLoginFlowBody implements Built<UpdateLoginFlowBody, UpdateLoginFlowBodyBuilder> {
  /// One Of [UpdateLoginFlowWithLookupSecretMethod], [UpdateLoginFlowWithOidcMethod], [UpdateLoginFlowWithPasswordMethod], [UpdateLoginFlowWithTotpMethod], [UpdateLoginFlowWithWebAuthnMethod]
  OneOf get oneOf;

  static const String discriminatorFieldName = r'method';

  static const Map<String, Type> discriminatorMapping = {
    r'lookup_secret': UpdateLoginFlowWithLookupSecretMethod,
    r'oidc': UpdateLoginFlowWithOidcMethod,
    r'password': UpdateLoginFlowWithPasswordMethod,
    r'totp': UpdateLoginFlowWithTotpMethod,
    r'webauthn': UpdateLoginFlowWithWebAuthnMethod,
  };

  UpdateLoginFlowBody._();

  factory UpdateLoginFlowBody([void updates(UpdateLoginFlowBodyBuilder b)]) = _$UpdateLoginFlowBody;

  @BuiltValueHook(initializeBuilder: true)
  static void _defaults(UpdateLoginFlowBodyBuilder b) => b;

  @BuiltValueSerializer(custom: true)
  static Serializer<UpdateLoginFlowBody> get serializer => _$UpdateLoginFlowBodySerializer();
}

extension UpdateLoginFlowBodyDiscriminatorExt on UpdateLoginFlowBody {
    String? get discriminatorValue {
        if (this is UpdateLoginFlowWithLookupSecretMethod) {
            return r'lookup_secret';
        }
        if (this is UpdateLoginFlowWithOidcMethod) {
            return r'oidc';
        }
        if (this is UpdateLoginFlowWithPasswordMethod) {
            return r'password';
        }
        if (this is UpdateLoginFlowWithTotpMethod) {
            return r'totp';
        }
        if (this is UpdateLoginFlowWithWebAuthnMethod) {
            return r'webauthn';
        }
        return null;
    }
}
extension UpdateLoginFlowBodyBuilderDiscriminatorExt on UpdateLoginFlowBodyBuilder {
    String? get discriminatorValue {
        if (this is UpdateLoginFlowWithLookupSecretMethodBuilder) {
            return r'lookup_secret';
        }
        if (this is UpdateLoginFlowWithOidcMethodBuilder) {
            return r'oidc';
        }
        if (this is UpdateLoginFlowWithPasswordMethodBuilder) {
            return r'password';
        }
        if (this is UpdateLoginFlowWithTotpMethodBuilder) {
            return r'totp';
        }
        if (this is UpdateLoginFlowWithWebAuthnMethodBuilder) {
            return r'webauthn';
        }
        return null;
    }
}

class _$UpdateLoginFlowBodySerializer implements PrimitiveSerializer<UpdateLoginFlowBody> {
  @override
  final Iterable<Type> types = const [UpdateLoginFlowBody, _$UpdateLoginFlowBody];

  @override
  final String wireName = r'UpdateLoginFlowBody';

  Iterable<Object?> _serializeProperties(
    Serializers serializers,
    UpdateLoginFlowBody object, {
    FullType specifiedType = FullType.unspecified,
  }) sync* {
  }

  @override
  Object serialize(
    Serializers serializers,
    UpdateLoginFlowBody object, {
    FullType specifiedType = FullType.unspecified,
  }) {
    final oneOf = object.oneOf;
    return serializers.serialize(oneOf.value, specifiedType: FullType(oneOf.valueType))!;
  }

  @override
  UpdateLoginFlowBody deserialize(
    Serializers serializers,
    Object serialized, {
    FullType specifiedType = FullType.unspecified,
  }) {
    final result = UpdateLoginFlowBodyBuilder();
    Object? oneOfDataSrc;
    final serializedList = (serialized as Iterable<Object?>).toList();
    final discIndex = serializedList.indexOf(UpdateLoginFlowBody.discriminatorFieldName) + 1;
    final discValue = serializers.deserialize(serializedList[discIndex], specifiedType: FullType(String)) as String;
    oneOfDataSrc = serialized;
    final oneOfTypes = [UpdateLoginFlowWithLookupSecretMethod, UpdateLoginFlowWithOidcMethod, UpdateLoginFlowWithPasswordMethod, UpdateLoginFlowWithTotpMethod, UpdateLoginFlowWithWebAuthnMethod, ];
    Object oneOfResult;
    Type oneOfType;
    switch (discValue) {
      case r'lookup_secret':
        oneOfResult = serializers.deserialize(
          oneOfDataSrc,
          specifiedType: FullType(UpdateLoginFlowWithLookupSecretMethod),
        ) as UpdateLoginFlowWithLookupSecretMethod;
        oneOfType = UpdateLoginFlowWithLookupSecretMethod;
        break;
      case r'oidc':
        oneOfResult = serializers.deserialize(
          oneOfDataSrc,
          specifiedType: FullType(UpdateLoginFlowWithOidcMethod),
        ) as UpdateLoginFlowWithOidcMethod;
        oneOfType = UpdateLoginFlowWithOidcMethod;
        break;
      case r'password':
        oneOfResult = serializers.deserialize(
          oneOfDataSrc,
          specifiedType: FullType(UpdateLoginFlowWithPasswordMethod),
        ) as UpdateLoginFlowWithPasswordMethod;
        oneOfType = UpdateLoginFlowWithPasswordMethod;
        break;
      case r'totp':
        oneOfResult = serializers.deserialize(
          oneOfDataSrc,
          specifiedType: FullType(UpdateLoginFlowWithTotpMethod),
        ) as UpdateLoginFlowWithTotpMethod;
        oneOfType = UpdateLoginFlowWithTotpMethod;
        break;
      case r'webauthn':
        oneOfResult = serializers.deserialize(
          oneOfDataSrc,
          specifiedType: FullType(UpdateLoginFlowWithWebAuthnMethod),
        ) as UpdateLoginFlowWithWebAuthnMethod;
        oneOfType = UpdateLoginFlowWithWebAuthnMethod;
        break;
      default:
        throw UnsupportedError("Couldn't deserialize oneOf for the discriminator value: ${discValue}");
    }
    result.oneOf = OneOfDynamic(typeIndex: oneOfTypes.indexOf(oneOfType), types: oneOfTypes, value: oneOfResult);
    return result.build();
  }
}

