"""
    Ory APIs

    Documentation for all public and administrative Ory APIs. Administrative APIs can only be accessed with a valid Personal Access Token. Public APIs are mostly used in browsers.   # noqa: E501

    The version of the OpenAPI document: v1.1.44
    Contact: support@ory.sh
    Generated by: https://openapi-generator.tech
"""


import sys
import unittest

import ory_client
from ory_client.model.json_web_key import JsonWebKey
globals()['JsonWebKey'] = JsonWebKey
from ory_client.model.trust_o_auth2_jwt_grant_issuer import TrustOAuth2JwtGrantIssuer


class TestTrustOAuth2JwtGrantIssuer(unittest.TestCase):
    """TrustOAuth2JwtGrantIssuer unit test stubs"""

    def setUp(self):
        pass

    def tearDown(self):
        pass

    def testTrustOAuth2JwtGrantIssuer(self):
        """Test TrustOAuth2JwtGrantIssuer"""
        # FIXME: construct object with mandatory attributes with example values
        # model = TrustOAuth2JwtGrantIssuer()  # noqa: E501
        pass


if __name__ == '__main__':
    unittest.main()
