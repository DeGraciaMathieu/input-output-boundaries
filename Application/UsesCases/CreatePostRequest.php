<?php

namespace Application\UsesCases;

class CreatePostRequest
{
    public function __construct(
        public string $title,
    ) {}
}
