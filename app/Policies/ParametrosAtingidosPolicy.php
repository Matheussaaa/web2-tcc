<?php

namespace App\Policies;

use App\Models\ParametrosAtingidos;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Facades\UserPermission;

class ParametrosAtingidosPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(User $user)
    {
        return UserPermission::isAuthorized('parametros.index');
    }

    
    public function view(User $user, ParametrosAtingidos $parametrosAtingidos)
    {
        return UserPermission::isAuthorized('parametros.show');
    }

  
    public function create(User $user)
    {
        return UserPermission::isAuthorized('parametros.create');
    }

    
    public function update(User $user, ParametrosAtingidos $parametrosAtingidos)
    {
        return UserPermission::isAuthorized('parametros.edit');
    }

  
    public function delete(User $user, ParametrosAtingidos $parametrosAtingidos)
    {
        return UserPermission::isAuthorized('parametros.destroy');
    }

    
    public function restore(User $user, ParametrosAtingidos $parametrosAtingidos)
    {
        //
    }

    
    public function forceDelete(User $user, ParametrosAtingidos $parametrosAtingidos)
    {
        //
    }
}
