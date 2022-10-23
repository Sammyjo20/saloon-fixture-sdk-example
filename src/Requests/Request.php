<?php

namespace Sammyjo20\Pokeapi\Requests;

use Sammyjo20\Pokeapi\Pokeapi;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = Pokeapi::class;
}
