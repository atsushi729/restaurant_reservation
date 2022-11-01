<?php

namespace App\Http\Actions\Home;

use App\Http\Responders\Home\IndexResponder;
use App\Usecase\Home\IndexUsecase;


class IndexAction
{
    private $usecase;
    private $responder;

    public function __construct(IndexUsecase $usecase, IndexResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke()
    {
        $this->responder->show($this->usecase->run());
    }
}
