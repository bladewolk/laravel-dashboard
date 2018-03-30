<?php

namespace App;

use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @param $roleID
     * @return Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function hasRole($roleID)
    {
        return $this->roles()
            ->where('id', '<=', $roleID)
            ->exists();
    }

    public function hasRoles(array $roles)
    {
        return $this->roles()->whereIn('name', $roles)
            ->exists();
    }
}
