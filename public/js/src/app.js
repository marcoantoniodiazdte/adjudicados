
if (typeof jQuery === "undefined") {
    throw new Error("jQuery plugins need to be before this file");
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$.InmobiliariaSoft = {};

$.InmobiliariaSoft.methods = {
    documentTitle:function(){
        return  'Inmo - RD';
    },

    notification: function (message, type) {
        var icon = '';
        switch (type) {
            case 'success':
                icon = '<i class="material-icons font-16">check_circle</i> ';
                break;
            case 'danger':
                icon = '<i class="material-icons font-16">cancel</i> ';
                break;
            case 'warning':
                icon = '<i class="material-icons font-16">warning</i> ';
                break;
            case 'info':
            default:
                icon = '<i class="material-icons font-16">info</i> ';
                type = 'info';
        }

        $.notify(icon + message, { "type": type });
    },
    sweetNotification: function (title, text, type, timer) {
        switch (type) {
            case 'success':
            case 'info':
            case 'warning':
            case 'error':
                break;
            case 'danger':
                type = 'error';
                break;
            default:
                type = 'info';
        }

        var obj = { title: title, text: text, type: type };
        if ( timer !== undefined ) { obj.timer = timer; }

        swal(obj);
    },
    preventExit: function (e) {
        var message = $.Language.message.exitPage,
          e = e || window.event;
        // For IE and Firefox
        if (e) {
            e.returnValue = message;
        }

        // For Safari
        return message;
    },
    optionTemplate: function ($select, items, defaultValue,keyId,keyValue) {
        var html = `<option value="" disabled selected>Elija una opción</option>`;

        if ( items.length > 0 ) {
            $.each(items, function (key, value) {
                html += `<option value="${value[keyId]}">${value[keyValue]}</option>`;
            });
            $select.empty();
            $select.append(html);
            $select.val(defaultValue);
            $select.selectpicker('refresh');
        }
    },



}



$.InmobiliariaSoft.options = {
    URL: window.location.protocol + "//" + window.location.hostname + ((window.location.port != '') ? ":" + window.location.port : ""),
    pathArray: window.location.pathname.split('/'),
    DATATABLE_TEMPLATE: {
        language: {
            "sProcessing":     "<div class='preloader pl-size-xs'><div class='spinner-layer pl-light-blue'><div class='circle-clipper left'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div></div>",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando _START_ al _END_ de _TOTAL_",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "<div class='preloader pl-size-xs'><div class='spinner-layer pl-light-blue'><div class='circle-clipper left'><div class='circle'></div></div><div class='circle-clipper right'><div class='circle'></div></div></div></div>",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Ultimo",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        processing: true,
        searchDelay: 1200,
        bDestroy: true,

        serverSide: true,
        responsive: true,
        pageLength: 25,
        ajax: {
            async: false,
            type: 'POST'
        },
        columnDefs: [ {
            orderable: false,
            width: "1px",

            targets: 0
        } ],
        order: [ [1, 'desc'] ],
        dom: "<'row'<'col-sm-4 m-b-0 align-center-xs'B><'col-sm-4 m-b-0 align-center'l><'col-sm-4 m-b-0'f>><'row'<'col-sm-6 m-b-0'i><'col-sm-6 m-b-0'p>>rt<'row DTTTFooter'<'col-sm-6 m-b-0'i><'col-sm-6 m-b-0'p>>",
        buttons: [
            {
                extend: "copy",
                text: "<i class='material-icons' data-toggle='tooltip' data-original-title='Copiar'>content_copy</i>",
                className: "btn-sm",
                exportOptions: {
                    columns: '.copy,.exportar'
                }
            },
            {
                extend: "csv",
                title:   $.InmobiliariaSoft.methods.documentTitle(),
                text: "<i class='material-icons' data-toggle='tooltip' data-original-title='CSV'>attachment</i>",
                className: "btn-sm",
                exportOptions: {
                    columns: '.csv,.exportar'
                }
            },
            {
                extend: "excel",
                title:  $.InmobiliariaSoft.methods.documentTitle(),
                text: "<i class='material-icons' data-toggle='tooltip' data-original-title='Excel'>blur_linear</i>",
                className: "btn-sm",
                exportOptions: {
                    columns: '.excel,.exportar'
                }
            },
            {
                extend: "pdfHtml5",
                title:  $.InmobiliariaSoft.methods.documentTitle(),
                text: "<i class='material-icons' data-toggle='tooltip' data-original-title='PDF'>picture_as_pdf</i>",
                className: "btn-sm",
                exportOptions: {
                    columns: '.pdf,.exportar'
                }
            },
            {
                extend: "print",
                title: $.InmobiliariaSoft.methods.documentTitle(),
                text: "<i class='material-icons' data-toggle='tooltip' data-original-title='Imprimir'>print</i>",
                className: "btn-sm",
                exportOptions: {
                    columns: '.print,.exportar'
                }
            }
        ]

    }

}


$.InmobiliariaSoft.helpers = {
    hexToRgb: function (hexCode) {
        var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
        var matches = patt.exec(hexCode);
        var rgb = "rgb(" + parseInt(matches[1], 16) + "," + parseInt(matches[2], 16) + "," + parseInt(matches[3], 16) + ")";

        return rgb;
    },
    hexToRgba: function (hexCode, opacity) {
        var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
        var matches = patt.exec(hexCode);
        var rgb = "rgba(" + parseInt(matches[1], 16) + "," + parseInt(matches[2], 16) + "," + parseInt(matches[3], 16) + "," + opacity + ")";

        return rgb;
    },
    formmatterCurrency: function (number) {
        return accounting.formatMoney(number, $.accounting.regions[$.Language.region].currency);
    },
    formmatterNumber: function (number) {
        return accounting.formatMoney(number, $.accounting.regions[$.Language.region].number);
    },
    shortName: function (first_name, last_name) {
        return $.LeonSoft.methods.ucwords(`${first_name} ${last_name}`);
    },
    niceDate: function (value, format="DD/MMM/YYYY") {
        if (!value)
            return '';

        var date = moment(value);

        return $.LeonSoft.methods.ucwords(date.locale($.Language.lang).format(format).replace('.', ''));
    },
    niceDateTime:function (value) {
        if (!value)
            return '';

        var date = moment(value);

        return $.LeonSoft.methods.ucwords(date.locale($.Language.lang).format('DD/MMM/YYYY hh:mm A').replace('.', ''));
    },
    niceDuration: function (value) {
        var fromm = moment.utc();
        var tom = moment.utc(value);
        var d = moment.duration(tom.diff(fromm, 'seconds'), 'seconds');

        if (d.asHours() > 5)
            return d.locale($.Language.lang).humanize().toUpperCase()

        if (d.asMinutes() >= 60)
            return moment.utc(tom.diff(fromm)).format('H [H] m [M]')

        return moment.utc(tom.diff(fromm)).format('m [M] s [S]')
    }

};




$(function () {
    /* Styles for validation */
    if ( typeof ($.fn.validate) !== 'undefined' ) {
        validateMaterial = function($form) {
            $form.validate({
                highlight: function (input) {
                    $(input).closest('.form-line').addClass('focused error');
                },
                unhighlight: function (input) {
                    $(input).closest('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).closest('.form-group,.input-group').append(error);
                }
            });
        };

        validateMaterial($('form.form-validate'));
    }

    /* Avatar inputs code */
    $('.avatar a.avatar-edit').on('click', function() {
        $(this).siblings('input.avatar-input').click();
    });

    $('.avatar input.avatar-input').on('change', function() {
        var $this = $(this);

        if ( $this.val() != '' ) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $this.parent('.avatar').css('background-image', 'url(' + e.target.result + ')');
            };

            reader.readAsDataURL($this[0].files[0]);
        }
    });
    /* Avatar inputs code - END */

    /* Side bar highlight */
    var $item = $('.sidebar li[data-controller="' + window.location.pathname.split( '/' )[1] + '"]');
    $item.addClass('active').parents('li').find('a.menu-toggle').click();
    /* Side bar highlight - END */

    /* Delete button action code - END */

    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
    });

    $('body').popover({
        selector: '[data-rel=popover]',
        html: true,
        container: 'body',
        trigger: 'click hover',
        delay: { show: 50, hide: 100 }
    });

    /* Ajax popover code */
    $(document).on('mouseover', 'a[data-rel="ajax_popover"]', function () {
        var $element = $(this),
          $data = $element.data();
        // set a loader image, so the user knows we're doing something
        /*$data.content = '<div class="preloader pl-size-sm">\n' +
            '                                    <div class="spinner-layer pl-cyan">\n' +
            '                                        <div class="circle-clipper left">\n' +
            '                                            <div class="circle"></div>\n' +
            '                                        </div>\n' +
            '                                        <div class="circle-clipper right">\n' +
            '                                            <div class="circle"></div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n' +
            '                                </div>';
        $element.popover({
            html: true,
            trigger: 'hover'
        }).popover('show');*/
        // retrieve the real content for this popover, from location set in data-href
        $.get($data.url, function (response) {
            // set the ajax-content as content for the popover
            $data.content = response;
            // replace the popover
            //$element.popover('destroy');
            $element.popover({
                html: true,
                container: 'body',
                trigger: 'hover'
            });
            // check that we're still hovering over the preview, and if so show the popover
            if ($element.is(':hover')) {
                $element.popover('show');
            }
            $element.attr('data-rel', 'popover');
        });

    });
    /* Ajax popover code - END */

    /* Check all checkbox from table code */
    $('#check-all').change(function () {
        $(this).closest('table')
          .find('tbody tr td input.chk-col-orange')
          .not(':disabled')
          .prop('checked', $(this).is(':checked'));
    });
    /* Check all checkbox from table code - END */

    $(document).on('change', 'table.table tbody tr td input.chk-col-orange', function () {
        var checked = $(this).closest('tbody').find('input.chk-col-orange').not(':checked').length > 0;
        $('#check-all').prop('checked', !checked);
    });

});