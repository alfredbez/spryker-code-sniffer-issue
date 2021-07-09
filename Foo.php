<?php

declare(strict_types = 1);

class Foo
{

    protected function baz(): void
    {
    }

    protected function bar(): array
    {
        return [
            new stdClass(),
        ];
    }
}
