<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "nc_staticfilecache".
 *
 * Auto generated 25-03-2014 07:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static File Cache',
    'description' => 'Transparent static file cache solution using mod_rewrite and mod_expires. Increase response times for static pages by a factor of 230!!',
    'category' => 'fe',
    'version' => '4.0.0',
    'state' => 'beta',
    'modify_tables' => 'pages',
    'clearcacheonload' => true,
    'author' => 'Static File Cache team',
    'author_email' => 'extensions@netcreators.com',
    'author_company' => 'Netcreators',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'php' => '7.0.0-0.0.0',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SFC\\NcStaticfilecache\\' => 'Classes'
        ],
    ],
];
