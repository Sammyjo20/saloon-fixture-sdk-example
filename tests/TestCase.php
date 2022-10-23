<?php

namespace Sammyjo20\Pokeapi\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Sammyjo20\Saloon\Helpers\MockConfig;

class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        MockConfig::setFixturePath('tests/Fixtures/Responses');
        // MockConfig::throwOnMissingFixtures();
    }
}
