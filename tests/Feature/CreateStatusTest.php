<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateStatusTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('db:seed');
    }

    /** @test */
    public function a_user_can_create_status()
    {
        $this->withoutExceptionHandling();

        // 1. Given
        $user = factory(User::class)->create();
        $this->actingAs($user);

        // 2. When
        $this->post(route('statuses.store'), [
            'body' => 'Mi primer estado',
            '_token' => csrf_token()
        ]);

        // 3. Then
        $this->assertDatabaseHas('statuses', [
            'body' => 'Mi primer estado'
        ]);
    }
}
