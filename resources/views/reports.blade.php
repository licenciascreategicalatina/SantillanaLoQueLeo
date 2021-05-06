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

        <div class="row justify-content-center">
            <div class="col-12 justify-content-center">
                <h1 class="display-3 text-center">Reportes</h1>
            </div>
        </div>

        <div id="user-online">
            <user-online/>
        </div>

        <div class="row pt-2">
            <div class="col-12 col-md-2 col-lg-2"></div>
            <div class="col-12 col-md-8 col-lg-8">
                <div class="card p-2">
                    <h6 style="margin-bottom: -2rem;">Usuarios activos</h6>
                    <table
                        class="datatables-all-users-online hover datatables datatables-basic table table-striped"
                        style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo electrónico</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2"></div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group float-right">
                    <label for="selectLarge">Filtrar por día</label>
                    <select class="form-control form-control-lg mb-1" id="selectDay">
                        <option selected>Sin día</option>
                        <option value="1">Día 1</option>
                        <option value="2">Día 2</option>
                        <option value="3">Día 3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card p-2">
                    <h6 style="margin-bottom: -2rem;">Usuarios autenticados</h6>
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
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card p-2">
                    <h6 style="margin-bottom: -2rem;">Libros seleccionados</h6>
                    <table
                        class="datatables-all-books-selected hover datatables datatables-basic table table-striped"
                        style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo electrónico</th>
                            <th>Libro</th>
                            <th>Portada</th>
                            <th>Fecha</th>
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

        /*=============================================
           TABLA CON LOS USUARIOS AUTENTICADOS
        =============================================*/
        var userOnline = null;
        const loadTableUserOnline = function () {
            if (userOnline !== null) {
                userOnline.destroy();
            }
            setTimeout(() => {
                userOnline = $('.datatables-all-users-online').DataTable({
                    "processing": true,
                    "lengthMenu": [10, 30, 50, 75, 100, 1000],
                    "scrollX": true,
                    "pageLength": 10,
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
                    "buttons": [
                        {
                            "extend": 'collection',
                            "className": 'btn btn-outline-secondary theme-light dropdown-toggle mr-2',
                            "text": feather.icons['share'].toSvg({class: 'font-small-4 mr-50'}) + 'Exportar',
                            "buttons": [
                                {
                                    "title": 'Usuarios Online',
                                    "extend": 'print',
                                    "text": feather.icons['printer'].toSvg({class: 'font-small-4 mr-50'}) + 'Imprimir',
                                    "className": 'dropdown-item',
                                    "exportOptions": {columns: [0, 1, 2]},
                                },
                                {
                                    "title": 'Usuarios Online',
                                    "extend": 'csv',
                                    "text": feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) + 'Csv',
                                    "className": 'dropdown-item',
                                    "exportOptions": {columns: [0, 1, 2]}
                                },
                                {
                                    "title": 'Usuarios Online',
                                    "extend": 'excel',
                                    "text": feather.icons['file'].toSvg({class: 'font-small-4 mr-50'}) + 'Excel',
                                    "className": 'dropdown-item',
                                    "exportOptions": {columns: [0, 1, 2]}
                                },
                                {
                                    "extend": 'pdf',
                                    "title": 'Usuarios Online',
                                    "text": feather.icons['clipboard'].toSvg({class: 'font-small-4 mr-50'}) + 'Pdf',
                                    "className": 'dropdown-item',
                                    "exportOptions": {columns: [0, 1, 2]},
                                    "orientation": 'portrait',
                                },
                                {
                                    "title": 'Usuarios Online',
                                    "extend": 'copy',
                                    "text": feather.icons['copy'].toSvg({class: 'font-small-4 mr-50'}) + 'Copiar',
                                    "className": 'dropdown-item',
                                    "exportOptions": {columns: [0, 1, 2]}
                                }
                            ],

                        },
                    ],

                    "ajax": {
                        url: "{{route('user.online')}}",
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
                                if (JsonResultRow.estado === 0) {
                                    return '<span class="badge badge-pill badge-light-danger mr-1">Desconectado</span>'
                                } else {
                                    return '<span class="badge badge-pill badge-light-success mr-1">Online</span>'
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
                        "sInfoEmpty": "No hay registros",
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

                userOnline.on('order.dt search.dt', function () {
                    userOnline.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            }
            , 1000);
        };

        //var day1 = null;
        var day1 = '3';
        /*=============================================
           TABLA CON LOS LIBROS SELECCIONADOS
        =============================================*/
        var tableBooks = null;
        const loadTableBooksSelected = function () {
            if (tableBooks !== null) {
                tableBooks.destroy();
            }
            setTimeout(() => {
                    tableBooks = $('.datatables-all-books-selected').DataTable({

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
                                "text": feather.icons['share'].toSvg({class: 'font-small-4 mr-50'}) + 'Exportar',
                                "buttons": [
                                    {
                                        "title": 'Libros seleccionados',
                                        "extend": 'print',
                                        "text": feather.icons['printer'].toSvg({class: 'font-small-4 mr-50'}) + 'Imprimir',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 4]},
                                        // "customize": function (win) {
                                        //     console.log(window.url, window.logo_ligth)
                                        //     $(win.document.body)
                                        //         .css('font-size', '10pt')
                                        //         .prepend(
                                        //             `<div align='center' style="text-align: center;top:50%;"><img width="550" src="${window.url}${window.logo_ligth}" style=" opacity: 12%;" /></div>`
                                        //         );
                                        //
                                        //     $(win.document.body).find('table')
                                        //         .addClass('compact')
                                        //         .css('font-size', 'inherit');
                                        // }
                                    },
                                    {
                                        "title": 'Libros seleccionados',
                                        "extend": 'csv',
                                        "text": feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) + 'Csv',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3, 5]}
                                    },
                                    {
                                        "title": 'Libros seleccionados',
                                        "extend": 'excel',
                                        "text": feather.icons['file'].toSvg({class: 'font-small-4 mr-50'}) + 'Excel',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3, 5]}
                                    },
                                    {
                                        "extend": 'pdf',
                                        "title": 'Libros seleccionados',
                                        "text": feather.icons['clipboard'].toSvg({class: 'font-small-4 mr-50'}) + 'Pdf',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3, 5]},
                                        "orientation": 'portrait',
                                    },
                                    {
                                        "title": 'Libros seleccionados',
                                        "extend": 'copy',
                                        "text": feather.icons['copy'].toSvg({class: 'font-small-4 mr-50'}) + 'Copiar',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3, 5]}
                                    }
                                ],

                            },
                        ],
                        // "order": [[1, 'asc']],

                        "ajax": {
                            url: "{{route('get.books.selected')}}",
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
                                    if (JsonResultRow.book === null) {
                                        return '<span class="label label-danger text-center" style="color:#F05E7D !important">Ningún valor por defecto</span>'
                                    } else {
                                        return `<span class="label text-center font-weight-bold">${JsonResultRow.book}</span>`;
                                    }
                                },
                            },
                            {
                                render: function (data, type, JsonResultRow, meta) {
                                    if (JsonResultRow.image === null) {
                                        return '<span class="label label-danger text-center" style="color:#F05E7D !important">Ningún valor por defecto</span>'
                                    } else {
                                        return `<img width="60" src="${JsonResultRow.image}">`;
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
                            "sInfoEmpty": "No hay registros",
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
                    // let textBook = 'Libros seleccionados'
                    // $('div.head-label').html(`<h6 class="mb-0">${textBook}</h6>`);
                    tableBooks.on('order.dt search.dt', function () {
                        tableBooks.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
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

        /*=============================================
           TABLA CON LOS USUARIOS LOGEADOS
        =============================================*/
        var table = null;
        const loadTable = function () {
            if (table !== null) {
                table.destroy();
            }
            setTimeout(() => {
                    table = $('.datatables-all-users-login').DataTable({

                        "processing": true,
                        "lengthMenu": [10, 30, 50, 75, 100, 1000],
                        // "scrollY": 800,
                        "scrollX": true,
                        // "scrollCollapse": true,
                        // "paging": false,
                        // "fixedColumns": {
                        //     "leftColumns": 2,
                        // },
                        "pageLength": 10,
                        "autoWidth": false,
                        "columnDefs": [
                            {"width": '5px', targets: 0},
                            {"width": '50px', targets: 1},
                            {"width": '1000px', targets: 3},
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
                                "text": feather.icons['share'].toSvg({class: 'font-small-4 mr-50'}) + 'Exportar',
                                "buttons": [
                                    {
                                        "title": 'Usuarios autenticados',
                                        "extend": 'print',
                                        "text": feather.icons['printer'].toSvg({class: 'font-small-4 mr-50'}) + 'Imprimir',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2]},
                                        // "customize": function (win) {
                                        //     console.log(window.url, window.logo_ligth)
                                        //     $(win.document.body)
                                        //         .css('font-size', '10pt')
                                        //         .prepend(
                                        //             `<div align='center' style="text-align: center;top:50%;"><img width="550" src="${window.url}${window.logo_ligth}" style=" opacity: 12%;" /></div>`
                                        //         );
                                        //
                                        //     $(win.document.body).find('table')
                                        //         .addClass('compact')
                                        //         .css('font-size', 'inherit');
                                        // }
                                    },
                                    {
                                        "title": 'Usuarios autenticados',
                                        "extend": 'csv',
                                        "text": feather.icons['file-text'].toSvg({class: 'font-small-4 mr-50'}) + 'Csv',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]}
                                    },
                                    {

                                        "title": 'Usuarios autenticados',
                                        "extend": 'excel',
                                        "text": feather.icons['file'].toSvg({class: 'font-small-4 mr-50'}) + 'Excel',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]}
                                    },
                                    {
                                        "title": 'Usuarios autenticados',
                                        "extend": 'pdf',
                                        "text": feather.icons['clipboard'].toSvg({class: 'font-small-4 mr-50'}) + 'Pdf',
                                        "className": 'dropdown-item',
                                        "exportOptions": {columns: [0, 1, 2, 3]},
                                        "orientation": 'portrait',
                                    },
                                    {
                                        "title": 'Usuarios autenticados',
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
                            "sInfoEmpty": "No hay registros",
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
                    // let text = 'Usuarios Autenticados'
                    // $('div.head-label').html(`<h6 class="mb-0">${text}</h6>`);
                    table.on('order.dt search.dt', function () {
                        table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                            cell.innerHTML = i + 1;
                        });
                    }).draw();

                }
                , 1000);
        };


        $(function () {
            $("#selectDay").on('change', function () {

                let valueYear = this.value;
                if (!(valueYear > 0)) {
                    valueYear = null;
                }
                day1 = valueYear;
                console.log(day1);
                loadTable();
                loadTableBooksSelected();
                // localStorage.setItem('valueYear', typeYear);
                // loadTable();
            });
        })

        loadTable();
        loadTableBooksSelected();
        loadTableUserOnline();

    </script>
@endpush
