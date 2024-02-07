<?php

namespace Presenter\Http;

use Application\UsesCases\CreatePostInput;

/**
* It represents an implementation of the necessary inputs for the action to work. 
* This class allows for the inversion of dependence between the presenter layer and the application layer.
*/
class HttpCreatePostInput implements CreatePostInput
{
    public function __construct(
        private string $title,
    ) {
    }

    public function title(): string
    {
        return $this->title;
    }
}
