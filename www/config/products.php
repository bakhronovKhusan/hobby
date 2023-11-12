<?php
return [
    'roles'           => [  'admin', 'user'],
    'permissions'     => [  'create products',
                            'edit articles',
                            'delete products',
                            'edit products' ],
    'rolePermissions' => [
        'admin' => ['create products',
                    'edit articles'  ,
                    'edit products'  ,
                    'delete products' ],
        'user'  => [ 'edit products' ]
    ],
    'email'     => 'bakhranovkhusan@gmail.com'
];
