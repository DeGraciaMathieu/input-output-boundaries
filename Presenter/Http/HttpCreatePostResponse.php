<?php

namespace Presenter\Http;

use Application\UsesCases\CreatePostOutput;
use Application\UsesCases\CreatePostResponse;
use Throwable;

class HttpCreatePostResponse implements CreatePostOutput
{
    public function present(CreatePostResponse $response): void
    {
        // Add here the logic specific to the web display of a post creation response 
    }

    public function error(Throwable $th): void
    {
        //
    }
}