<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Company extends Model
{
    use HasRoles;

    protected $fillable = ['codigo'];
    protected $guard_name = 'admin';



    public function admin(){
        return $this->hasOne('App\Admin','company_id')->withoutGlobalScopes();
    }


    public function roles()
    {
        return $this->hasMany('App\Role','company_id');
    }
    public function crearRole($propertiesArray){
        return $this->roles()->create(['guard_name' => 'admin', 'name' => $propertiesArray['name'],'description' => $propertiesArray['description']]);
    }
    public function saveRole($role){
        return $this->roles()->save($role);
    }


    public function modules(){
        return $this->belongsToMany('App\Module','company_module','company_id');
    }

    public function getModulosConPermisos(){
        return $this->modules()->with('permissions')->orderBy('name')->get();
    }

    public function propiedades(){
        return $this->hasMany('App\Propiedades','company_id');
    }

    public function tipos_caracteristicas(){
        return $this->hasMany('App\TiposCaracteristicas','company_id');
    }

    public function tipos_atributos(){
        return $this->hasMany(TiposAtributos::class,'company_id');
    }
    public function bancos(){
        return $this->belongsToMany('App\Banco')->withPivot('id','tipo_cuenta', 'tipo_moneda','numero_cuenta')->withTimestamps();
    }

    public function crearBanco($parametros){
        return $this->bancos()->attach($parametros->only('banco_id'),$parametros->only(['tipo_cuenta','tipo_moneda','numero_cuenta']));
    }
    public function actualizarBanco($request,$id_pivot){

        $banco = $this->buscarBanco($id_pivot);
        $banco->pivot->banco_id = (int)$request->input('banco_id');
        $banco->pivot->tipo_cuenta = $request->input('tipo_cuenta');
        $banco->pivot->tipo_moneda = $request->input('tipo_moneda');
        $banco->pivot->numero_cuenta = $request->input('numero_cuenta');
        return $banco->pivot->save();
    }

    public function buscarBanco($id){
        return $this->bancos()->wherePivot('id',$id)->first();
    }

    public function createAdministrador($arguments){
        return $this->admin()->create($arguments);
    }


    public static function info()
    {
        $code = Company::find(1)->codigo;
        $ch     = curl_init();
		$fields = http_build_query(['codigo' => $code]);
		curl_setopt($ch, CURLOPT_URL, 'http://roommeeting.dtehost.com/api/adjudicados/company');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Accept: application/json',
		    'authorization:sdf541gs6df51gsd1bsb16etb16teg1etr1ge61g' 
	    ));
	    curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);
		$output = curl_exec($ch);
		curl_close($ch);
		return json_decode($output)->company;
    }





}
