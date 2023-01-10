@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Тэги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-3">
                        <a href="{{ route('admin.tags.create') }}" class="btn btn-block btn-primary">Добавить
                            тэг</a>
                    </div>
                    <div class="col-12">
                        <hr>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table project-list-table table-nowrap align-middle table-borderless">
                                                <thead>
                                                <tr>
                                                    <th scope="col" class="ps-4" style="width: 50px;">
                                                        <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck" /><label class="form-check-label" for="contacusercheck"></label></div>
                                                    </th>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Наименование тэга</th>
                                                    <th scope="col">Действия</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($tags as $tag)
                                                <tr>
                                                    <th scope="row" class="ps-4">
                                                        <div class="form-check font-size-16"><input type="checkbox" class="form-check-input" id="contacusercheck1" /><label class="form-check-label" for="contacusercheck1"></label></div>
                                                    </th>

                                                    <td><a href="#" class="text-body">{{ $tag->id }}</a></td>
                                                    <td><span class="badge badge-soft-success mb-0">{{ $tag->title }}</span></td>
                                                    <td>
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="{{ route('admin.tags.edit', $tag->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-primary"><i class="bx bx-pencil font-size-18"></i></a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="{{ route('admin.tags.delete', $tag->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-18"></i></a>
                                                            </li>
                                                            @csrf
                                                            @method('DELETE')
                                                            <li class="list-inline-item dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-18 px-2" href="{{ route('admin.tags.show', $tag->id) }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="bx bx-dots-vertical-rounded"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 align-items-center pb-4">
                                <div class="col-sm-6">
                                    <div><p class="mb-sm-0">Showing 1 to 10 of 57 entries</p></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-sm-end">
                                        <ul class="pagination mb-sm-0">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
