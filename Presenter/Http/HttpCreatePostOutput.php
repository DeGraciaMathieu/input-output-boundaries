<?php

namespace Presenter\Http;

use Application\UsesCases\CreatePostResponseModel;
use Throwable;
use Application\UsesCases\CreatePostOutput;

class HttpCreatePostOutput implements CreatePostOutput
{
    /**
     * Add here the logic specific to the web display of a post creation response 
     */
    public function present(CreatePostResponseModel $model): void
    {
        $model->id();
        $model->title();
    }

    public function error(CreatePostResponseModel $model, Throwable $th): void
    {
        //
    }
}