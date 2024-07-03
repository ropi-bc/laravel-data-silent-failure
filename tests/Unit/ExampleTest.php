<?php

namespace Tests\Unit;

use App\DTOs\OuterObject;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_laravel_data_fails_silently(): void
    {
        $result = OuterObject::from(json_decode(file_get_contents(__DIR__.'/test_data.json')));

        $this->assertNotNull($result);
    }
}
