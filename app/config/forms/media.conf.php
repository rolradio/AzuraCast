<?php
return [
    'method' => 'post',
    'elements' => [

        'path' => [
            'text',
            [
                'label' => _('File Name'),
                'description' => _('The relative path of the file in the station\'s media directory.'),
            ],
        ],

        'title' => [
            'text',
            [
                'label' => _('Song Title'),
            ]
        ],

        'artist' => [
            'text',
            [
                'label' => _('Song Artist'),
            ]
        ],

        'album' => [
            'text',
            [
                'label' => _('Song Album'),
            ]
        ],

        'submit' => [
            'submit',
            [
                'type' => 'submit',
                'label' => _('Save Changes'),
                'helper' => 'formButton',
                'class' => 'ui-button btn-lg btn-primary',
            ]
        ],

    ],
];