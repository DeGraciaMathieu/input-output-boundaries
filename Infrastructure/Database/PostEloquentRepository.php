<?php

namespace App\Infrastructure\Database;

use Domain\Entities\PostEntity;
use App\Infrastructure\Database\Models\Post;
use Domain\Database\Repositories\PostRepository;

class PostEloquentRepository implements PostRepository
{
    public function __construct(
        private readonly Post $post,
    ) {}

    public function store(PostEntity $postEntity): PostEntity
    {
        $post = $this->post->create([
            'title' => $postEntity->title,
        ]);

        return new PostEntity(
            id: $post->id,
            title: $post->title,
        );
    }
}