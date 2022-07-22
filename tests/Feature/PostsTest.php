<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

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
}
