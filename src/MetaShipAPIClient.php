<?php

namespace MetaShipRU\MetaShipPHPSDK;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Request\Delivery\GetDeliveriesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Documents\GetAcceptanceRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Documents\GetLabelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Intake\CreateIntakeRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Offer\OfferRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\CreateBatchOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\CreateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\DeleteOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\GetOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\GetOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\UpdateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Parcel\CreateParcelRequest;
use MetaShipRU\MetaShipPHPSDK\Request\PickupPoint\GetPickupPointsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Product\ProductDataRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrdersStatusHistoryRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrderStatusHistoryBatchRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrderStatusHistoryRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchOrdersTransactionsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchShipmentOrdersRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchShipmentsRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Search\SearchWarehousesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shipment\ShipmentDataRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Shipment\ShipmentPatchRequest;
use MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder\ShipmentOrderDataRequest;
use MetaShipRU\MetaShipPHPSDK\Request\ShipmentOrder\ShipmentOrderPatchRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Status\GetStatusesInfoRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Status\GetStatusesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Warehouse\GetWarehousesRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Warehouse\UpdateBatchWarehousesRequest;
use Psr\Http\Message\ResponseInterface;

/**
 * Class MetaShipAPIClient
 * @package MetaShipRU\MetaShipPHPSDK
 */
class MetaShipAPIClient
{
    private const FORMAT = 'json';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var string
     */
    private $url;

    /**
     * @var array
     */
    private $options;

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(string $url, string $apiKey, string $apiSecret, array $options = [])
    {
        $this->client = new Client(array_merge(['base_uri' => $url], $options));
        $this->url = $url;
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->options = $options;
        $this->serializer = SerializerBuilder::create()
            ->build();
    }

