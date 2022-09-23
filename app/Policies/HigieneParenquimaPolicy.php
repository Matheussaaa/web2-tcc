<?php

namespace App\Policies;

use App\Models\HigieneParenquima;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Facades\UserPermission;

class HigieneParenquimaPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(User $user)
    {
        return UserPermission::isAuthorized('higienes.index');
    }

    
    public function view(User $user, HigieneParenquima $higieneParenquima)
    {
        return UserPermission::isAuthorized('higienes.show');
    }

    
    public function create(User $user)
    {
        return UserPermission::isAuthorized('higienes.create');
    }

    
    public function update(User $user, HigieneParenquima $higieneParenquima)
    {
        return UserPermission::isAuthorized('higienes.edit');
    }

   
    public function delete(User $user, HigieneParenquima $higieneParenquima)
    {
        return UserPermission::isAuthorized('higienes.destroy');
    }

    
    public function restore(User $user, HigieneParenquima $higieneParenquima)
    {
        //
    }

   
    public function forceDelete(User $user, HigieneParenquima $higieneParenquima)
    {
        //
    }
}
