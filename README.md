# kunta-api-php-client
One API to rule them all. One API to find them, One API to bring them all and in the darkness bind them.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.1
- Package version: 0.0.1-alpha1
- Build date: 2016-09-19T18:12:51.146+03:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/otavanopisto/kunta-api-php-client.git"
    }
  ],
  "require": {
    "otavanopisto/kunta-api-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/kunta-api-php-client/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new KuntaAPI\Api\BannersApi();
$organizationId = "organizationId_example"; // string | Organization id
$bannerId = "bannerId_example"; // string | banner id

try {
    $result = $api_instance->findOrganizationBanner($organizationId, $bannerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BannersApi->findOrganizationBanner: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://demo.kuntaapi.fi/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BannersApi* | [**findOrganizationBanner**](docs/Api/BannersApi.md#findorganizationbanner) | **GET** /organizations/{organizationId}/banners/{bannerId} | Finds organizations banner
*BannersApi* | [**listOrganizationBannerImages**](docs/Api/BannersApi.md#listorganizationbannerimages) | **GET** /organizations/{organizationId}/banners/{bannerId}/images | Returns a list of organization banner images
*BannersApi* | [**listOrganizationBanners**](docs/Api/BannersApi.md#listorganizationbanners) | **GET** /organizations/{organizationId}/banners | Lists organizations banners
*EventsApi* | [**findOrganizationEvent**](docs/Api/EventsApi.md#findorganizationevent) | **GET** /organizations/{organizationId}/events/{eventId} | Returns organizations event by id
*EventsApi* | [**findOrganizationEventImage**](docs/Api/EventsApi.md#findorganizationeventimage) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId} | Returns an event image
*EventsApi* | [**getOrganizationEventImageData**](docs/Api/EventsApi.md#getorganizationeventimagedata) | **GET** /organizations/{organizationId}/events/{eventId}/images/{imageId}/data | Returns an event image data
*EventsApi* | [**listOrganizationEventImages**](docs/Api/EventsApi.md#listorganizationeventimages) | **GET** /organizations/{organizationId}/events/{eventId}/images | Returns list of event images
*EventsApi* | [**listOrganizationEvents**](docs/Api/EventsApi.md#listorganizationevents) | **GET** /organizations/{organizationId}/events | Lists organizations events
*NewsApi* | [**findOrganizationBannerImage**](docs/Api/NewsApi.md#findorganizationbannerimage) | **GET** /organizations/{organizationId}/banners/{bannerId}/images/{imageId} | Returns a single organiztion banner image
*NewsApi* | [**findOrganizationNewsArticle**](docs/Api/NewsApi.md#findorganizationnewsarticle) | **GET** /organizations/{organizationId}/news/{newsArticleId} | Finds organizations news article
*NewsApi* | [**findOrganizationNewsArticleImage**](docs/Api/NewsApi.md#findorganizationnewsarticleimage) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images/{imageId} | Returns an news article image
*NewsApi* | [**getOrganizationBannerImageData**](docs/Api/NewsApi.md#getorganizationbannerimagedata) | **GET** /organizations/{organizationId}/banners/{bannerId}/images/{imageId}/data | Returns an organization banner image data
*NewsApi* | [**getOrganizationNewsArticleImageData**](docs/Api/NewsApi.md#getorganizationnewsarticleimagedata) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images/{imageId}/data | Returns a news article image data
*NewsApi* | [**listOrganizationNews**](docs/Api/NewsApi.md#listorganizationnews) | **GET** /organizations/{organizationId}/news | Lists organizations news
*NewsApi* | [**listOrganizationNewsArticleImages**](docs/Api/NewsApi.md#listorganizationnewsarticleimages) | **GET** /organizations/{organizationId}/news/{newsArticleId}/images | Returns list of news article images
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /organizations | List organizations
*ServiceCategoriesApi* | [**listServiceClasses**](docs/Api/ServiceCategoriesApi.md#listserviceclasses) | **GET** /organizations/{organizationId}/serviceClasses/ | List service classes for an organization
*ServiceChannelsApi* | [**listServiceElectornicChannels**](docs/Api/ServiceChannelsApi.md#listserviceelectornicchannels) | **GET** /organizations/{organizationId}/services/{serviceId}/electronicChannels | List service electornic channels
*ServicesApi* | [**createService**](docs/Api/ServicesApi.md#createservice) | **POST** /organizations/{organizationId}/services | Create a service
*ServicesApi* | [**deleteService**](docs/Api/ServicesApi.md#deleteservice) | **DELETE** /organizations/{organizationId}/services/{serviceId} | Delete a service
*ServicesApi* | [**findService**](docs/Api/ServicesApi.md#findservice) | **GET** /organizations/{organizationId}/services/{serviceId} | Find a service by id
*ServicesApi* | [**listServiceClasses**](docs/Api/ServicesApi.md#listserviceclasses) | **GET** /organizations/{organizationId}/serviceClasses/ | List service classes for an organization
*ServicesApi* | [**listServiceElectornicChannels**](docs/Api/ServicesApi.md#listserviceelectornicchannels) | **GET** /organizations/{organizationId}/services/{serviceId}/electronicChannels | List service electornic channels
*ServicesApi* | [**listServices**](docs/Api/ServicesApi.md#listservices) | **GET** /organizations/{organizationId}/services | List services
*ServicesApi* | [**updateService**](docs/Api/ServicesApi.md#updateservice) | **PUT** /organizations/{organizationId}/services/{serviceId} | Update a service
*SettingsApi* | [**deleteOrganizationSetting**](docs/Api/SettingsApi.md#deleteorganizationsetting) | **DELETE** /organizations/{organizationId}/settings/{settingId} | Deletes an organization setting
*SettingsApi* | [**listOrganizationSettings**](docs/Api/SettingsApi.md#listorganizationsettings) | **GET** /organizations/{organizationId}/settings/ | Lists organizations settings
*TilesApi* | [**findOrganizationTile**](docs/Api/TilesApi.md#findorganizationtile) | **GET** /organizations/{organizationId}/tiles/{tileId} | Finds organizations tile
*TilesApi* | [**findOrganizationTileImage**](docs/Api/TilesApi.md#findorganizationtileimage) | **GET** /organizations/{organizationId}/tiles/{tileId}/images/{imageId} | Returns a single organiztion tile image
*TilesApi* | [**getOrganizationTileImageData**](docs/Api/TilesApi.md#getorganizationtileimagedata) | **GET** /organizations/{organizationId}/tiles/{tileId}/images/{imageId}/data | Returns an organization tile image data
*TilesApi* | [**listOrganizationTileImages**](docs/Api/TilesApi.md#listorganizationtileimages) | **GET** /organizations/{organizationId}/tiles/{tileId}/images | Returns a list of organization tile images
*TilesApi* | [**listOrganizationTiles**](docs/Api/TilesApi.md#listorganizationtiles) | **GET** /organizations/{organizationId}/tiles | Lists organizations tiles


## Documentation For Models

 - [Attachment](docs/Model/Attachment.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Banner](docs/Model/Banner.md)
 - [Event](docs/Model/Event.md)
 - [Forbidden](docs/Model/Forbidden.md)
 - [InternalServerError](docs/Model/InternalServerError.md)
 - [LocalizedValue](docs/Model/LocalizedValue.md)
 - [NewsArticle](docs/Model/NewsArticle.md)
 - [NotFound](docs/Model/NotFound.md)
 - [NotImplemented](docs/Model/NotImplemented.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationSetting](docs/Model/OrganizationSetting.md)
 - [Service](docs/Model/Service.md)
 - [ServiceChannelAttachment](docs/Model/ServiceChannelAttachment.md)
 - [ServiceChannelCommon](docs/Model/ServiceChannelCommon.md)
 - [ServiceChannelServiceHour](docs/Model/ServiceChannelServiceHour.md)
 - [ServiceChannelSupport](docs/Model/ServiceChannelSupport.md)
 - [ServiceChannelWebPage](docs/Model/ServiceChannelWebPage.md)
 - [ServiceClass](docs/Model/ServiceClass.md)
 - [ServiceElectronicChannel](docs/Model/ServiceElectronicChannel.md)
 - [Tile](docs/Model/Tile.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




