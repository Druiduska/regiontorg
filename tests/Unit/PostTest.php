<?php
namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

use App\Models\Post;

class PostTest extends TestCase
{

    public function test_posts()
    {
        $posts = Post::all(['id', 'title', 'article'])->toArray();
        dd($posts);
        $this->assertTrue(true);
    }
}