<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function welcome_user_nickname()
    {
        $this->get('saludo/duilio/silence')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio, tu apodo es silence');
    }

    function welcome_user_without_nickname()
    {
        $this->get('saludo/duilio')
            ->assertStatus(200)
            ->assertSee('Bienvenido Duilio');
    }
}
