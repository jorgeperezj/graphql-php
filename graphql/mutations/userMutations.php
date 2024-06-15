<?php

namespace Mutations;

use Resolvers\UserResolver;
use Resolvers\UpdateUser;
use Resolvers\DeleteUser;

use GraphQL\Type\Definition\Type;

$userMutations = [
    'CreateUser' => [
        'type' => $userType,
        'args' => [
            'input' => Type::nonNull($CreateUserInputType),
        ],
        'resolve' => [UserResolver::class, 'CreateUser'],
    ],

    'UpdateUser' => [
        'type' => $userType,
        'args' => [
            'id' => Type::nonNull(Type::int()),
            'input' => Type::nonNull($UpdateUserInputType),
        ],
        'resolve' => [UpdateUser::class, 'UpdateUser'],
    ],

    'DeleteUser' => [
        'type' => $userType,
        'args' => [
            'id' => Type::nonNull(Type::int()),
        ],
        'resolve' => [DeleteUser::class, 'DeleteUser'],
    ],
];