<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VentiladorMec;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Facades\UserPermission;

class VentiladorMecPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return UserPermission::isAuthorized('vents.index');
    }

 
    public function view(User $user, VentiladorMec $ventiladorMec)
    {
        return UserPermission::isAuthorized('vents.show');
    }

    
    public function create(User $user)
    {
        return UserPermission::isAuthorized('vents.create');
    }

    
    public function update(User $user, VentiladorMec $ventiladorMec)
    {
        return UserPermission::isAuthorized('vents.edit');
    }

   
    public function delete(User $user, VentiladorMec $ventiladorMec)
    {
        return UserPermission::isAuthorized('vents.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VentiladorMec  $ventiladorMec
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, VentiladorMec $ventiladorMec)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VentiladorMec  $ventiladorMec
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, VentiladorMec $ventiladorMec)
    {
        //
    }
}
