<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/src',
    ]);

return CodingLabs\styles($finder);
