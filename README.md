# Apilo PHP Client

The [Apilo.com](https://apilo.com/) platform is a modern multi-channel sales management system.
Apilo allows integration with any system using the official REST API described in the documentation
https://developer.apilo.com/api/

### First steps
To take advantage of Apilo's REST API capabilities, you need to create an account on the site at https://apilo.com/.
Then, after creating an account and logging into the management panel, go to the tab
"Administracja"->"Klucze API Apilo" and create a new application.

### Authorization
After creating the application, you will receive a one-time `authorization_code` to generate access and refresh token pair ([source](https://developer.apilo.com/api/#section/Authentication/BasicAuth)).

To do this you need to send the `POST /rest/auth/token/` request sending in the header
[Authorization Basic](https://en.wikipedia.org/wiki/Basic_access_authentication#Client_side) (
user is "Client ID" and password is "Client Secret") and with the JSON body
values `"grantType": "authorization_code"`, `"token": "{authorization_code}"`.
Api will return `accessToken` and `refreshToken`.

Apilo REST API uses the access and refresh token scheme. This means that the communication uses
the `Authorization: bearer {accessToken}` header (except for the authorization resource) ([source](https://developer.apilo.com/api/#tag/authorization)).

Access token is valid for 21 days therefore in order to maintain an active connection to the REST API it
is necessary to send a request consisting of token pair by executing
the `POST /rest/auth/token/` request sending in the Authorization Basic header (identical to the first authorization)
and sending in the JSON body with the value `"grantType": "refresh_token"` and `"token": "{refreshToken}"`.

The response will return a new `accessToken` and a new `refreshToken`.

### Implementation
All implementation requirements are described in the official documentation available at https://developer.apilo.com/api/.
You are encouraged to generate code using OpenAPI based on the [swagger.json](https://developer.apilo.com/uploads/apilo/swagger.json) file available
for download at the very top of the documentation. If you are using the PHP language in your project then we encourage you to use the 
implementation in this repository.

### Examples
- [Obtain Access and Refresh tokens using authorization_code](./Examples/Authorization/ExampleGetAccessToken.php)
- [Refresh Access and Refresh tokens using refresh_token](./Examples/Authorization/ExampleRefreshToken.php)
- [Get list of orders](./Examples/Orders/ExampleApiOrdersGet.php)
