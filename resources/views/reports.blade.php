@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" type="text/css"
          href="/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
          href="/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
          href="/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
          href="/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">

    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/app-assets/css/components.css">
@endpush
@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <table
                        class="datatables-all-users-login hover datatables datatables-basic table table-striped"
                        style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo electrónico</th>
                            <th>Fecha de ingreso</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script src="/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="/app-assets/js/moment.js"></script>
    <script src="/app-assets/js/moment-locale.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
@endpush

@push('scripts')
    <script>
        var day1 = null;
        const loadTable = function () {
            setTimeout(() => {
                    let table = $('.datatables-all-users-login').DataTable({

                        "processing": true,
                        "lengthMenu": [10, 30, 50, 75, 100, 1000],
                        // "scrollY": 800,
                        "scrollX": true,
                        // "scrollCollapse": true,
                        // "paging": false,
                        // "fixedColumns": {
                        //     "leftColumns": 2,
                        // },
                        "pageLength": 20,
                        "autoWidth": false,
                        "columnDefs": [
                            {"width": '10%', targets: 0},
                            {
                                "searchable": false,
                                "orderable": false,
                                "targets": 0
                            }
                        ],

                        "dom":
                            '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                        // "displayLength": 7,
                        "buttons": [
                            {
                                "extend": 'collection',
                                "className": 'btn btn-outline-secondary theme-light dropdown-toggle mr-2',
                                "text": feather.icons['filter'].toSvg({class: 'font-small-4 mr-50'}) + 'Filtrar por día',
                                "buttons": [
                                    {
                                        "text": 'Día 1',
                                        "className": 'dropdown-item day1',
                                        "attr":  {
                                            "id": 'day1',
                                        },
                                        "action": function (e, dt, node, conf) {
                                            day1 = 1
                                            console.log(day1);
                                            loadTable();
                                        }
                                    },
                                    // {
                                    //     "text": 'Día 2',
                                    //     "className": 'dropdown-item',
                                    //     "action": function (e, dt, node, conf) {
                                    //         console.log(day1);
                                    //     }
                                    // },
                                ]
                            },
                            {
                                "extend": 'collection',
                                "className": 'btn btn-outline-secondary theme-light dropdown-toggle mr-2',
                                "text": feather.icons['share'].toSvg({class: 'font-small-4 mr-50'}) + 'Exportar',
                                "buttons": [
                                    {
                                        "extend": 'print',
                                        "text": feather.icons['printer'].toSvg({class: 'font-small-4 mr-50'}) + 'Imprimir',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2]},
                                        "customize": function (win) {
                                            console.log(window.url, window.logo_ligth)
                                            $(win.document.body)
                                                .css('font-size', '10pt')
                                                .prepend(
                                                    `<div align='center' style="text-align: center;top:50%;"><img width="550" src="${window.url}${window.logo_ligth}" style=" opacity: 12%;" /></div>`
                                                );

                                            $(win.document.body).find('table')
                                                .addClass('compact')
                                                .css('font-size', 'inherit');
                                        }
                                    },
                                    {
                                        "extend": 'csv',
                                        "text": feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) + 'Csv',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]}
                                    },
                                    {
                                        "extend": 'excel',
                                        "text": feather.icons['file'].toSvg({class: 'font-small-4 mr-50'}) + 'Excel',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]}
                                    },
                                    {
                                        "extend": 'pdf',
                                        "text": feather.icons['clipboard'].toSvg({class: 'font-small-4 mr-50'}) + 'Pdf',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]},
                                        "orientation": 'portrait',
                                    },
                                    {
                                        "extend": 'copy',
                                        "text": feather.icons['copy'].toSvg({class: 'font-small-4 mr-50'}) + 'Copiar',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]}
                                    }
                                ],

                            },
                        ],
                        // "order": [[1, 'asc']],

                        "ajax": {
                            url: "{{route('get.user.login')}}",
                            data: {
                                day1: day1,
                            }
                        },
                        "columns": [
                            {"data": "index"},
                            {
                                render: function (data, type, JsonResultRow, meta) {
                                    if (JsonResultRow.name === null) {
                                        return '<span class="label label-danger text-center" style="color:#F05E7D !important">Ningún valor por defecto</span>'
                                    } else {
                                        return `<span class="label text-center font-weight-bold">${JsonResultRow.name}</span>`;
                                    }
                                },
                            },
                            {
                                render: function (data, type, JsonResultRow, meta) {
                                    if (JsonResultRow.email === null) {
                                        return '<span class="label label-danger text-center" style="color:#F05E7D !important">Ningún valor por defecto</span>'
                                    } else {
                                        return `<span class="label text-center font-weight-bold">${JsonResultRow.email}</span>`;
                                    }
                                },
                            },
                            {
                                render: function (data, type, JsonResultRow, meta) {
                                    if (JsonResultRow.start_date === null) {
                                        return '<span class="label label-danger text-center" style="color:#F05E7D !important">Ningún valor por defecto</span>'
                                    } else {
                                        return `<span class="label text-center font-weight-bold">${moment(JsonResultRow.start_date).locale('es').format('MMMM Do YYYY, h:mm:ss a')}</span>`;
                                    }
                                },
                            },
                        ],


                        "language": {
                            "sProcessing": "{{__('Procesando')}}",
                            "sLengthMenu": "{{__('Mostrar')}} _MENU_ {{__('registros')}}",
                            "sZeroRecords": "No se encontraron resultados",
                            "sEmptyTable": "{{__('Ningún dato en la tabla')}}",
                            "sInfo": "{{__('Mostrando registros') }} _START_ {{__('de')}} _END_ {{__('total de')}} _TOTAL_ {{__('registros')}}",
                            "sInfoEmpty": "{{ __('mostrando_registros_del_cero') }}",
                            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sSearch": "{{__('Buscar')}}:",
                            "sUrl": "",
                            "sInfoThousands": ",",
                            "sLoadingRecords": "{{__('cargando')}}",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "{{__('Siguiente')}}",
                                "sPrevious": "{{__('Anterior')}}"
                            },
                            "oAria": {
                                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            }
                        },

                    });
                    let text = 'Usuarios Autenticados'
                    $('div.head-label').html(`<h6 class="mb-0">${text}</h6>`);
                    table.on('order.dt search.dt', function () {
                        table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                            cell.innerHTML = i + 1;
                        });
                    }).draw();

                }
                , 1000);
        };
        // $(".day1").on('click', function () {
        //     alert('hola');
        //     day1 = $(this).attr('attrDia1');
        //     console.log(day1);
        //     loadTable();
        // });
        loadTable();


    </script>
@endpush
