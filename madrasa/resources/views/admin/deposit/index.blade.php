@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page-header">
                        <h2 style="color: maroon; font-weight:bold;" class="pageheader-title">সকল জমা দেখুন</h2>

                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <div class="page-header">
                        <ul style="list-style-type: none;">
                            <li style="color: rgb(0, 51, 128); font-weight:bold;"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i> সাধারণ ফান্ড</li>
                            <li style="color: rgb(4, 128, 0); font-weight:bold;"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i> লিল্লাহ্ ফান্ড</li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="row">
                <!-- ============================================================== -->
                <!-- data table rowgroup  -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="alert-warning text-center">
                                <?php
                                $message = Session()->get('message');
                                if ($message) {
                                    echo $message;
                                    Session()->put('message', null);
                                }
                                ?>
                            </p>
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><b>ক্রমিক নং</b></th>
                                            <th><b>তারিখ</b></th> 
                                            <th><b>জমাদানকারীর নাম</b></th>
                                            <th><b>পেশা</b></th>
                                            <th><b>মোবাইল নং</b></th>
                                            <th><b>ঠিকানা</b></th>
                                            <th><b>সন</b></th>
                                            <th style="color: rgb(0, 51, 128);">রশিদবহি/পাতানং</th>
                                            <th style="color: rgb(0, 51, 128);">খোরাকী</th>
                                            <th style="color: rgb(0, 51, 128);">দান ও উন্নয়ন</th>
                                            <th style="color: rgb(0, 51, 128);">ভর্তি ফি</th>
                                            <th style="color: rgb(0, 51, 128);">মাসিক চাঁদা</th>
                                            <th style="color: rgb(0, 51, 128);">বাড়ি/দোকানভাড়া</th>
                                            <th style="color: rgb(0, 51, 128);">পরীক্ষার ফি</th>
                                            <th style="color: rgb(0, 51, 128);">সাধারণ কর্জগ্রহণ</th>
                                            <th style="color: rgb(4, 128, 0);">যাকাত/ফেৎরা/কোরবানীর চামড়া/ছদকা/মান্নত</th>
                                            <th style="color: rgb(4, 128, 0);">লিল্লাহ্ কর্জগ্রহণ</th>
                                            <th><b>উভয়ফান্ডের মোটজমা</b></th>
                                            <th>মানি রিসিপ্ট</th>
                                            <th>এডিট</th>
                                            <th>ডিলিট</th>
                                        </tr>
                                    </thead>
                                    @foreach ($deposits as $deposit)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $deposit->date }}</td> 
                                                <td>{{ $deposit->name }}</td>
                                                <td>{{ $deposit->occupation }}</td>
                                                <td>{{ $deposit->mobile }}</td>
                                                <td>{{ $deposit->address }}</td>
                                                <td>{{ $deposit->year }}</td>
                                                <td>{{ $deposit->patano }}</td>
                                                <td>{{ $deposit->khoraki }} </td>
                                                <td>{{ $deposit->dan }} </td>
                                                <td>{{ $deposit->vortifee }} </td>
                                                <td>{{ $deposit->masikcada }} </td>
                                                <td>{{ $deposit->baridokan }} </td>
                                                <td>{{ $deposit->examfee }} </td>
                                                <td>{{ $deposit->generalfee }} </td>
                                                <td>{{ $deposit->jakat }} </td>
                                                <td>{{ $deposit->lillahfee }} </td>
                                                <td>{{ $deposit->total }} /- Taka</td>
                                                <td><a target="_blank"
                                                        href="{{ url('deposit-money-recipt/' . $deposit->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-print"></i></a></td>
                                                <td><button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $deposit->id }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                </td>
                                                <td>
                                                    <form action="{{ url('/deposit-delete/' . $deposit->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $deposit->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel{{ $deposit->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal{{ $deposit->id }}">
                                                            Edit This Deposit Informations</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('/update-deposit/' . $deposit->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>তারিখ:</label>
                                                                        <input type="date" class="form-control"
                                                                            name="date"
                                                                            value="{{ $deposit->date }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মাসের নাম:</label>
                                                                        <input type="month" class="form-control"
                                                                            name="month"
                                                                            value="{{ $deposit->month }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>সন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="year"
                                                                            value="{{ $deposit->year }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>জমাদানকারীর নাম:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="name"
                                                                            value="{{ $deposit->name }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>পেশা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="occupation"
                                                                            value="{{ $deposit->occupation }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মোবাইল নং:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="mobile" value="{{ $deposit->mobile }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ঠিকানা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="address"
                                                                            value="{{ $deposit->address }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>রশিদ বহি ও পাতা নং:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="patano"
                                                                            value="{{ $deposit->patano }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>খোরাকী:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="khoraki"
                                                                            value="{{ $deposit->khoraki }}">
                                                                    </div>
                                                                     

                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label>দান ও উন্নয়ন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="dan"
                                                                            value="{{ $deposit->dan }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ভর্তি ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="vortifee"
                                                                            value="{{ $deposit->vortifee }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>মাসিক চাঁদা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="masikcada"
                                                                            value="{{ $deposit->masikcada }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বাড়ি / দোকানভাড়া:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="baridokan"
                                                                            value="{{ $deposit->baridokan }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>পরীক্ষার ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="examfee"
                                                                            value="{{ $deposit->examfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>সাধারণ কর্জ গ্রহণ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="generalfee"
                                                                            value="{{ $deposit->generalfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>যাকাত/ ফেৎরা/ কোরবানীর চামড়া/ ছদকা/ মান্নত:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="jakat"
                                                                            value="{{ $deposit->jakat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>লিল্লাহ্ কর্জ গ্রহণ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="lillahfee"
                                                                            value="{{ $deposit->lillahfee }}">
                                                                    </div>
                                                                     
                                                                </div>
                                                            </div>
                                                            <div class="text-end mt-4">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Edit</button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        {{-- modalend --}}
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end data table rowgroup  -->
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
