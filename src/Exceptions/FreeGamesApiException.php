<?php

namespace Varandas\EpicFreeGames\Exceptions;

use Exception;

class FreeGamesApiException extends Exception
{
    public function errorMessage(): string
    {
        return 'An error occurred while retrieving free games. Please try again later. ' . $this->getMessage();
    }
}
