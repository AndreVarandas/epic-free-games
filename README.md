# Epic Free Games

## Overview

This is a simple package that grabs the current free games from the Epic Games Store and returns them.

## Installation

```bash
composer require varandas/epic-free-games
```

## Usage

```php
<?php

use Varandas\EpicFreeGames\EpicFreeGames\EpicGamesService;

// Create an instance
$epicGamesService = new EpicGamesService();

// Get free games
$games = $epicGamesService->getFreeGames();

// Process the retrieved games
// ...
```

## Setting Country and Locale

```php
<?php

use Varandas\EpicFreeGames\EpicFreeGames\EpicGamesService;

// Create an instance
$epicGamesService = new EpicGamesService();

// Set country and locale
$epicGamesService->setCountry('BR')->setLocale('pt-BR');

// Get free games
$games = $epicGamesService->getFreeGames();

// Process the retrieved games
// ...
```

## Game Object

The Game object `Varandas\EpicFreeGames\Models\EpicGame` has the following getters:

| Getter | Description |
| --- | --- |
| getTitle() | The title of the game |
| getId() | The id of the game |
| getNamespace() | The namespace of the game |
| getDescription() | The description of the game |
| getEffectiveDate() | The date the game became free |
| getOfferType() | The type of the offer |
| getExpiryDate() | The date the game will stop being free |
| getViewableDate() | The date the game will be visible |
| getStatus() | The status of the game |
| isCodeRedemptionOnly() | Whether the game is only redeemable with a code |
| getKeyImages() | The key images of the game |
| getSeller() | The seller of the game |
| getProductSlug() | The product slug of the game |
| getUrlSlug() | The url slug of the game |
| getUrl() | The url of the game |
| getItems() | The items of the game |
| getCustomAttributes() | The custom attributes of the game |
| getCategories() | The categories of the game |
| getTags() | The tags of the game |
| getCatalogNs() | The catalog namespace of the game |
| getOfferMappings() | The offer mappings of the game |
| getPrice() | The price of the game |
| getPromotions() | The promotions of the game |
| getPromotionalOffers() | The promotional offers of the game |
| getUpcomingPromotionalOffers() | The upcoming promotional offers of the game |

### This is how you can use the getters

```php
<?php

use Varandas\EpicFreeGames\EpicFreeGames\EpicGamesService;

// Create an instance
$epicGamesService = new EpicGamesService();

// Get free games
$games = $epicGamesService->getFreeGames();

// Process the retrieved games
foreach ($games as $game) {
    $title = $game->getTitle();
    $id = $game->getId();
    $namespace = $game->getNamespace();
    $description = $game->getDescription();
    $effectiveDate = $game->getEffectiveDate();
    $offerType = $game->getOfferType();
    $expiryDate = $game->getExpiryDate();
    $viewableDate = $game->getViewableDate();
    $isCodeRedemptionOnly = $game->isCodeRedemptionOnly();
    $status = $game->getStatus();
    $keyImages = $game->getKeyImages();
    $seller = $game->getSeller();
    $productSlug = $game->getProductSlug();
    $urlSlug = $game->getUrlSlug();
    $url = $game->getUrl();
    $items = $game->getItems();
    $customAttributes = $game->getCustomAttributes();
    $categories = $game->getCategories();
    $tags = $game->getTags();
    $catalogNs = $game->getCatalogNs();
    $offerMappings = $game->getOfferMappings();
    $price = $game->getPrice();
    $promotions = $game->getPromotions();
    $promotionalOffers = $game->getPromotionalOffers();
    $upcomingPromotionalOffers = $game->getUpcomingPromotionalOffers();
    
    // Do something with the data
    // ...
}
```

### Sample response

This is an example of the response from the Epic Games Store API - so that you can see what data is available.

