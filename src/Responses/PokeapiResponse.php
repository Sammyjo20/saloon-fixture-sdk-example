<?php

namespace Sammyjo20\Pokeapi\Responses;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Pokeapi\Exceptions\PokeapiRequestException;

class PokeapiResponse extends SaloonResponse
{
    /**
     * Create an exception if a server or client error occurred.
     *
     * @return PokeapiRequestException
     */
    public function toException(): PokeapiRequestException
    {
        if ($this->failed()) {
            $body = $this->response?->getBody()?->getContents();

            return new PokeapiRequestException($this, $body, 0, $this->getGuzzleException());
        }
    }
}
