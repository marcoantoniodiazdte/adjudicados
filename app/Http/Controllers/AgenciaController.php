<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class AgenciaController extends CompanyController
{

    public function index(Request $request,$tipo_company = 'agencia',$vista = 'crm.agencia.list')
    {
        return parent::index($request,$tipo_company,$vista); // TODO: Change the autogenerated stub
    }


    public function create($company_type = 'agencia',$vista = 'crm.agencia.create')
    {
        return parent::create($company_type ,$vista); // TODO: Change the autogenerated stub
    }


    public function edit(Company $company, $vista = 'crm.agencia.edit')
    {
        return parent::edit($company, $vista = 'crm.agencia.edit'); // TODO: Change the autogenerated stub
    }

}
