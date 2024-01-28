<?php

namespace Application\UsesCases;

use Domain\Entities\PostEntity;

class CreatePostResponse
{
    public function __construct(
        public PostEntity $postEntity,
    ) {}
}
