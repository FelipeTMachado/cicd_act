<?php

namespace Tests\App\http\Controllers;

use Tests\TestCase;

class ControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_rota(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_aqui(): void {
        $aqui = ["AQUI"];

        $this->assertIsArray($aqui, "Isso nao é um array");
    }

    public function test_git(): void {
        $aqui = ["ARRAY DO GIT"];

        $this->assertIsArray($aqui, "Isso nao é um array do GIT");
    }
}
