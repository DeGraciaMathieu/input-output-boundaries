<?php

namespace Application\UsesCases;

use Throwable;
use Domain\Entities\PostEntity;
use Application\UsesCases\CreatePostInput;
use Application\UsesCases\CreatePostOutput;
use Domain\Database\Repositories\PostRepository;

class CreatePostAction
{
    public function __construct(
        private PostRepository $postRepository,
    ) {}

    public function handle(
        CreatePostInput $input,
        CreatePostOutput $output,
    ) : void {

        try {

            // Add business logic here (service, repository, gateway ...)

            $postEntity = $this->postRepository->store(
                new PostEntity(
                    id: null,
                    title: $input->title(),
                ),
            );

            /**
             * Through this interface, the presenter layer handles response preparation.
             * The application layer is unaware of the upstream layer details.
             */
            $output->present($postEntity);

        } catch (Throwable $th) {
            $output->error($th);
        }
    }
}
