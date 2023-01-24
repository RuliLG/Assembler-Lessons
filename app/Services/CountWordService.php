<?php

namespace App\Services;

class CountWordService {
    public function count(string $text): int
    {
        return str_word_count($text);
    }
}
