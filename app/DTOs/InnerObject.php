<?php

namespace App\DTOs;

use Spatie\LaravelData\Data;

class InnerObject extends Data
{
    public function __construct(
        public readonly string $arg1,
        public readonly string $arg2,
    )
    {
    }
}
