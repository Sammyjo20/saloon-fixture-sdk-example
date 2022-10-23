<?php

namespace Sammyjo20\Pokeapi;

use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Pokeapi\Responses\PokeapiResponse;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;

class Pokeapi extends SaloonConnector
{
    use AcceptsJson;

    /**
     * Define the base URL for the API
     *
     * @var string
     */
    protected string $apiBaseUrl = 'https://pokeapi.co/api/v2';

    /**
     * Custom response that all requests will return.
     *
     * @var string|null
     */
    protected ?string $response = PokeapiResponse::class;

    /**
     * The requests/services on the Pokeapi.
     *
     * @var array
     */
    protected array $requests = [];

    /**
     * Define the base URL of the API.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return $this->apiBaseUrl;
    }

    /**
     * @param string|null $baseUrl
     */
    public function __construct(string $baseUrl = null)
    {
        if (isset($baseUrl)) {
            $this->apiBaseUrl = $baseUrl;
        }
    }

    /**
     * Define any default headers.
     *
     * @return array
     */
    public function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Define any default config.
     *
     * @return array
     */
    public function defaultConfig(): array
    {
        return [];
    }
}
