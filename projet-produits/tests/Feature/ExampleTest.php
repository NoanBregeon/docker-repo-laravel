<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase; // <--- AJOUTE CETTE LIGNE
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase; // <--- AJOUTE CETTE LIGNE AUSSI

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        // Maintenant, RefreshDatabase va créer 'produits_table'
        // juste avant de faire ce GET
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
