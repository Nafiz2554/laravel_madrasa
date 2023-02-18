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
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">জমা গ্রহণ </a>
                                    </li>
                                    <li style="color: maroon;" class="breadcrumb-item active" aria-current="page">জমা
                                        আদায়ের রশিদ</li>
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
                        <h4 class="card-header"><b>জমা</b></h4>
                        <div class="card-body">
                            <form action="{{ url('/deposits/') }}" method="post" enctype="multipart/form-data"
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
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>জমাদানকারীর নাম</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>পেশা</label>
                                        <input type="text" class="form-control" name="occupation" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>মোবাইল নং</label>
                                        <input type="text" class="form-control" name="mobile" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                        <label>ঠিকানা</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div>


                                    <div style="padding-top:15px;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4><b>সাধারণ ফান্ড:</b></h4>

                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>রশিদ বহি ও পাতা নং</label>
                                        <input type="text" class="form-control" name="patano">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>খোরাকী</label>
                                        <input type="text" class="form-control" name="khoraki">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>দান ও উন্নয়ন</label>
                                        <input type="text" class="form-control" name="dan">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>ভর্তি ফি</label>
                                        <input type="text" class="form-control" name="vortifee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>মাসিক চাঁদা</label>
                                        <input type="text" class="form-control" name="masikcada">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>বাড়ি / দোকানভাড়া</label>
                                        <input type="text" class="form-control" name="baridokan">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>পরীক্ষার ফি</label>
                                        <input type="text" class="form-control" name="examfee">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>সাধারণ কর্জ গ্রহণ</label>
                                        <input type="text" class="form-control" name="generalfee">
                                    </div>
                                    <div style="padding-top:15px;" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4><b>লিল্লাহ্ ফান্ড:</b></h4>

                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>যাকাত/ ফেৎরা/ কোরবানীর চামড়া/ ছদকা/ মান্নত</label>
                                        <input type="text" class="form-control" name="jakat">
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2 pt-2">
                                        <label>লিল্লাহ্ কর্জ গ্রহণ</label>
                                        <input type="text" class="form-control" name="lillahfee">
                                    </div>

                                </div>
                                <div class="form-row pt-2 text-center">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button class="btn btn-primary" type="submit">জমা</button>
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
