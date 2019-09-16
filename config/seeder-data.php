<?php

return [
    // each object is represented here as an associative array
    'users' => [
        [
            'email' => 'superAdmin@app.test',
            'name' => 'Super Admin',
            'password' => 'password',
            'role' => 'super_admin',
        ],
    ],

    'roles' => [
        [
            'name' => 'super_admin',
            'permissionGroups' => [ // permissions here represent a permission group name.
                'view',
                'show',
                'edit',
                'delete'
            ],
        ],
        [
            'name' => 'admin',
            'permissionGroups' => [
                'view',
                'show',
                'edit',
                'delete'
            ],
        ],
        [
            'name' => 'user',
            'permissionGroups' => [
                'view',
                'show',
                'edit'
            ],
        ],
    ],

    'permissions' => [
        'view' => [ // This is the permission group name that is assigned per user above.
            'view_index',
            'view_wiki',
            'view_page',
            'view_space',
            'view_images'
        ],

        'show' => [ // The permission group name here must match the group name given above.
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
