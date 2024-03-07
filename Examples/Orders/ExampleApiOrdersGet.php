<?php

use Dotenv\Dotenv;
use Apilo\Configuration;
use Apilo\Model\RestOrderItemsDTO;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../../src/vendor/autoload.php');

loadEnv();

// Configure HTTP basic authorization: BasicAuth
$config = (new Configuration())
    ->setAccessToken(getenv('ACCESS_TOKEN'))
    ->setHost(getenv('HOST'))
;

$apiInstance = new Apilo\Api\OrderApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(['verify' => false]),
    $config
);

try {

    $statusMap = [];
    $statusNew = null;

    foreach ($apiInstance->restApiOrdersStatusMapGet() as $status) {
        echo sprintf(
            "status name: %s, id: %d\n",
            $status->getName(),
            $status->getId()
        );
        $statusMap[$status->getId()] = $status;

        if($status->getName() === 'Nowy') {
            $statusNew = $status;
        }
    }

    if($statusNew) {
        $createdAfter = new DateTime('- 31 days');
        $orderedAfter = new DateTime('- 45 days');

        $orders = $apiInstance->restApiOrdersGet(
            $createdAfter->format(DateTimeInterface::ATOM),
            null,
            $orderedAfter->format(DateTimeInterface::ATOM),
            null,
            null,
            null,
            null,
            null,
            null,
            $statusNew->getId()
        );

        foreach ($orders->getOrders() as $order) {
            echo sprintf(
                "Order %s, id external: %s, status %s, created at %s, items quantity sum: %d, customer email: %s\n",
                $order->getId(),
                $order->getIdExternal(),
                !empty($statusMap[$order->getStatus()]) ? $statusMap[$order->getStatus()]->getName() : '-',
                $order->getCreatedAt()->format('Y-m-d, H:i:s'),
                array_reduce($order->getOrderItems(), function ($qty, RestOrderItemsDTO $item) {
                    return $qty + $item->getQuantity();
                }),
                $order->getAddressCustomer()->getEmail(),
            );
        }
    }
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->restAuthTokenPost: ', $e->getMessage(), PHP_EOL;
}

function loadEnv(): void
{
    (Dotenv::createUnsafeImmutable(__DIR__ . '/../'))->Load();
}
