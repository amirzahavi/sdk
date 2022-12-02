"""
    Ory Identities API

    This is the API specification for Ory Identities with features such as registration, login, recovery, account verification, profile settings, password reset, identity management, session management, email and sms delivery, and more.   # noqa: E501

    The version of the OpenAPI document: v0.11.0
    Contact: office@ory.sh
    Generated by: https://openapi-generator.tech
"""


import sys
import unittest

import ory_kratos_client
from ory_kratos_client.model.identity import Identity
from ory_kratos_client.model.session import Session
globals()['Identity'] = Identity
globals()['Session'] = Session
from ory_kratos_client.model.successful_native_registration import SuccessfulNativeRegistration


class TestSuccessfulNativeRegistration(unittest.TestCase):
    """SuccessfulNativeRegistration unit test stubs"""

    def setUp(self):
        pass

    def tearDown(self):
        pass

    def testSuccessfulNativeRegistration(self):
        """Test SuccessfulNativeRegistration"""
        # FIXME: construct object with mandatory attributes with example values
        # model = SuccessfulNativeRegistration()  # noqa: E501
        pass


if __name__ == '__main__':
    unittest.main()
