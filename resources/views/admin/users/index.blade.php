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
                    <h3 class="card-title">Зарегестрированные пользователи</h3>
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
                                            aria-label="Rendering engine: activate to sort column descending">Псевдоним
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">E-mail
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Email подтвержден
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Дата создания
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Имя, фамилия
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">ID код
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Личный телефон
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Фирма
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Кто платит
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Адрес плательщика
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Имя менеджера
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">Тел. менеджера
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">E-mail менеджера
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->email_verified_at}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->first_name}} {{$user->last_name}}</td>
                                        <td>{{$user->personal_code}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->company}}</td>
                                        <td>{{$user->payer_name}}</td>
                                        <td>{{$user->payer_address}}</td>
                                        <td>{{$user->manager_first}} {{$user->manager_last}}</td>
                                        <td>{{$user->manager_phone}}</td>
                                        <td>{{$user->manager_mail}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">№ п/п</th>
                                        <th rowspan="1" colspan="1">Псевдоним</th>
                                        <th rowspan="1" colspan="1">E-mail</th>
                                        <th rowspan="1" colspan="1">E-mail подвержден</th>
                                        <th rowspan="1" colspan="1">Дата создания</th>
                                        <th rowspan="1" colspan="1">Имя,Фамилия</th>
                                        <th rowspan="1" colspan="1">ID код</th>
                                        <th rowspan="1" colspan="1">Личный телефон</th>
                                        <th rowspan="1" colspan="1">Фирма</th>
                                        <th rowspan="1" colspan="1">Кто платит</th>
                                        <th rowspan="1" colspan="1">Адрес плательщика</th>
                                        <th rowspan="1" colspan="1">Имя менеджера</th>
                                        <th rowspan="1" colspan="1">Тел. менеджера</th>
                                        <th rowspan="1" colspan="1">E-mail менеджера</th>
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
