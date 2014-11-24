<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Home',
            'url'   => '',
            'title' => 'Home route of current frontcontroller'
        ],
 
        // This is a menu item
        'test'  => [
            'text'  => 'Redovisning',
            'url'   => 'redovisning',
            'title' => 'Submenu with url to relative frontcontroller',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'item 1'  => [
                        'text'  => 'Kmom01',
                        'url'   => 'kmom01',
                        'title' => 'Redovisningstext för Kmom01'
                    ],
                ],
            ],
        ],
 
        // This is a menu item
        'source' => [
            'text'  =>'Källkod',
            'url'   => 'source',
            'title' => 'Visa Källkod'
        ],
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function ($url) {
        if ($url == $this->di->get('request')->getRoute()) {
                return true;
        }
    },

    // Callback to create the urls
    'create_url' => function ($url) {
        return $this->di->get('url')->create($url);
    },
];
