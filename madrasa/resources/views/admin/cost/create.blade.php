@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title"> আল-জামিয়াতুল আরাবিয়া লিল বানাত হযরত ফাতেমা রাযিঃ চকলোকমান মহিলা
                            মাদ্রাসা (ও এতিম খানা)</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">খরচের হিসাব </a>
                                    </li>
                                    <li style="color: maroon;" class="breadcrumb-item active" aria-current="page">খরচের রশিদ
                                        করুন</li>
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
                        <h4 class="card-header"><b>খরচ</b></h4>
                        <div class="card-body">
                            <form action="{{ url('/costs/') }}" method="post" enctype="multipart/form-data"
                                class="needs-validation">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>তারিখ</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>মাসের নাম</label>
                                        <input type="month" class="form-control" name="month" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>সন</label>
                                        <input type="text" class="form-control" name="year" required>
                                    </div>

                                    <div style="padding-top:15px;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4><b>সাধারণ ফান্ড:</b></h4>

                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>ভাউচার নং</label>
                                        <input type="text" class="form-control" name="vawcharno">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বোডিং</label>
                                        <input type="text" class="form-control" name="boarding">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>নির্মাণ</label>
                                        <input type="text" class="form-control" name="nirman">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বেতন ও ভাতা</label>
                                        <input type="text" class="form-control" name="beton">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>আসবাব </label>
                                        <input type="text" class="form-control" name="asbab">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>যোগাযোগ ও প্রচার</label>
                                        <input type="text" class="form-control" name="jogajog">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>ছাপা ও প্রিন্টিং</label>
                                        <input type="text" class="form-control" name="chapa">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বিদ্যুৎ ও নেট বিল</label>
                                        <input type="text" class="form-control" name="currentnet">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>পরীক্ষা</label>
                                        <input type="text" class="form-control" name="exam">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>আপ্যায়ন</label>
                                        <input type="text" class="form-control" name="guest">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বিবিধ</label>
                                        <input type="text" class="form-control" name="bibidh">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>সাধারণ কর্য পরিশোধ</label>
                                        <input type="text" class="form-control" name="loan">
                                    </div>
                                    <div style="padding-top:15px;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4><b>লিল্লাহ্ ফান্ড:</b></h4>

                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>খোরাকী ও বেতন</label>
                                        <input type="text" class="form-control" name="khorakhi">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>চিকিৎসা, পোশাক ও বই-পুস্তক</label>
                                        <input type="text" class="form-control" name="basicneed">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>লিল্লাহ্ কর্জ পরিশোধ</label>
                                        <input type="text" class="form-control" name="lillahkorjo">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>ভর্তি ফি, পরীক্ষা ফি</label>
                                        <input type="text" class="form-control" name="vortiexam">
                                    </div>

                                </div>
                                <div class="form-row pt-2 text-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-primary" type="submit">খরচ যোগ</button>
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
