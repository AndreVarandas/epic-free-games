<?php

use Varandas\EpicFreeGames\EpicGamesService;

describe('EpicFreeGames Functionality', function () {
    it('Retrieves free games with default country and locale settings', function () {
        $epicFreeGames = new EpicGamesService();
        $games = $epicFreeGames->getFreeGames();

        expect($games)->toBeArray();
    });

    it('Retrieves free games with custom country and locale settings', function () {
        $epicFreeGames = new EpicGamesService();
        $games = $epicFreeGames->setCountry('GB')->setLocale('fr')->getFreeGames();

        expect($games)->toBeArray();
    });
});
