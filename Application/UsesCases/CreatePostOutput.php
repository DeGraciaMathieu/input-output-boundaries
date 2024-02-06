<?php

namespace Application\UsesCases;

use Throwable;
use Domain\Entities\PostEntity;

interface CreatePostOutput
{
    public function present(PostEntity $postEntity): void;
    public function error(Throwable $th): void;
}
