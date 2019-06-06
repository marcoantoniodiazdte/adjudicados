$(document).ready(function () {
    if($('#proyectos_table').size() > 0){

        $('#proyectos_table').DataTable(
            $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                ajax: '/admin/proyectos',
                type: 'GET',
                columns: [
                    {
                        data: function (data) {
                            return '<input type="checkbox" id="check-' + data.id + '" class="filled-in chk-col-teal" name="check[]" value="' + data.id + '">' +
                                '<label class="m-b-0" for="check-' + data.id + '"></label>';
                        },
                        orderable: false,
                        searchable: false
                    },
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    {
                        data: function (data) {
                            var buttons = '<div class="btn-group">';

                            if (data.view === true) {
                                buttons += '<a href="/admin/proyectos/' + data.slug + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                                    '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';

                            }


                            if (data.edit === true) {
                                buttons +=
                                    '<a href="/admin/proyectos/' + data.slug + '/edit" target="_blank" class="btn btn-warning btn-xs waves-effect edit-brand" ' +
                                    'data-toggle="tooltip" data-original-title="Editar"><i class="material-icons">edit</i></a>'
                                ;
                            }

                            buttons += '</div>';
                            return buttons;
                        },
                        orderable: false,
                        searchable: false
                    }

                ],
            }
        ));
    };

    //autosize($('textarea.auto-growth'));
    if($('#inmueble_new_form').size() > 0){


        //Provincias -- trae todos los municipios por provincia
        $('#provincia_id').on('change',function () {

            $municipios = $('#municipio_id');
            $('#sector_id').empty();
            $('#sector_id').selectpicker('refresh');


            $.get(`/admin/provincia/${$(this).find('option:selected').val()}/municipios`)
              .done(function(objResponse){
                  if ( objResponse.error )
                      $.InmobiliariaSoft.methods.sweetNotification($.Language.message.title.warning, objResponse.message, 'warning', 1000);
                  else
                      $.InmobiliariaSoft.methods.optionTemplate($municipios, objResponse.data,null,'municipio_id','municipio');
              });
        });

        //Municipio -- trae todos los sectores por municipio
        $('#municipio_id').on('change',function () {

            $sectores = $('#sector_id');

            $.get(`/admin/municipio/${$(this).find('option:selected').val()}/sectores`)
              .done(function(objResponse){
                  if ( objResponse.error )
                      $.InmobiliariaSoft.methods.sweetNotification('warning', obj.message, 'warning', 1000);
                  else
                      $.InmobiliariaSoft.methods.optionTemplate($sectores, objResponse.data,null,'sector_id','sector');
              });
        });


    }





});