<?php

namespace Presenter\Http;

use Illuminate\Http\Request;
use Presenter\Http\HttpCreatePostInput;
use Presenter\Http\HttpCreatePostOutput;
use Application\UsesCases\CreatePostAction;

class CreatePostController
{
    public function __construct(
        private CreatePostAction $createPostAction,
    ) {}

    public function __invoke(Request $request)
    {
        $this->createPostAction->handle(
            new HttpCreatePostInput(
                title: $request->title,
            ),
            new HttpCreatePostOutput(),
        );
    }
}