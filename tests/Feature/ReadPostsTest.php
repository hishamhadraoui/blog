<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReadPostsTest extends TestCase
{
    use DatabaseMigrations;
    private $post;

    public function setUp()
    {
        parent::setUp();

        $this->post= factory('App\Post')->create();
    }

    /**
     * Test if a guest can browse all posts
     *
     * @return void
     */
    public function testGuestCanBrowsePosts()
    {
        $this->get('/')->assertSee($this->post->title);
    }

    /**
     * Test if a guest can browse a single post
     *
     * @return  void 
     */
    public function testGuestCanBrowseSignlePost()
    {
        $this->get($this->post->path())
            ->assertSee($this->post->title)
            ->assertSee($this->post->body);
    }

    /**
     * Test Guest can read comments that are associated with a post
     *
     * @return  void    
     */
    public function testGuestCanReadCommentsThatAreAssociatedWithaPost()
    {
        $comment = factory('App\Comment')->create(['post_id' => $this->post->id]);

        $this->get($this->post->path())
            ->assertSee($comment->body);
    }

}
