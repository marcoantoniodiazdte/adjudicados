<div class="row m-t-10">

    <div class="col-sm-8 col-md-6 col-lg-6">
        <div class="form-group form-float m-b-0">
            <div class="form-line {{ old('name') ? 'focused':'' }}">
                <input type="text" class="form-control m-t-5 " name="name"  value="{{  old('name') }}" maxlength="100" />
                <input type="hidden" class="form-control " name="clase" value="{{$clase_proyecto}}"  maxlength="100" />
                <label class="form-label m-t--5">Nombre</label>
            </div>
        </div>
    </div>

    <div class="col-sm-8 col-md-2 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select  class="form-control  btn-group bootstrap-select show-tick m-t-5" data-live-search="true"   value="{{  old('estado') }}" name="estado" id="estado">
                    <option value="" selected disabled>Elija Una Opción</option>
                    <option value="disponible">Disponible</option>
                    <option value="contrucion">Construcción</option>
                    <option value="contrato">Contrato</option>
                    <option value="vendida">Vendido</option>
                </select>
                <label class="form-label m-t--5">Estado</label>
            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                        data-live-search="true" name="estado_comercial" id="clase">
                    <option value="" selected disabled>Elija Una Opción</option>
                    <option value="venta">Venta</option>
                    <option value="alquiler">Alquiler</option>
                </select>
                <label class="form-label m-t--5">Estado Comercial</label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float m-b-0  m-t-5">
            <div class="form-line {{ old('precio_us') ? 'focused':'' }}">
                <input type="number" class="form-control " name="precio_us" value="{{ old('precio_us')}}" maxlength="100" />
                <label class="form-label  m-t--5">Precio USD</label>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float m-b-0  m-t-5">
            <div class="form-line {{ old('precio_rd') ? 'focused':'' }}" >
                <input type="number" class="form-control" name="precio_rd" value="{{ old('precio_rd')}}"  maxlength="100" />
                <label class="form-label  m-t--5">Precio DOP</label>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="mostrar_precio" id="clase">
                    <option value="us">USD</option>
                    <option value="do">DOP</option>
                </select>
                <label class="form-label m-t--5">Precio a Mostrar</label>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="tipo_oferta" id="clase">
                    <option value="exclusiva">Exclusiva</option>
                    <option value="normal">Normal</option>
                </select>
                <label class="form-label m-t--5">Tipo Oferta</label>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="form-group form-float">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true"  id="clase">
                    <option value="proyecto">Exclusiva</option>
                    <option value="propiedad">Propiedad</option>
                </select>
                <label class="form-label m-t--5">Nombre Plantillarta</label>

            </div>
        </div>
    </div>
    <div class="col-sm-4 col-md-12 col-lg-12">
        <div class="form-group form-float m-b-15">
            <label class="form-label">Descripción</label>
            <div class="form-line {{ old('descripcion') ? 'focused':'' }}">
                {{--<input type="text" class="form-control" name="descripcion" value="{{ old('descripcion')}}"  maxlength="100" />--}}
                <textarea rows="1" name="descripcion" id="annotations" class="form-control no-resize auto-growth" placeholder="Inserte Descripción">{{ old('descripcion')}}</textarea>


            </div>
        </div>
    </div>
</div>
<div class="row ">

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="form-group form-float m-b-0 ">
            <div class="form-line focused">
                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="provincia_id" id="provincia_id">
                    <option value="" selected disabled>Elija Una Opción</option>
                    @foreach($provincias as $provincia)
                    <option value="{{ $provincia->provincia_id }}">{{ Str::upper($provincia->provincia) }}</option>
                    @endforeach
                </select>
                <label class="form-label m-t--5">Provincia</label>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="form-group form-float m-b-0 ">
            <div class="form-line focused">

                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="municipio_id" id="municipio_id">

                </select>

                <label class="form-label m-t--5">Municipio</label>
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="form-group form-float m-b-0 ">
            <div class="form-line focused">

                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="sector_id" id="sector_id">

                </select>

                <label class="form-label m-t--5">Sector</label>
            </div>
        </div>
    </div>

</div>
<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group form-float m-b-0">
                <div class="form-line {{ old('direccion') ? 'focused':'' }}">
                    <input type="text" class="form-control" name="direccion" value="{{ old('direccion')}}"  maxlength="100" />
                    <label class="form-label">Dirección</label>
                </div>
            </div>
        </div>

    <div class="col-sm-12 col-md-12">
            <h2 class="card-inside-title">Tipo Propiedad</h2>
            <div class="demo-checkbox">

                @foreach($tipos_propiedades as $tipo_propiedad)
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group form-float m-b-0">
                            <input  type="checkbox" name="tipos_propiedad[]" id="{{ $tipo_propiedad->id }}" value="{{ $tipo_propiedad->id }}"/>
                            <label for="{{ $tipo_propiedad->id }}">{{ $tipo_propiedad->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    <div class="col-sm-12 col-md-12">
        <h2 class="card-inside-title">Comodidades</h2>
        <div class="demo-checkbox">

            @foreach($tipos_caracteristicas as $caracteristicas)
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-float m-b-0">
                        <input  type="checkbox" name="tipos_caracteristicas[]" id="{{ $caracteristicas->nombre_tipo . $caracteristicas->id }}" value="{{ $caracteristicas->id }}"/>
                        <label for="{{ $caracteristicas->nombre_tipo . $caracteristicas->id  }}">{{ $caracteristicas->nombre_tipo }}</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</div>

<div class="row">

    <div class="col-sm-12 col-md-12 col-lg-12">
        <h2 class="card-inside-title">Atributos Propiedad</h2>
        <div class="body table-responsive">
            <table id="atributos_propiedad" class="table">
                <thead>
                <tr>
                    <th style="width: 60%">
                        Tipo Atributo
                    </th>
                    <th style="width: 20%">
                        Detalle
                    </th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <tr id="atributos_propiedad_template">
                    <td>
                        <div class="form-group m-b-0">
                            <div class="form-line">
                                <select name="tipo_atributo[#index#][atributo_id]" id="atributos_propiedad_#index#_atributo_id" class="form-control ms select2_atributos" require>
                                    @foreach($tipos_atributos as $atributos)
                                        <option value="{{ $atributos->id }}">{{ $atributos->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="form-group m-b-0">
                            <div class="form-line">
                                <input type="text" name="tipo_atributo[#index#][valor]" id="atributos_propiedad_#index#_valor" class="form-control number text-right" value="" placeholder="Especifique" require />
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <a href="javascript:void(0);" id="atributos_propiedad_remove_current">
                            <i class="material-icons col-red">delete</i>
                        </a>
                    </td>
                </tr>
                <tr id="atributos_propiedad_noforms_template">
                    <td colspan="7" ></td>
                </tr>

                <tr id="atributos_propiedad_controls">
                    <td colspan="4">
                        <span id="atributos_propiedad_add"><a href="javascript:void(0);"><i class="material-icons col-blue" style="vertical-align: middle;">add</i>Añadir Atributo</a></span>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-sm-8 col-md-12">
        <h2 class="card-inside-title">Galeria Propiedad</h2>
        <div class="file-loading">
            <input id="garleria_propiedad" name="garleria_propiedad[]" class="file" type="file" data-preview-file-type="text" accept="image/*" multiple>
        </div>
    </div>
</div>









<div class="row">


    <div class="col-xs-12 align-center">
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Crear Propiedad</button>
    </div>


</div>

<span id="atributos_propiedad_pre" data-atributos='@json($tipos_atributos)' ></span>