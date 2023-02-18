@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">ছাত্রীদের মাসিক টাকা গ্রহণ</a>
                                    </li>
                                    <li style="color: maroon;" class="breadcrumb-item active" aria-current="page">ছাত্রীদের
                                        টাকা আদায়ের রশিদ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <p class="alert-info text-center">
                <?php
                $message = Session()->get('message');
                if ($message) {
                    echo $message;
                    Session()->put('message', null);
                }
                ?>
            </p>
            <div class="row">
                <!-- ============================================================== -->
                <!-- validation form -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 style="color: maroon;" class="card-header text-center">টাকা গ্রহণ ফর্ম</h5>
                        <div class="card-body">
                            <form action="{{ url('/studentfees/') }}" method="post" enctype="multipart/form-data"
                                class="needs-validation">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>বেতন/টাকা আদায়ের তারিখ</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>মাস</label>
                                        <input type="text" class="form-control" name="month" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>সন</label>
                                        <input type="text" class="form-control" name="year" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>ফর্ম নং</label>
                                        <input type="text" class="form-control" name="formno" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>জেলা</label>
                                        <input type="text" class="form-control" name="district" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>মোবাইল নাম্বার</label>
                                        <input type="text" class="form-control" name="mobile" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>ক্লাস</label>
                                        <input type="text" class="form-control" name="class" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <label>ছাত্রীর নাম</label>
                                        <input type="text" class="form-control" name="studentname" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                        <label>পিতার নাম</label>
                                        <input type="text" class="form-control" name="fathername" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                        <label>ঠিকানা</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                        <label>জামাত</label>
                                        <input type="text" class="form-control" name="jamat" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>ফর্ম ফি</label>
                                        <input type="text" class="form-control" name="formfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>মাসিক বেতন</label>
                                        <input type="text" class="form-control" name="masikbeton">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>আইডি কার্ড</label>
                                        <input type="text" class="form-control" name="idcardfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>রেজাল্ট কার্ড</label>
                                        <input type="text" class="form-control" name="resulltcardfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>মাসিক খোরাকী</label>
                                        <input type="text" class="form-control" name="monthlykhoraki">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>আবাসিক বেতন</label>
                                        <input type="text" class="form-control" name="residentialfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>অনাবাসিক বেতন</label>
                                        <input type="text" class="form-control" name="nonresidentialfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বোর্ড নিবন্ধন ফি</label>
                                        <input type="text" class="form-control" name="boardregistrationfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>পরীক্ষার ফি</label>
                                        <input type="text" class="form-control" name="examfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>সনদ</label>
                                        <input type="text" class="form-control" name="sanadfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>প্রত্যয়ন পত্র</label>
                                        <input type="text" class="form-control" name="protoyonfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>মুওয়াল্লিমা ট্রেনিং ফি</label>
                                        <input type="text" class="form-control" name="moallimafee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বিদ্যুৎ বিল</label>
                                        <input type="text" class="form-control" name="currentbill">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বকেয়া</label>
                                        <input type="text" class="form-control" name="boyeka">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বিবিধ</label>
                                        <input type="text" class="form-control" name="bibidh">
                                    </div>
                                     
                                </div>
                                <div class="form-row pt-2 text-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-primary" type="submit">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end validation form -->
                <!-- ============================================================== -->
            </div>

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
        </div>
    </div>
@endsection
