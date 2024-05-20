<?php

namespace Tests\Feature;

use App\Models\Trajet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TrajetTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_trajet()
    {
        $trajet = Trajet::factory()->create();

        $this->assertDatabaseHas('trajets', [
            'id' => $trajet->id,
        ]);
    }
}
