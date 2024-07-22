<?php

use App\Models\Post;
use GraphQL\Type\Definition\Type;

$postMutations = [
    'addPost' => [
        'type' => $postType,
        'args' => [
            'title' => Type::nonNull(Type::string()),
            'content' => Type::nonNull(Type::string()),
            'user_id' => Type::nonNull(Type::int()),
        ],
        'resolve' => function ($root, $args) {
            $post = new Post([
                'title' => $args['title'],
                'content' => $args['content'],
                'user_id' => $args['user_id'],
            ]);

            $post->save();

            return $post->toArray();
        }
    ]
];