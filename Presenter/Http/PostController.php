<?php

namespace Presenter\Http;

use Presenter\Http\HttpCreatePostResponse;
use Application\UsesCases\CreatePostHandler;
use Application\UsesCases\CreatePostRequest;

class PostController
{
    public function __construct(
        private CreatePostHandler $createPostHandler,
    ) {}

    public function create()
    {
        $response = new HttpCreatePostResponse();

        $this->createPostHandler->handle(
            new CreatePostRequest(
                title: 'qsdqsdsq',
            ),
            $response,
        );
    }
}