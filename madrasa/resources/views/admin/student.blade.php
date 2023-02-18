@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> আল-জামিয়াতুল আরাবিয়া লিল বানাত হযরত ফাতেমা রাযিঃ চকলোকমান মহিলা
                                মাদ্রাসা (ও এতিম খানা)</h2>
                            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris
                                facilisis faucibus at enim quis massa lobortis rutrum.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">চকলোকমান মহিলা মাদ্রাসা</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="offset-xl-1 col-xl-10">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="section-block">
                                <h5 style="color: maroon;" class="text-center p-2">All Admitted Student Lists:</h5>
                            </div>
                        </div>
                        @foreach ($admissions as $admission)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header bg-primary text-center p-3 ">
                                        <a target="_blank" href="{{ url('view-student-profile/' . $admission->studentname) }}">
                                            <h4 class="mb-0 text-white"> <i class="fa fa-eye"></i> View</h4>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="mb-1">{{$admission->studentname}}</h4>
                                        <p>{{$admission->mobile}}</p>
                                    </div>
                                    <div class="card-body border-top">
                                        <ul class="list-unstyled bullet-check font-14">
                                            <li>Class: {{$admission->class}}</li>
                                            <li>Section: {{$admission->jamat}}</li>

                                        </ul>
                                        <a target="_blank" href="{{ url('view-student-profile/' . $admission->studentname) }}" class="btn btn-outline-secondary btn-block btn-lg">Deposits</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                    </div>
                </div>



            </div>
        </div>
    @endsection
