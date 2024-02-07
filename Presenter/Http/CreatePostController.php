<?php

namespace Presenter\Http;

use Illuminate\Http\Request;
use Presenter\Http\HttpCreatePostInput;
use Presenter\Http\HttpCreatePostOutput;
use Application\UsesCases\CreatePostAction;

/**
* The controller, from the presenter layer, is closest to the user; it acts as the bridge between the application and user inputs. 
* It should not contain any business logic.
*/
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
