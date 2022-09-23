<?php

namespace App\Policies;

use App\Models\StatusClinico;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Facades\UserPermission;

class StatusClinicoPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(User $user)
    {
        return UserPermission::isAuthorized('status.index');
    }

   
    public function view(User $user, StatusClinico $statusClinico)
    {
        return UserPermission::isAuthorized('status.show');
    }

    
    public function create(User $user)
    {
        return UserPermission::isAuthorized('status.create');
    }

    
    public function update(User $user, StatusClinico $statusClinico)
    {
        return UserPermission::isAuthorized('status.edit');
    }

    
    public function delete(User $user, StatusClinico $statusClinico)
    {
        return UserPermission::isAuthorized('status.destroy');
    }

    
    public function restore(User $user, StatusClinico $statusClinico)
    {
        //
    }

    
    public function forceDelete(User $user, StatusClinico $statusClinico)
    {
        //
    }
}
