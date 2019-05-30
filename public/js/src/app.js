$(document).ready(function () {


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






});
