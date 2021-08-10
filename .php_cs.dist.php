<?php
return PhpCsFixer\Config::create()
    ->setRules([
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
        'no_superfluous_phpdoc_tags' => false,
        'ordered_class_elements' => false,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_to_comment' => false,
        'yoda_style' => false,
        // Risky
        'is_null' => ['use_yoda_style' => false],
        'no_alias_functions' => true,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('tests/Fixtures')
            ->in(__DIR__)
    )
    ->setUsingCache(false);
