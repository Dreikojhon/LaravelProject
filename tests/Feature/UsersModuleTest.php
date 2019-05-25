<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function load_users_list()
    {
       $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Usuarios')
            ->assertSee('Joel')
            ->assertSee('Ellie');
    }

    /** @test */
    function message_users_empty()
    {
       $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
        }



    /** @test*/
    function load_users_details()
    {
       $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }

    /** @test*/
    function load_new_user()
    {
       $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear nuevo usuario');
    }

}
