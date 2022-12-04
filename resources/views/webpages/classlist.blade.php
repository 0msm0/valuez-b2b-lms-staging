@extends('layout.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Grade</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><i class="mdi mdi-home-outline"></i></li>                          
                            <li class="breadcrumb-item active" aria-current="page">Grade</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach ($class_list as $cdata)
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="overlay position-relative">
                                        <img src="{{ url('uploads/program') }}/{{ $cdata->class_image ? $cdata->class_image : 'no_image.png' }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="mt-30 pro-dec text-center">
                                        <h5 class="fw-500"><a href="#">{{ $cdata->class_name }}</a></h5>
                                        <div class="price-dle d-flex justify-content-center align-items-center">
                                            <a href="{{ route('teacher.course.list',['class'=>$cdata->id]) }}" class="btn btn-sm btn-primary me-2">View Courses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
