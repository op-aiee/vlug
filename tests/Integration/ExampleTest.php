<?php

namespace Tests\Integration;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    function it_()
    {
        $this->get('/')
             ->assertStatus(200);
    }
}
