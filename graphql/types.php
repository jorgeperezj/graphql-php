<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$userType = new ObjectType([
    'name' => 'User',
    'description' => 'Tipo crear usuario',
    'fields' => [
        'id' => Type::int(),
        'first_name' => Type::string(),
        'last_name' => Type::string(),
        'email' => Type::string(),
    ]
]);
