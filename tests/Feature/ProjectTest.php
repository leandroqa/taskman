<?php

namespace Tests\Feature;

use App\Project;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use ProjectSeeder;

class ProjectTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListAllProducts()
    {

        $this->seed(ProjectSeeder::class);

        $this->get(route('projects.index'))
            ->assertStatus(200)->assertJsonCount(3);
    }
}
