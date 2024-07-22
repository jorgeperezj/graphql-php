<?php

use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Definition\Type;

$CreateUserInputType = new InputObjectType(
    [
        'name' => 'CreateUserInput',
        'fields' => [
            'first_name' => Type::nonNull(Type::string()),
            'last_name'  => Type::nonNull(Type::string()),
            'email'      => Type::nonNull(Type::string()),
        ],
    ]
);

$UpdateUserInputType = new InputObjectType(
    [
        'name' => 'UpdateUserInput',
        'fields' => [
            'first_name' => Type::string(),
            'last_name'  => Type::string(),
            'email'      => Type::string(),
        ],
    ]
);