<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscriberPolicy
{
    use HandlesAuthorization;

    public function __construct(){}

    public function viewAny($user)
    {
        return \Gate::any(['viewPage'], $user);
    }

    public function view($user, $post)
    {
        return \Gate::any(['viewPage'], $user, $post);
    }
}
