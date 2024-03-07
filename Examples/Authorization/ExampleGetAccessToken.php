<?php

use Apilo\Api\AuthorizationApi;
use Apilo\Configuration;
use Apilo\Model\RestAuthTokenPostRequest;
use Dotenv\Dotenv;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../../src/vendor/autoload.php');

loadEnv();

// Configure HTTP basic authorization: BasicAuth
$config = (new Configuration())
    ->setUsername(getenv('CLIENT_ID'))
    ->setPassword(getenv('CLIENT_SECRET'))
    ->setHost(getenv('HOST'))
;

$apiInstance = new AuthorizationApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['verify' => false]),
    $config
);

$payload = new RestAuthTokenPostRequest(); // \Apilo\Model\RestAuthTokenPostRequest
$payload->setGrantType(RestAuthTokenPostRequest::GRANT_TYPE_AUTHORIZATION_CODE);
$payload->setToken(getenv('AUTHORIZATION_CODE'));

try {
    $result = $apiInstance->restAuthTokenPost($payload);

    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restAuthTokenPost: ', $e->getMessage(), PHP_EOL;
}

function loadEnv(): void
{
    (Dotenv::createUnsafeImmutable(__DIR__ . '/../'))->Load();
}
