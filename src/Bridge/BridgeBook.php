<?php

namespace Src\Bridge;

abstract class BridgeBook
{
    public function __construct(string $author, string $title, string $implementor)
    {
        $this->implementor = new $implementor($author, $title);
        if (is_a($this->implementor, 'Src\Bridge\Implementor')) {
        };
    }

    abstract public function get(): string;
}
