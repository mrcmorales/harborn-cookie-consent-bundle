<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony'               => true,
        'declare_strict_types'   => true,
        'ordered_imports'        => true,
        'psr_autoloading'        => false,
        'yoda_style'             => false,
        'phpdoc_order'           => true,
        'array_syntax'           => [
            'syntax' => 'short',
        ],
        'binary_operator_spaces' => [
            'operators' => ['=' => 'align', '=>' => 'align'],
        ],
        'header_comment'         => [
            'header' => <<<EOH
This file is part of the ConnectHolland CookieConsentBundle package.
(c) Connect Holland.
EOH
            ,
        ],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
