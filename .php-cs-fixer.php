<?php

$config = new PhpCsFixer\Config();
$config->setRules([
    '@PhpCsFixer' => true,
    'blank_line_before_statement' => ['statements' => [
        'continue',
        'declare',
        'return',
        'throw',
        'try',
    ]],
    'cast_spaces' => ['space' => 'none'],
    'concat_space' => ['spacing' => 'one'],
    'increment_style' => ['style' => 'post'],
    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
    'no_leading_import_slash' => true,
    'global_namespace_import' => false,
    'no_superfluous_phpdoc_tags' => false,
    'ordered_class_elements' => false,
    'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
    'phpdoc_to_comment' => false,
    'yoda_style' => false,
    // Risky
    'no_alias_functions' => true,
    'non_printable_character' => ['use_escape_sequences_in_strings' => true],
    'phpdoc_order' => ['order' => ['param', 'throws', 'return']],
])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('tests/Fixtures')
            ->in(__DIR__)
    )
    ->setRiskyAllowed(true)
    ->setUsingCache(false);

return $config;
