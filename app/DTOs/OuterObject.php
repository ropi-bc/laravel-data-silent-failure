<?php

namespace App\DTOs;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class OuterObject extends Data
{
    public function __construct(
        public readonly Collection $innerObjects
    )
    {
    }
}
