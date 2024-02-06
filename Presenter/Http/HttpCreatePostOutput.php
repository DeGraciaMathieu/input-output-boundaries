<?php

namespace Presenter\Http;

use Throwable;
use Domain\Entities\PostEntity;
use Application\UsesCases\CreatePostOutput;

class HttpCreatePostOutput implements CreatePostOutput
{
    public function present(PostEntity $response): void
    {
        // Add here the logic specific to the web display of a post creation response 
    }

    public function error(Throwable $th): void
    {
        //
    }
}