<?php

namespace Src\Bridge;

class BookTitleAuthor extends BridgeBook
{
    public function get(): string
    {
        return $this->implementor->showTitle() . ' ' . $this->implementor->showAuthor();
    }
}