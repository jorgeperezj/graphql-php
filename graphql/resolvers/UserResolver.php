<?php

namespace Resolvers;

use App\Models\User;

class UserResolver
{
    public static function CreateUser($root, array $args): array
    {
        $fields = $args['input'];
        $user = new User(
            [
                'first_name' => $fields['first_name'],
                'last_name' => $fields['last_name'],
                'email' => $fields['email'],
            ]
        );

        $user->save();
        return $user->toArray();
    }
}

class UpdateUser
{
    public static function UpdateUser($root, array $args): array
    {
        $user = User::find($args['id']);

        $fields = $args['input'];
        $user->first_name = isset($fields['first_name']) ? $fields['first_name'] : $user->first_name;
        $user->last_name  = isset($fields['last_name']) ? $fields['last_name'] : $user->last_name;
        $user->email      = isset($fields['email']) ? $fields['email'] : $user->email;
        $user->save();

        return $user->toArray();
    }
}

class DeleteUser
{
    public static function DeleteUser($root, array $args): array
    {
        $user = User::find($args['id']);
        $user->delete();
        return $user->toArray();
    }
}
