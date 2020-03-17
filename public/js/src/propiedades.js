$(document).ready(function () {
    if($('#propiedades_table').size() > 0){

        $('#propiedades_table').DataTable(
            $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                ajax: '/admin/propiedades',
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
                                buttons += '<a href="/admin/propiedades/' + data.id + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                                    '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';

                            }


                            if (data.edit === true) {
                                buttons +=
                                    '<a href="/admin/propiedades/' + data.id + '/edit" target="_blank" class="btn btn-warning btn-xs waves-effect edit-brand" ' +
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
    if($('#inmobiliaria_new_form').size() > 0){

        //Textarea auto growth


        var inmobiliaria_new_form = $('#inmobiliaria_new_form').show();
        var loanding_inmobiliaria_new_form = $('#loanding_inmobiliaria_new_form');


        inmobiliaria_new_form.steps({
            headerTag: 'h3',
            bodyTag: 'section',
            transitionEffect: 'slideLeft',
            labels: {
                next: 'Siguiente',
                previous: 'Anterior',
                finish: 'Finalizar',
                loading: 'Cargando ...',
                cancel: 'Cancelar'
            },
            onFinished: function (event, currentIndex) {
                //inmobiliaria_new_form.hide();

                event.preventDefault();
                /*console.log(inmobiliaria_new_form);
                return false;
                loanding_inmobiliaria_new_form.show();*/
                $.ajax({
                    url: $('#inmobiliaria_new_form').attr('action'),
                    dataType: "application/json",
                    data:inmobiliaria_new_form.serialize(),
                    type:"POST",
                    success:function (response) {



                    },
                    error: function(errorResponse) {
                    }
                })


            }
        });



        //Multi-select
        $('#modulos').multiSelect({ selectableOptgroup: true });

        //Multi-select
        $('#roles_administrador').multiSelect({ selectableOptgroup: true });
    }





});