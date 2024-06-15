<?php

use GraphQL\Type\Definition\ObjectType;

require('inputs/UserInputs.php');
require('resolvers/UserResolver.php');
require('mutations/UserMutations.php');

$mutations = array();
$mutations += $userMutations;

$rootMutation = new ObjectType([
    'name' => 'Mutation',
    'fields' => $mutations
]);