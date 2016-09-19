<?php
/**
 * SettingsApi
 * PHP version 5
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kunta API
 *
 * One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace KuntaAPI\Api;

use \KuntaAPI\Configuration;
use \KuntaAPI\ApiClient;
use \KuntaAPI\ApiException;
use \KuntaAPI\ObjectSerializer;

/**
 * SettingsApi Class Doc Comment
 *
 * @category Class
 * @package  KuntaAPI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsApi
{

    /**
     * API Client
     *
     * @var \KuntaAPI\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \KuntaAPI\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\KuntaAPI\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://demo.kuntaapi.fi/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \KuntaAPI\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \KuntaAPI\ApiClient $apiClient set the API client
     *
     * @return SettingsApi
     */
    public function setApiClient(\KuntaAPI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createOrganizationSetting
     *
     * Creates organization setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @param \KuntaAPI\Model\OrganizationSetting $setting  (optional)
     * @return \KuntaAPI\Model\OrganizationSetting
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function createOrganizationSetting($organizationId, $settingId, $setting = null)
    {
        list($response) = $this->createOrganizationSettingWithHttpInfo($organizationId, $settingId, $setting);
        return $response;
    }

    /**
     * Operation createOrganizationSettingWithHttpInfo
     *
     * Creates organization setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @param \KuntaAPI\Model\OrganizationSetting $setting  (optional)
     * @return Array of \KuntaAPI\Model\OrganizationSetting, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function createOrganizationSettingWithHttpInfo($organizationId, $settingId, $setting = null)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling createOrganizationSetting');
        }
        // verify the required parameter 'settingId' is set
        if ($settingId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settingId when calling createOrganizationSetting');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/settings/{settingId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($settingId !== null) {
            $resourcePath = str_replace(
                "{" . "settingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settingId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($setting)) {
            $_tempBody = $setting;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\OrganizationSetting',
                '/organizations/{organizationId}/settings/{settingId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\OrganizationSetting', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\OrganizationSetting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteOrganizationSetting
     *
     * Deletes an organization setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @return void
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function deleteOrganizationSetting($organizationId, $settingId)
    {
        list($response) = $this->deleteOrganizationSettingWithHttpInfo($organizationId, $settingId);
        return $response;
    }

    /**
     * Operation deleteOrganizationSettingWithHttpInfo
     *
     * Deletes an organization setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function deleteOrganizationSettingWithHttpInfo($organizationId, $settingId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling deleteOrganizationSetting');
        }
        // verify the required parameter 'settingId' is set
        if ($settingId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settingId when calling deleteOrganizationSetting');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/settings/{settingId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($settingId !== null) {
            $resourcePath = str_replace(
                "{" . "settingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settingId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/organizations/{organizationId}/settings/{settingId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation findOrganizationSetting
     *
     * Finds organizations setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @return \KuntaAPI\Model\OrganizationSetting
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationSetting($organizationId, $settingId)
    {
        list($response) = $this->findOrganizationSettingWithHttpInfo($organizationId, $settingId);
        return $response;
    }

    /**
     * Operation findOrganizationSettingWithHttpInfo
     *
     * Finds organizations setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @return Array of \KuntaAPI\Model\OrganizationSetting, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function findOrganizationSettingWithHttpInfo($organizationId, $settingId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling findOrganizationSetting');
        }
        // verify the required parameter 'settingId' is set
        if ($settingId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settingId when calling findOrganizationSetting');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/settings/{settingId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($settingId !== null) {
            $resourcePath = str_replace(
                "{" . "settingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settingId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\OrganizationSetting',
                '/organizations/{organizationId}/settings/{settingId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\OrganizationSetting', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\OrganizationSetting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listOrganizationSettings
     *
     * Lists organizations settings
     *
     * @param string $organizationId Organization id (required)
     * @param string $key Setting key (optional)
     * @return \KuntaAPI\Model\OrganizationSetting[]
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationSettings($organizationId, $key = null)
    {
        list($response) = $this->listOrganizationSettingsWithHttpInfo($organizationId, $key);
        return $response;
    }

    /**
     * Operation listOrganizationSettingsWithHttpInfo
     *
     * Lists organizations settings
     *
     * @param string $organizationId Organization id (required)
     * @param string $key Setting key (optional)
     * @return Array of \KuntaAPI\Model\OrganizationSetting[], HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function listOrganizationSettingsWithHttpInfo($organizationId, $key = null)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling listOrganizationSettings');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/settings/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // query params
        if ($key !== null) {
            $queryParams['key'] = $this->apiClient->getSerializer()->toQueryValue($key);
        }
        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\OrganizationSetting[]',
                '/organizations/{organizationId}/settings/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\OrganizationSetting[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\OrganizationSetting[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateOrganizationSetting
     *
     * Updates an organization setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @return \KuntaAPI\Model\OrganizationSetting
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function updateOrganizationSetting($organizationId, $settingId)
    {
        list($response) = $this->updateOrganizationSettingWithHttpInfo($organizationId, $settingId);
        return $response;
    }

    /**
     * Operation updateOrganizationSettingWithHttpInfo
     *
     * Updates an organization setting
     *
     * @param string $organizationId Organization id (required)
     * @param string $settingId Setting id (required)
     * @return Array of \KuntaAPI\Model\OrganizationSetting, HTTP status code, HTTP response headers (array of strings)
     * @throws \KuntaAPI\ApiException on non-2xx response
     */
    public function updateOrganizationSettingWithHttpInfo($organizationId, $settingId)
    {
        // verify the required parameter 'organizationId' is set
        if ($organizationId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organizationId when calling updateOrganizationSetting');
        }
        // verify the required parameter 'settingId' is set
        if ($settingId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settingId when calling updateOrganizationSetting');
        }
        // parse inputs
        $resourcePath = "/organizations/{organizationId}/settings/{settingId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json;charset=utf-8'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json;charset=utf-8'));

        // path params
        if ($organizationId !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organizationId),
                $resourcePath
            );
        }
        // path params
        if ($settingId !== null) {
            $resourcePath = str_replace(
                "{" . "settingId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settingId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\KuntaAPI\Model\OrganizationSetting',
                '/organizations/{organizationId}/settings/{settingId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\KuntaAPI\Model\OrganizationSetting', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\OrganizationSetting', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\BadRequest', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\KuntaAPI\Model\InternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
