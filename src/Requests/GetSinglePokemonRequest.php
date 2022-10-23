<?php

namespace Sammyjo20\Pokeapi\Requests;

use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Pokeapi\Requests\Request;

class GetSinglePokemonRequest extends Request
{
    /**
     * Define the method that the request will use.
     *
     * @var string|null
     */
    protected ?string $method = Saloon::GET;

    /**
     * @return string
     */
    public function defineEndpoint(): string
    {
        return '/pokemon/' . $this->pokemon;
    }

    public function __construct(public string $pokemon)
    {
        //
    }
}
