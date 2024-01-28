<?php

namespace Domain\Database\Repositories;

use Domain\Entities\PostEntity;

interface PostRepository
{
    public function store(PostEntity $postEntity): PostEntity;
}