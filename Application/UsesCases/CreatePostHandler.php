<?php

namespace Application\UsesCases;

use Domain\Entities\PostEntity;
use Application\UsesCases\CreatePostOutput;
use Application\UsesCases\CreatePostRequest;
use Application\UsesCases\CreatePostResponse;
use Domain\Database\Repositories\PostRepository;

class CreatePostHandler
{
    public function __construct(
        private PostRepository $postRepository,
    ) {}

    public function handle(
        CreatePostRequest $request,
        CreatePostOutput $output,
    ) : void {

        try {

            // Add business logic here (service, repository, action, gateway ...)

            $postEntity = $this->postRepository->store(
                new PostEntity(
                    id: null,
                    title: $request->title,
                ),
            );

            $response = new CreatePostResponse($postEntity);

            /**
             * Through this interface, the presenter layer handles response preparation.
             * The application layer is unaware of the upstream layer details.
             */
            $output->present($response);

        } catch (\Throwable $th) {
            $output->error($th);
        }
    }
}
