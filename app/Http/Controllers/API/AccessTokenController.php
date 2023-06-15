<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;


class AccessTokenController extends Controller
{
    public function generate_token()
    {
        // Substitute your Twilio Account SID and API Key details
        $accountSid = "AC728269f0436500c10a462d2867deec26";
        $apiKeySid = "SK88e0472353b4eea59cd6cccb13445f34";
        $apiKeySecret = "WC3enMSqh1fr39I8pgkp9W4lPIEPFNaY";

        $identity = uniqid();

        // Create an Access Token
        $token = new AccessToken(
            $accountSid,
            $apiKeySid,
            $apiKeySecret,
            3600,
            $identity
        );

        // Grant access to Video
        $grant = new VideoGrant();
        $grant->setRoom('cool room');
        $token->addGrant($grant);

        // Serialize the token as a JWT
        echo $token->toJWT();
    }

}