    public function getOffers(OfferRequest $offerRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($offerRequest);
        return $this->client->request($offerRequest->getMethod(),
            $offerRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($offerRequest->getMethod(),
                    $offerRequest->getPath(),
                    '',
                    http_build_query($params))
            ]);
    }

    public function createOrder(CreateOrderRequest $createOrderRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createOrderRequest, 'json');
        return $this->client->post($createOrderRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($createOrderRequest->getMethod(), $createOrderRequest->getPath(), $body)
            ]);
    }

    public function getOrders(GetOrdersRequest $getOrdersRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getOrdersRequest);
        return $this->client->request($getOrdersRequest->getMethod(),
            $getOrdersRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($getOrdersRequest->getMethod(),
                    $getOrdersRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function getLabel(GetLabelRequest $getLabelRequest): ResponseInterface
    {
        $path = $getLabelRequest->getPath() . '/' . $getLabelRequest->id . '/labels';
        return $this->client->request($getLabelRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getLabelRequest->getMethod(), $path),
            ]);
    }

    public function getPickupPoints(GetPickupPointsRequest $getPickupPointsRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getPickupPointsRequest);
        return $this->client->request($getPickupPointsRequest->getMethod(),
            $getPickupPointsRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($getPickupPointsRequest->getMethod(),
                    $getPickupPointsRequest->getPath(),
                    '',
                    http_build_query($params))
            ]);
    }

    public function createParcel(CreateParcelRequest $createParcelRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createParcelRequest, 'json');
        return $this->client->post($createParcelRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($createParcelRequest->getMethod(),
                    $createParcelRequest->getPath(),
                    $body)
            ]);
    }

    public function createProduct(ProductDataRequest $request): ResponseInterface
    {
        $body = $this->serializer->serialize($request, self::FORMAT);

        return $this->client->post($request->getPath(), [
            'body' => $body,
            'headers' => $this->getHeaders($request->getMethod(), $request->getPath(), $body),
        ]);
    }

    public function createShipment(ShipmentDataRequest $request): ResponseInterface
    {
        $body = $this->serializer->serialize($request, self::FORMAT);

        return $this->client->post(
            $request->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($request->getMethod(), $request->getPath(), $body),
            ]
        );
    }

    public function createShipmentOrder(ShipmentOrderDataRequest $request): ResponseInterface
    {
        $body = $this->serializer->serialize($request, self::FORMAT);

        return $this->client->post(
            $request->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($request->getMethod(), $request->getPath(), $body),
            ]
        );
    }

    public function getAcceptance(GetAcceptanceRequest $getAcceptanceRequest): ResponseInterface
    {
        $path = $getAcceptanceRequest->getPath() . '/' . $getAcceptanceRequest->id . '/acceptance';
        return $this->client->request($getAcceptanceRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getAcceptanceRequest->getMethod(), $path),
            ]);
    }

    public function updateOrder(UpdateOrderRequest $updateOrderRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($updateOrderRequest, 'json');
        $path = $updateOrderRequest->getPath() . '/' . $updateOrderRequest->id;
        return $this->client->put($path,
            [
                'body' => $body,
                'headers' => $this->getHeaders($updateOrderRequest->getMethod(), $path, $body)
            ]);
    }

    public function deleteOrder(DeleteOrderRequest $deleteOrderRequest): ResponseInterface
    {
        $path = $deleteOrderRequest->getPath() . '/' . $deleteOrderRequest->id;
        return $this->client->delete($path,
            [
                'headers' => $this->getHeaders($deleteOrderRequest->getMethod(), $path)
            ]);
    }

    public function getStatuses(GetStatusesRequest $getStatusesRequest): ResponseInterface
    {
        $path = $getStatusesRequest->getPath() . '/' . $getStatusesRequest->id . '/statuses';
        return $this->client->request($getStatusesRequest->getMethod(),
            $path,
            [
                'headers' => $this->getHeaders($getStatusesRequest->getMethod(), $path),
            ]);
    }

    public function getOrder(GetOrderRequest $getOrderRequest): ResponseInterface
    {
        $path = $getOrderRequest->getPath() . '/' . $getOrderRequest->id;
        return $this->client->get($path,
            [
                'headers' => $this->getHeaders($getOrderRequest->getMethod(), $path)
            ]);
    }

    public function searchOrders(SearchOrdersRequest $searchOrdersRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($searchOrdersRequest);
        return $this->client->request($searchOrdersRequest->getMethod(),
            $searchOrdersRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($searchOrdersRequest->getMethod(),
                    $searchOrdersRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function searchOrderStatusHistory(SearchOrderStatusHistoryRequest $searchOrderStatusHistoryRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($searchOrderStatusHistoryRequest);
        return $this->client->request($searchOrderStatusHistoryRequest->getMethod(),
            $searchOrderStatusHistoryRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($searchOrderStatusHistoryRequest->getMethod(),
                    $searchOrderStatusHistoryRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function searchOrderStatusBatch(SearchOrderStatusHistoryBatchRequest $searchOrderStatusHistoryRequest
    ): ResponseInterface {
        $params = $this->serializer->toArray($searchOrderStatusHistoryRequest);
        return $this->client->request(
            $searchOrderStatusHistoryRequest->getMethod(),
            $searchOrderStatusHistoryRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $searchOrderStatusHistoryRequest->getMethod(),
                    $searchOrderStatusHistoryRequest->getPath(),
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function searchOrdersTransactions(SearchOrdersTransactionsRequest $request): ResponseInterface
    {
        $params = $this->serializer->toArray($request);
        return $this->client->request($request->getMethod(),
            $request->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($request->getMethod(),
                    $request->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    /**
     * @param SearchShipmentOrdersRequest $request
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function searchShipmentOrders(SearchShipmentOrdersRequest $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath();
        $params = $this->serializer->toArray($request);

        return $this->client->request(
            $method,
            $path,
            [
                'query' => $params,
                'headers' => $this->getHeaders($method, $path, '', http_build_query($params)),
            ]
        );
    }

    /**
     * @throws GuzzleException
     */
    public function searchShipments(SearchShipmentsRequest $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath();
        $params = $this->serializer->toArray($request);

        return $this->client->request(
            $method,
            $path,
            [
                'query' => $params,
                'headers' => $this->getHeaders($method, $path, '', http_build_query($params)),
            ]
        );
    }

    public function createIntake(CreateIntakeRequest $createIntakeRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createIntakeRequest, 'json');
        return $this->client->post($createIntakeRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($createIntakeRequest->getMethod(),
                    $createIntakeRequest->getPath(),
                    $body)
            ]);
    }

    public function getWarehouses(GetWarehousesRequest $getWarehousesRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($getWarehousesRequest);
        return $this->client->request($getWarehousesRequest->getMethod(),
            $getWarehousesRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($getWarehousesRequest->getMethod(),
                    $getWarehousesRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function updateBatchWarehouses(UpdateBatchWarehousesRequest $updateBatchWarehousesRequest)
    {
        $body = $this->serializer->serialize($updateBatchWarehousesRequest, 'json');
        return $this->client->put($updateBatchWarehousesRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders($updateBatchWarehousesRequest->getMethod(),
                    $updateBatchWarehousesRequest->getPath(),
                    $body)
            ]);
    }

    public function getDeliveries(GetDeliveriesRequest $getDeliveriesRequest): ResponseInterface
    {
        $path = $getDeliveriesRequest->getPath() . '/' . $getDeliveriesRequest->deliveryName;
        $params = $this->serializer->toArray($getDeliveriesRequest);

        return $this->client->request($getDeliveriesRequest->getMethod(),
            $path,
            [
                'query' => $params,
                'headers' => $this->getHeaders($getDeliveriesRequest->getMethod(),
                    $path,
                    '',
                    http_build_query($params)),
            ]);
    }

    public function searchOrdersStatusHistory(SearchOrdersStatusHistoryRequest $searchOrdersStatusHistoryRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($searchOrdersStatusHistoryRequest);
        return $this->client->request($searchOrdersStatusHistoryRequest->getMethod(),
            $searchOrdersStatusHistoryRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($searchOrdersStatusHistoryRequest->getMethod(),
                    $searchOrdersStatusHistoryRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    public function getSearchWarehouses(SearchWarehousesRequest $searchWarehousesRequest): ResponseInterface
    {
        $params = $this->serializer->toArray($searchWarehousesRequest);
        return $this->client->request($searchWarehousesRequest->getMethod(),
            $searchWarehousesRequest->getPath(),
            [
                'query' => $params,
                'headers' => $this->getHeaders($searchWarehousesRequest->getMethod(),
                    $searchWarehousesRequest->getPath(),
                    '',
                    http_build_query($params)),
            ]);
    }

    /**
     * @throws GuzzleException
     */
    public function updateShipment(int $id, ShipmentPatchRequest $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath($id);
        $body = $this->serializer->serialize($request, self::FORMAT);

        return $this->client->request(
            $method,
            $path,
            [
                'body' => $body,
                'headers' => $this->getHeaders($method, $path, $body),
            ]
        );
    }

    public function updateShipmentOrder(string $id, ShipmentOrderPatchRequest $request): ResponseInterface
    {
        $method = $request->getMethod();
        $path = $request->getPath($id);
        $body = $this->serializer->serialize($request, self::FORMAT);

        return $this->client->request(
            $method,
            $path,
            [
                'body' => $body,
                'headers' => $this->getHeaders($method, $path, $body),
            ]
        );
    }

    public function getStatusesInfo(GetStatusesInfoRequest $getStatusesInfoRequest): ResponseInterface
    {
        $path = $getStatusesInfoRequest->getPath();
        $params = $this->serializer->toArray($getStatusesInfoRequest);

        return $this->client->request(
            $getStatusesInfoRequest->getMethod(),
            $path,
            [
                'query' => $params,
                'headers' => $this->getHeaders(
                    $getStatusesInfoRequest->getMethod(),
                    $path,
                    '',
                    http_build_query($params)
                ),
            ]
        );
    }

    public function createBatchOrders(CreateBatchOrdersRequest $createBatchOrdersRequest): ResponseInterface
    {
        $body = $this->serializer->serialize($createBatchOrdersRequest, 'json');
        return $this->client->post(
            $createBatchOrdersRequest->getPath(),
            [
                'body' => $body,
                'headers' => $this->getHeaders(
                    $createBatchOrdersRequest->getMethod(),
                    $createBatchOrdersRequest->getPath(),
                    $body
                )
            ]
        );
    }

    private function getHeaders(string $requestMethod, string $requestSlug, string $requestBody = '',
        string $queryParams = ''): array
    {
        $signature = $this->generateSignatureFromRequest($requestMethod,
            $requestSlug,
            $requestBody,
            $queryParams);
        return [
            'ContentType' => 'application/json',
            'Authorization' => $signature
        ];
    }

    private function generateSignatureFromRequest(string $requestMethod, string $requestSlug, string $requestBody = '',
        string $queryParams = ''): string
    {
        $hashedPayload = hash('sha256', $requestBody);
        $dateTime = (new \DateTime())->format('Y-m-d\TH:i:s');
        $query = $queryParams ? urldecode($queryParams) : '';
        $requestData = implode(' ',
            [
                $requestMethod,
                $requestSlug,
                $query,
                $dateTime,
                $hashedPayload
            ]);
        $hashedRequestData = hash('sha256', $requestData);
        $generatedInternalSecretKey = hash_hmac('sha256', $hashedRequestData, $this->apiSecret);

        return sprintf('%s, %s, %s, %s',
            'HMAC-SHA256',
            $dateTime,
            $this->apiKey,
            $generatedInternalSecretKey);
    }
}
