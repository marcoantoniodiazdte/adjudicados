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


