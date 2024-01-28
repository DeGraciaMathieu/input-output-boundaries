<?php

namespace Domain\Entities;

readonly class PostEntity
{
    public function __construct(
        public ?int $id = null,
        public string $title,
    ) {}
}