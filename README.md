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

```php
<?php

use Varandas\EpicFreeGames\EpicFreeGames\EpicGamesService;

// Create an instance
$epicGamesService = new EpicGamesService();

// Get free games
$games = $epicGamesService->getFreeGames();

// Process the retrieved games
foreach ($games as $game) {
    // TODO
}
```

## Game Object Properties

| Property | Type | Description |
| --- | --- | --- |
| id | string | Game ID |
| title | string | Game title |

## License

This package is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.


