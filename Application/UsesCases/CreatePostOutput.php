<?php

namespace Application\UsesCases;

use Application\UsesCases\CreatePostResponse;

interface CreatePostOutput
{
    public function present(CreatePostResponse $response): void;
}
