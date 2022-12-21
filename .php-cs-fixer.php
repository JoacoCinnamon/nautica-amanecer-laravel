<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()->in([__DIR__]);

$config = new Config();

return $config->setFinder($finder)->setRules([
  '@PSR12' => true,
  'array_syntax' => ['syntax' => 'short'],
  'braces' => [
    'position_after_functions_and_oop_constructs' => 'same'
  ],
]);
