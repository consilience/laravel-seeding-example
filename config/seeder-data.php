<?php

return [
    'users' => [
        [
            'email' => 'superAdmin@app.test',
            'name' => 'Super Admin',
            'password' => 'password',
            'role' => 'super_admin',
        ],
    ],

    'roles' => [
        'super_admin' => [
            'name' => 'super_admin',
            'permissions' => [
                'view',
                'show',
                'edit',
                'delete'
            ],
        ],

        'admin' => [
            'name' => 'admin',
            'permissions' => [
                'view',
                'show',
                'edit',
                'delete'
            ],
        ],

        'user' => [
            'name' => 'user',
            'permissions' => [
                'view',
                'show',
                'edit'
            ],
        ],
    ],

    'permissions' => [
        'view' => [
            'view_index',
            'view_wiki',
            'view_page',
            'view_space',
            'view_images'
        ],

        'show' => [
            'show_index',
            'show_wiki',
            'show_page',
            'show_space',
            'show_images'
        ],

        'edit' => [
            'edit_index',
            'edit_wiki',
            'edit_page',
            'edit_space',
            'edit_images'
        ],

        'delete' => [
            'delete_index',
            'delete_wiki',
            'delete_page',
            'delete_space',
            'delete_images'
        ],
    ],
];
