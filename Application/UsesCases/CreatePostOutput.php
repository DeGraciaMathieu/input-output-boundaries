<?php

namespace Application\UsesCases;

use Throwable;
use Application\UsesCases\CreatePostResponse;

interface CreatePostOutput
{
    public function present(CreatePostResponse $response): void;
    public function error(Throwable $th): void;
}