```json
{
    "title":"Tandem: A Tale of Shadows",
    "id":"9142916d80f54720b01f8f62b21014be",
    "namespace":"d1a3ff292b2f4ee289a83d7a91ae3458",
    "description":"Tandem : A Tale of Shadows redefines the puzzle platformer genre with a unique gameplay and exceptional aesthetics. Help Emma and the teddy bear Fenton solve the mystery of the disappearance of the famous magician Thomas Kane.",
    "effectiveDate":"2021-10-21T16:00:00.000Z",
    "offerType":"BASE_GAME",
    "expiryDate":null,
    "viewableDate":"2021-07-16T16:00:00.000Z",
    "status":"ACTIVE",
    "isCodeRedemptionOnly":false,
    "keyImages":[
        {
            "type":"OfferImageWide",
            "url":"https://cdn1.epicgames.com/spt/c087c527-0c2b-4269-926b-f0d15102de8a/tandem-a-tale-of-shadows-offer-633449e1.jpg"
        },
        {
            "type":"OfferImageTall",
            "url":"https://cdn1.epicgames.com/spt/2c1d81ab-12e7-40a6-9edd-a449cc619ad5/download-tandem-a-tale-of-shadows-offer-5c6a45df.jpg"
        },
        {
            "type":"Thumbnail",
            "url":"https://cdn1.epicgames.com/spt/2c1d81ab-12e7-40a6-9edd-a449cc619ad5/download-tandem-a-tale-of-shadows-offer-5c6a45df.jpg"
        }
    ],
    "seller":{
        "id":"o-722pvnj3qsvbzvskhx4r8x7gcxhhbn",
        "name":"Hatinh Interactive"
    },
    "productSlug":null,
    "urlSlug":"24ed2fb76b334158b9e580c01f7282a6",
    "url":null,
    "items":[
        {
            "id":"7c02053bfee24d028aa1bec03edd6a82",
            "namespace":"d1a3ff292b2f4ee289a83d7a91ae3458"
        }
    ],
    "customAttributes":[
        {
            "key":"autoGeneratedPrice",
            "value":"false"
        },
        {
            "key":"isBlockchainUsed",
            "value":"false"
        }
    ],
    "categories":[
        {
            "path":"freegames"
        },
        {
            "path":"games"
        },
        {
            "path":"games/edition"
        },
        {
            "path":"games/edition/base"
        }
    ],
    "tags":[
        {
            "id":"1298"
        },
        {
            "id":"18051"
        }
    ],
    "catalogNs":{
        "mappings":[
            {
                "pageSlug":"tandem-a-tale-of-shadows-c3f55e",
                "pageType":"productHome"
            }
        ]
    },
    "offerMappings":[
        {
            "pageSlug":"tandem-a-tale-of-shadows-c3f55e",
            "pageType":"productHome"
        }
    ],
    "price":{
        "totalPrice":{

        },
        "lineOffers":[

        ]
    },
    "promotions":{
        "promotionalOffers":[
            {
                "promotionalOffers":[
                    {
                        "startDate":"2023-10-18T15:00:00.000Z",
                        "endDate":"2023-11-01T15:00:00.000Z",
                        "discountSetting":{
                            "discountType":"PERCENTAGE",
                            "discountPercentage":50
                        }
                    },
                    {
                        "startDate":"2023-10-26T15:00:00.000Z",
                        "endDate":"2023-11-02T15:00:00.000Z",
                        "discountSetting":{
                            "discountType":"PERCENTAGE",
                            "discountPercentage":0
                        }
                    }
                ]
            }
        ],
        "upcomingPromotionalOffers":[
            {
                "promotionalOffers":[
                    {
                        "startDate":"2023-12-16T23:00:00.000Z",
                        "endDate":"2023-12-31T11:00:00.000Z",
                        "discountSetting":{
                            "discountType":"PERCENTAGE",
                            "discountPercentage":40
                        }
                    }
                ]
            }
        ]
    }
}
```

## Disclaimer

Portions of the materials used are trademarks and/or copyrighted works of Epic Games, Inc. All rights reserved by Epic. This material is not official and is not endorsed by Epic.

## License

This package is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


