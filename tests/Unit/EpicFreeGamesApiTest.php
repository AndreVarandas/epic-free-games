<?php

use GuzzleHttp\Psr7\Request;
use Varandas\EpicFreeGames\EpicFreeGamesApi;
use Varandas\EpicFreeGames\Exceptions\FreeGamesApiException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

describe('EpicFreeGamesApi', function () {
    beforeEach(function () {
        $this->api = new EpicFreeGamesApi();
    });

    it('retrieves free games with default country and locale settings', function () {
        $games = $this->api->getFreeGames();

        expect($games)->toBeArray();
    });

    it('throws FreeGamesApiException when API call fails', function () {
        $mockedClient = Mockery::mock(Client::class);
        $mockedClient->shouldReceive('request')->andThrow(new RequestException("API request failed", new Request('GET', '/')));

        $this->api->setClient($mockedClient);

        expect(function () {
            $this->api->getFreeGames();
        })->toThrow(FreeGamesApiException::class);
    });
});


