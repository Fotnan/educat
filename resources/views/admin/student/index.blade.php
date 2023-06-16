@extends('admin.layouts.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Главная</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Студенты</h3>
                </div>

                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div id="example1_filter" class="dataTables_filter">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                       aria-describedby="example1_info">
                                    <thead>
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">№ п/п
                                        </th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Имя
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">ID код
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">E-mail
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Символ
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Курс пройден
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Сертификат отправлен
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Пользователь
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Создан дата
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Обновлен дата
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($students as $student)
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">{{$student->id}}</td>
                                        <td>{{$student->first_name}} {{$student->last_name}}</td>
                                        <td>{{$student->personal_code}}</td>
                                        <td>{{$student->email}}</td>
                                        <td>{{$student->symbol}}</td>
                                        <td>{{$student->end}}</td>
                                        <td>{{$student->sert}}</td>
                                        <td>{{$student->user->company }}</td>
                                        <td>{{$student->created_at}}</td>
                                        <td>{{$student->updated_at}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">№ п/п</th>
                                        <th rowspan="1" colspan="1">Имя</th>
                                        <th rowspan="1" colspan="1">ID код</th>
                                        <th rowspan="1" colspan="1">E-mail</th>
                                        <th rowspan="1" colspan="1">Символ</th>
                                        <th rowspan="1" colspan="1">Курс пройден</th>
                                        <th rowspan="1" colspan="1">Сертификат отправлен</th>
                                        <th rowspan="1" colspan="1">Пользователь</th>
                                        <th rowspan="1" colspan="1">Создан дата</th>
                                        <th rowspan="1" colspan="1">Обновлен дата</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite"></div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Default box -->


            @push('table_css')
                <link rel="stylesheet"
                      href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
                <link rel="stylesheet"
                      href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
                <link rel="stylesheet"
                      href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
            @endpush
            @push('table')
                <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
                <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
                <script
                    src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
                <script
                    src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
                <script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
                <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
                <script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
                <script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
                <script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
                <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
                <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
                <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
                <script src="{{asset('assets/js/adminlte.min.js')}}"></script>
                <script>
                    $(function () {
                        $("#example1").DataTable({
                            "responsive": true, "lengthChange": false, "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        ;
                    });
                </script>
    @endpush
@endsection
