<?php

namespace App;

use App\Traits\OwnedByCompany;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use OwnedByCompany;

    protected $fillable = ['name','guard_name','tenant_id','description','active'];

    public function setGuardNameAttribute($value)
    {
        $this->attributes['guard_name'] = 'admin';
    }

    public function getAdminsWithRole($role){

        return $this->company->admin->Role($role)->get();
    }

}
