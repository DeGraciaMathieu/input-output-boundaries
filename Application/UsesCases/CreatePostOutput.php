<?php

namespace Application\UsesCases;

use Throwable;
use Application\UsesCases\CreatePostResponseModel;

interface CreatePostOutput
{
    public function present(CreatePostResponseModel $model): void;
    public function error(CreatePostResponseModel $model, Throwable $th): void;
}
