<?php

namespace App;

use App\Traits\OwnedByCompany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use OwnedByCompany;

    protected $guard_name = 'admin';

    protected $table = 'admins';

    protected $fillable = [
        'nombres', 'apellidos', 'telefono_principal',
        'email', 'password','company_id', 'role', 'notificacion_visita'
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}