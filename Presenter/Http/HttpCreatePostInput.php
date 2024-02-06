<?php

namespace Presenter\Http;

use Application\UsesCases\CreatePostInput;

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