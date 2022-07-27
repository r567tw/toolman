<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase;
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_post_lists()
    {
        \App\Models\Post::factory()->count(8)->create();
        $response = $this->get('/api/posts');

        $response->assertStatus(200)->assertJsonCount(8, 'data');
    }

    public function test_create_post()
    {
        $user = \App\Models\User::factory()->create();
        $this->actingAs($user);

        $params = \App\Models\Post::factory()->make()->toArray();
        $response = $this->post('/api/posts',$params);
        $response->assertStatus(200);
    }
}
