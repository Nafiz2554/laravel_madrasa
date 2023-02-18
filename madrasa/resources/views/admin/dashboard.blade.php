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
                <div class="ecommerce-widget">

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">ভর্তি ফি</h5>

                                    <div class="metric-value d-inline-block">
                                        @foreach ($fee as $fee)
                                            <h2 class="mb-1">{{$fee->amount}} ৳</h2>
                                        @endforeach

                                    </div>

                                </div>
                                <div class="metric-value d-inline-block">

                                    <form action="{{ url('/admissionfee/') }}" method="post">
                                        @csrf

                                        <p class="m-2"><b>Edit Admission Fee:</b></p>
                                        <input name="amount" type="text" class="form-control px-1 py-1">
                                        <div class="text-center"><button class="btn btn-success m-1"
                                                type="submit">Change</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">মোট ছাত্রী</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_student }} জন</h1>
                                    </div>

                                </div>
                                <div id="sparkline-revenue2"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">জমা</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_deposit }} ৳</h1>
                                    </div>

                                </div>
                                <div id="sparkline-revenue3"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">খরচ</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">{{ $total_cost }} ৳</h1>
                                    </div>

                                </div>
                                <div id="sparkline-revenue4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->

                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="row">


                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card">
                                        <h5 class="card-header"> DEPOSIT GRAPH </h5>
                                        <div class="card-body">
                                            <div id="morris_totalrevenue"></div>
                                        </div>
                                        <div class="card-footer">
                                            <p class="display-7 font-weight-bold"><span
                                                    class="text-primary d-inline-block">{{ $total_deposit }} Taka/-</span><span
                                                    class="text-success float-right">+9.45%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->


                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- customer acquistion  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Acquisition</h5>
                                <div class="card-body">
                                    <div class="ct-chart ct-golden-section" style="height: 354px;"></div>
                                    <div class="text-center">
                                        <span class="legend-item mr-2">
                                            <span class="fa-xs text-primary mr-1 legend-tile"><i
                                                    class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">Returning</span>
                                        </span>
                                        <span class="legend-item mr-2">

                                            <span class="fa-xs text-secondary mr-1 legend-tile"><i
                                                    class="fa fa-fw fa-square-full"></i></span>
                                            <span class="legend-text">First Time</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end customer acquistion  -->
                        <!-- ============================================================== -->
                    </div>




                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    Copyright © 2022, চকলোকমান মহিলা মাদ্রাসা. All rights reserved. Developed by <a
                                        href=" ">RoyalSoft</a>.
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="text-md-right footer-links d-none d-sm-block">
                                        <a href="javascript: void(0);">Dashboard</a>
                                        <a href="javascript: void(0);">Support</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
            @endsection
