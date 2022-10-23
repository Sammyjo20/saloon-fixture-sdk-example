<?php

use Sammyjo20\Pokeapi\Requests\GetAllPokemonRequest;
use Sammyjo20\Pokeapi\Requests\GetSinglePokemonRequest;
use Sammyjo20\Saloon\Clients\MockClient;
use Sammyjo20\Saloon\Http\MockResponse;
use Sammyjo20\Saloon\Http\SaloonRequest;

test('gets all pokemon', function () {
    $mockClient = new MockClient([
        GetAllPokemonRequest::class => MockResponse::fixture('allPokemon'),
    ]);

    $request = new GetAllPokemonRequest;
    $response = $request->send($mockClient);

    expect($response->status())->toEqual(200);
    expect($response->collect('results'))->toHaveCount(20);
});

test('advanced example', function () {
    $mockClient = new MockClient([
        '*' => function (SaloonRequest $request) {
            $reflection = new ReflectionClass($request);

            return MockResponse::fixture($reflection->getShortName());
        },
    ]);

    $request = new GetAllPokemonRequest;
    $response = $request->send($mockClient);

    expect($response->status())->toEqual(200);
    expect($response->collect('results'))->toHaveCount(20);

    $request = new GetSinglePokemonRequest('piplup');
    $response = $request->send($mockClient);

    expect($response->status())->toEqual(200);
});
