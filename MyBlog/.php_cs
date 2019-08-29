<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude(['bootstrap', 'storage', 'vendor', 'nova-components', 'nova', 'tests'])
    ->name('*.php')
    ->name('_ide_helper')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return PhpCsFixer\Config::create()->setRules([
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'single_quote' => true,
    'binary_operator_spaces' => true,
    'blank_line_before_return' => true,
    'no_short_echo_tag' => true,
    'no_unused_imports' => true,
    'no_superfluous_phpdoc_tags' => true,
    'no_empty_phpdoc' => true,
    'not_operator_with_successor_space' => true,
    'ordered_imports' => ['sortAlgorithm' => 'length'],
    'method_chaining_indentation' => true,
    'class_attributes_separation' => true,
    'no_leading_namespace_whitespace' => true,
    'array_indentation' => true,
    'single_blank_line_before_namespace' => true,
    'function_typehint_space' => true,
    'no_empty_comment' => true,
    'no_empty_statement' => true,
    'ternary_operator_spaces' => true,
    'trailing_comma_in_multiline_array' => true,
    'multiline_whitespace_before_semicolons' => true,
])->setFinder($finder);
