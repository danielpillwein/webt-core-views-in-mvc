<?php
require './vendor/autoload.php';

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

/**
 * EXAMPLE: Variables usage
 *
 * This example shows you how to use variables in
 * the Fluid template language and illustrates
 * how dynamic variable access works.
 */

// set up paths object with arrays of paths with files
// $paths = new \TYPO3Fluid\Fluid\View\TemplatePaths();
// $paths->setTemplateRootPaths(['./Resources/Private/Templates']);
// $paths->setLayoutRootPaths(['./Resources/Private/Layouts']);
// $paths->setPartialRootPaths(['./Resources/Private/Partials']);
// pass the constructed TemplatePaths instance to the View
$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$view->assignMultiple([
    // Casting types
    'types' => [
        'csv' => 'one,two',
        'aStringWithNumbers' => '132 a string',
        'anArray' => ['one', 'two'],
        'typeNameInteger' => 'integer'
    ],
    'foobar' => 'string foo',
    // The variables we will use as dynamic part names:
    // Strings we will be accessing dynamically:
    // Arrays we will be accessing dynamically:
    'array' => [
        'fixed' => 'Fixed key in $array[fixed]',
        // A numerically indexed array which we will access directly.
        'numeric' => [
            'foo',
            'bar'
        ],
    ],
    '123numericprefix' => 'Numeric prefixed variable',
    // A variable whose value refers to another variable name
    'dynamicVariableName' => 'foobar'
]);

$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename(__DIR__ . '/Resources/Private/Templates/Variables.html');

$output = $view->render();

echo $output;