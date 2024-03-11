<?php

namespace Application\UsesCases;

use Domain\Entities\PostEntity;

/**
 * The response model is a data structure.
 * It acts as an anti-corruption pattern between domain and presenter layer.
 * Presenter layer must _not_ know the domain layer.
 * Presenter layer must depend solely on the application layer 
 */
class CreatePostResponseModel
{
    public function __construct(
        private PostEntity $entity,
    ) {
    }

    public function id(): int
    {
        return $this->entity->id;
    }

    public function title(): string
    {
        return $this->entity->title;
    }
}
