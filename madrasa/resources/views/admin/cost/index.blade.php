@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page-header">
                        <h2 style="color: maroon; font-weight:bold;" class="pageheader-title">সকল খরচ দেখুন</h2>

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
                                            <th><b>সন</b></th>
                                            <th style="color: rgb(0, 51, 128);">ভাউচার নং</th>
                                            <th style="color: rgb(0, 51, 128);">বোডিং</th>
                                            <th style="color: rgb(0, 51, 128);">নির্মাণ</th>
                                            <th style="color: rgb(0, 51, 128);">বেতন ও ভাতা</th>
                                            <th style="color: rgb(0, 51, 128);">আসবাব</th>
                                            <th style="color: rgb(0, 51, 128);">যোগাযোগ/প্রচার</th>
                                            <th style="color: rgb(0, 51, 128);">ছাপা/প্রিন্টিং</th>
                                            <th style="color: rgb(0, 51, 128);">বিদ্যুৎ ও নেটবিল</th>
                                            <th style="color: rgb(0, 51, 128);">পরীক্ষা</th>
                                            <th style="color: rgb(0, 51, 128);">আপ্যায়ন</th>
                                            <th style="color: rgb(0, 51, 128);">বিবিধ</th>
                                            <th style="color: rgb(0, 51, 128);">সাধারণ কর্যপরিশোধ</th>
                                            <th style="color: rgb(4, 128, 0);">খোরাকী/বেতন</th>
                                            <th style="color: rgb(4, 128, 0);">চিকিৎসা,পোশাক ও বই-পুস্তক</th>
                                            <th style="color: rgb(4, 128, 0);">লিল্লাহ্ কর্জপরিশোধ</th>
                                            <th style="color: rgb(4, 128, 0);">ভর্তিফি, পরীক্ষাফি</th>
                                            <th><b>উভয়ফান্ডের মোটখরচ</b></th>
                                            <th>ভিউ রিসিপ্ট</th>
                                            <th>এডিট</th>
                                            <th>ডিলিট</th>
                                        </tr>
                                    </thead>
                                    @foreach ($costs as $cost)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $cost->date }}</td> 
                                                <td>{{ $cost->year }}</td>
                                                <td>{{ $cost->vawcharno }}</td>
                                                <td>{{ $cost->boarding }}</td>
                                                <td>{{ $cost->nirman }}</td>
                                                <td>{{ $cost->beton }}</td>
                                                <td>{{ $cost->asbab }}</td>
                                                <td>{{ $cost->jogajog }} </td>
                                                <td>{{ $cost->chapa }} </td>
                                                <td>{{ $cost->currentnet }} </td>
                                                <td>{{ $cost->exam }} </td>
                                                <td>{{ $cost->guest }} </td>
                                                <td>{{ $cost->bibidh }} </td>
                                                <td>{{ $cost->loan }} </td>
                                                <td>{{ $cost->khorakhi }} </td>
                                                <td>{{ $cost->basicneed }} </td>
                                                <td>{{ $cost->lillahkorjo }} </td>
                                                <td>{{ $cost->vortiexam }} </td>
                                                <td>{{ $cost->total }} /- Taka</td>
                                                <td><a target="_blank"
                                                        href="{{ url('cost-money-recipt/' . $cost->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-print"></i></a></td>
                                                <td><button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $cost->id }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                </td>
                                                <td>
                                                    <form action="{{ url('/cost-delete/' . $cost->id) }}"
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
                                        <div class="modal fade" id="exampleModal{{ $cost->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel{{ $cost->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal{{ $cost->id }}">
                                                            Edit This Cost Informations</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('/update-cost/' . $cost->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>তারিখ:</label>
                                                                        <input type="date" class="form-control"
                                                                            name="date"
                                                                            value="{{ $cost->date }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মাসের নাম:</label>
                                                                        <input type="month" class="form-control"
                                                                            name="month"
                                                                            value="{{ $cost->month }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>সন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="year"
                                                                            value="{{ $cost->year }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ভাউচার নং:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="vawcharno"
                                                                            value="{{ $cost->vawcharno }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বোডিং:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="boarding"
                                                                            value="{{ $cost->boarding }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>নির্মাণ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="nirman" value="{{ $cost->nirman }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বেতন ও ভাতা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="beton"
                                                                            value="{{ $cost->beton }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>আসবাব:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="asbab"
                                                                            value="{{ $cost->asbab }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>যোগাযোগ/প্রচার:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="jogajog"
                                                                            value="{{ $cost->jogajog }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ছাপা/প্রিন্টিং:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="chapa"
                                                                            value="{{ $cost->chapa }}">
                                                                    </div>
                                                                     

                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label>বিদ্যুৎ ও নেটবিল:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="currentnet"
                                                                            value="{{ $cost->currentnet }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>পরীক্ষা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="exam"
                                                                            value="{{ $cost->exam }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>আপ্যায়ন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="guest"
                                                                            value="{{ $cost->guest }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বিবিধ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="bibidh"
                                                                            value="{{ $cost->bibidh }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>সাধারণ কর্যপরিশোধ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="loan"
                                                                            value="{{ $cost->loan }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>খোরাকী/বেতন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="khorakhi"
                                                                            value="{{ $cost->khorakhi }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>চিকিৎসা,পোশাক ও বই-পুস্তক:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="basicneed"
                                                                            value="{{ $cost->basicneed }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>লিল্লাহ্ কর্জপরিশোধ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="lillahkorjo"
                                                                            value="{{ $cost->lillahkorjo }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ভর্তিফি, পরীক্ষাফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="vortiexam"
                                                                            value="{{ $cost->vortiexam }}">
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
