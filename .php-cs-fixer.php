<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/',
    ])
;

return (new Config())
    ->setFinder($finder)
    ->setRules([
        'no_unused_imports' => true,
    ])
;
