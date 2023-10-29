<?php

namespace Varandas\EpicFreeGames;

use Varandas\EpicFreeGames\Exceptions\FreeGamesApiException;

class EpicGamesService {
    protected EpicFreeGamesApi $api;
    protected string $country;
    protected string $locale;

    public function __construct() {
        $this->api = new EpicFreeGamesApi();
        $this->country = 'US';
        $this->locale = 'en';
    }

    /**
     * Sets the country for the API call.
     *
     * @param $country - ISO 3166-1 alpha-2 country code
     *
     * @return $this
     */
    public function setCountry($country): static
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Sets the locale for the API call.
     *
     * @param $locale - ISO 639-1 language code
     *
     * @return $this
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Retrieves free games from Epic Games Store.
     *
     * @throws FreeGamesApiException
     */
    public function getFreeGames(): array
    {
        return $this->api->getFreeGames($this->country, $this->locale);
    }
}
