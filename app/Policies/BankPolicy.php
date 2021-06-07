<?php

namespace App\Policies;

use App\User;
use App\Bank;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Response;

class BankPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any banks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
         return in_array($user->role_id,[1,2]);

    }

    /**
     * Determine whether the user can view the bank.
     *
     * @param  \App\User  $user
     * @param  \App\Bank  $bank
     * @return mixed
     */
    public function view(User $user, Bank $bank)
    {

    }

    /**
     * Determine whether the user can create banks.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the bank.
     *
     * @param  \App\User  $user
     * @param  \App\Bank  $bank
     * @return mixed
     */
    public function update(User $user, Bank $bank)
    {
        //
    }

    /**
     * Determine whether the user can delete the bank.
     *
     * @param  \App\User  $user
     * @param  \App\Bank  $bank
     * @return mixed
     */
    public function delete(User $user, Bank $bank)
    {
        //
    }

    /**
     * Determine whether the user can restore the bank.
     *
     * @param  \App\User  $user
     * @param  \App\Bank  $bank
     * @return mixed
     */
    public function restore(User $user, Bank $bank)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the bank.
     *
     * @param  \App\User  $user
     * @param  \App\Bank  $bank
     * @return mixed
     */
    public function forceDelete(User $user, Bank $bank)
    {
        //
    }
}
