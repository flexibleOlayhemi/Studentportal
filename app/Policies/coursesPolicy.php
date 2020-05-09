<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class coursesPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
   
    public function createCourse(User $user){
        return in_array($user->email,[
            'lyhemi@gmail.com',
            
        ]);
    }
}
