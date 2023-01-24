<?php

namespace Tests\Unit;

use App\Services\CountWordService;
use PHPUnit\Framework\TestCase;

class CountWordsTest extends TestCase
{
    public function test_empty_string_returns_zero()
    {
        $service = new CountWordService();
        $this->assertEquals($service->count(''), 0);
    }

    public function test_works_with_trailing_and_leading_spaces()
    {
        $service = new CountWordService();
        $this->assertEquals($service->count('     '), 0);
        $this->assertEquals($service->count('Test     '), 1);
        $this->assertEquals($service->count('    Test     '), 1);
    }

    public function test_counts_correctly()
    {
        $service = new CountWordService();
        $this->assertEquals($service->count('Esto es una prueba'), 4);
        $this->assertEquals($service->count('Esto es'), 2);
    }
}
