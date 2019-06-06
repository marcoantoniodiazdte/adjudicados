$(document).ready(function () {
    //autosize($('textarea.auto-growth'));
    if($('#inmueble_form').size() > 0){

        $('.currency').inputmask('99,99 $', { placeholder: '__,__ $' });


        autosize($('textarea.auto-growth'));

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

        if($('#atributos_propiedad').size() > 0){
            $('#atributos_propiedad').sheepIt({
                separator: '',
                allowRemoveLast: false,
                allowRemoveCurrent: true,
                allowRemoveAll: false,
                allowAdd: true,
                allowAddN: false,
                minFormsCount: 1,
                iniFormsCount: 1,
                afterAdd: function(source, clone) {
                    var data = source.getOption('data'),
                      index = clone.getPosition(),
                      obj = (data[index - 1] !== void 0) ? data[index - 1] : { id: '-1', text: 'Choose An Option' },
                      newOption = new Option(obj.nombre, obj.id, false, false);
                }
            });
        }



    }


});