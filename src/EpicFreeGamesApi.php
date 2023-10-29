<?php

namespace Varandas\EpicFreeGames;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Varandas\EpicFreeGames\Exceptions\FreeGamesApiException;
use Varandas\EpicFreeGames\Models\EpicGame;

/**
 * Class EpicFreeGamesApi
 *
 * @package Varandas\EpicFreeGames
 */
class EpicFreeGamesApi {
    private string $apiBaseUrl = 'https://store-site-backend-static.ak.epicgames.com';
    private Client $client;

    public function __construct() {
        $this->client = new Client(['base_uri' => $this->apiBaseUrl]);
    }

    /**
     * Sets the GuzzleHttp\Client object. Useful for testing.
     *
     * @param Client $client
     */
    public function setClient(Client $client): void {
        $this->client = $client;
    }

    /**
     * Retrieves free games from Epic Games Store.
     * Defaults to US and English.
     *
     * @param string $country - ISO 3166-1 alpha-2 country code
     * @param string $locale - ISO 639-1 language code
     *
     * @return array - Array of EpicGame objects
     *
     * @throws FreeGamesApiException
     */
    public function getFreeGames(string $country = 'US', string $locale = 'en'): array
    {
        $url = '/freeGamesPromotions';
        $query = http_build_query(['country' => $country, 'locale' => $locale]);

        try {
            $response = $this->client->request('GET', $url, ['query' => $query]);
            if ($response->getStatusCode() === 200) {
                return $this->processFreeGamesResponse($response->getBody()->getContents());
            }
        } catch (GuzzleException $e) {
            throw new FreeGamesApiException('Failed to retrieve free games. ' . $e->getMessage());
        }

        return [];
    }

    /**
     * Processes the response from the API and returns the free games.
     * If the response is not in the expected format, an empty array is returned.
     *
     * @param $response
     *
     * @return array - Array of EpicGame objects
     */
    private function processFreeGamesResponse($response): array
    {
        $data = json_decode($response, true);
        $games = [];

        if (isset($data['data']['Catalog']['searchStore']['elements'])) {
            foreach ($data['data']['Catalog']['searchStore']['elements'] as $game) {
                $games[] = new EpicGame($game);
            }
        }

        return $games;
    }
}
