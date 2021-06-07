<?php

namespace App\Policies;

use App\User;
use App\Donar;
use Illuminate\Auth\Access\HandlesAuthorization;

class DonarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any donars.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
          return in_array($user->role_id,[1,2,3]);

    }

    /**
     * Determine whether the user can view the donar.
     *
     * @param  \App\User  $user
     * @param  \App\Donar  $donar
     * @return mixed
     */
    public function view(User $user, Donar $donar)
    {
        //
    }

    /**
     * Determine whether the user can create donars.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the donar.
     *
     * @param  \App\User  $user
     * @param  \App\Donar  $donar
     * @return mixed
     */
    public function update(User $user, Donar $donar)
    {
        //
    }

    /**
     * Determine whether the user can delete the donar.
     *
     * @param  \App\User  $user
     * @param  \App\Donar  $donar
     * @return mixed
     */
    public function delete(User $user, Donar $donar)
    {
        //
    }

    /**
     * Determine whether the user can restore the donar.
     *
     * @param  \App\User  $user
     * @param  \App\Donar  $donar
     * @return mixed
     */
    public function restore(User $user, Donar $donar)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the donar.
     *
     * @param  \App\User  $user
     * @param  \App\Donar  $donar
     * @return mixed
     */
    public function forceDelete(User $user, Donar $donar)
    {
        //
    }
}
