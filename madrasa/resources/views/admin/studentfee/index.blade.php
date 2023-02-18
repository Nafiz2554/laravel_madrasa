@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page-header">
                        <h2 style="color: maroon; font-weight:bold;" class="pageheader-title">ছাত্রীদের সকল জমা</h2>

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
                                            <th>ছাত্রীর নাম</th>
                                            <th>মাস</th>
                                            <th>সন</th>
                                            <th>তারিখ</th>         
                                            <th>মোবাইল নাম্বার</th>
                                            <th>ক্লাস</th>
                                            <th>পিতার নাম</th>
                                            <th>ঠিকানা</th>
                                            <th>জেলা</th>
                                            <th>জামাত</th>
                                            <th>ফর্ম ফি</th>
                                            <th>মাসিক বেতন</th>
                                            <th>আইডি কার্ড</th>
                                            <th>রেজাল্ট কার্ড</th>
                                            <th>মাসিক খোরাকী</th>
                                            <th>আবাসিক বেতন</th>
                                            <th>অনাবাসিক বেতন</th>
                                            <th>বোর্ড নিবন্ধন ফি</th>
                                            <th>পরীক্ষার ফি</th>
                                            <th>সনদ</th>
                                            <th>প্রত্যয়ন পত্র</th>
                                            <th>মুওয়াল্লিমা ট্রেনিং ফি</th>
                                            <th>বিদ্যুৎ বিল</th>
                                            <th>বকেয়া</th>
                                            <th>বিবিধ</th>
                                            <th>সর্বমোট</th>
                                            <th>মানি রিসিপ্ট</th>
                                            <th>এডিট</th>
                                            <th>ডিলিট</th>
                                        </tr>
                                    </thead>
                                    @foreach ($studentfees as $studentfee)
                                        <tbody>
                                            <tr>
                                                <td>{{ $studentfee->studentname }}</td>
                                                <td>{{ $studentfee->month }}</td>
                                                <td>{{ $studentfee->year }}</td>
                                                <td>{{ $studentfee->date }}</td> 
                                                <td>{{ $studentfee->mobile }}</td>
                                                <td>{{ $studentfee->class }}</td>
                                                <td>{{ $studentfee->fathername }}</td>
                                                <td>{{ $studentfee->address }}</td>
                                                <td>{{ $studentfee->district }}</td>
                                                <td>{{ $studentfee->jamat }}</td>
                                                <td>{{ $studentfee->formfee }} </td>
                                                <td>{{ $studentfee->masikbeton }} </td>
                                                <td>{{ $studentfee->idcardfee }} </td>
                                                <td>{{ $studentfee->resulltcardfee }} </td>
                                                <td>{{ $studentfee->monthlykhoraki }} </td>
                                                <td>{{ $studentfee->residentialfee }} </td>
                                                <td>{{ $studentfee->nonresidentialfee }} </td>
                                                <td>{{ $studentfee->boardregistrationfee }} </td>
                                                <td>{{ $studentfee->examfee }} </td>
                                                <td>{{ $studentfee->sanadfee }} </td>
                                                <td>{{ $studentfee->protoyonfee }} </td>
                                                <td>{{ $studentfee->moallimafee }} </td>
                                                <td>{{ $studentfee->currentbill }} </td>
                                                <td>{{ $studentfee->boyeka }} </td>
                                                <td>{{ $studentfee->bibidh }} </td>
                                                <td>{{ $studentfee->total }} /- Taka</td>
                                                <td><a target="_blank"
                                                        href="{{ url('studentfee-recipt/' . $studentfee->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-print"></i></a></td>
                                                <td><button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $studentfee->id }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                </td>

                                                <td>
                                                    <form action="{{ url('/studentfee-delete/' . $studentfee->id) }}"
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
                                        <div class="modal fade" id="exampleModal{{ $studentfee->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel{{ $studentfee->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal{{ $studentfee->id }}">
                                                            Edit Student Deposit Informations</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('/update-studentfee/' . $studentfee->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>ছাত্রীর নাম:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="studentname"
                                                                            value="{{ $studentfee->studentname }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মাস:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="month"
                                                                            value="{{ $studentfee->month }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>সন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="year"
                                                                            value="{{ $studentfee->year }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মোবাইল নাম্বার:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="mobile"
                                                                            value="{{ $studentfee->mobile }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ঠিকানা:</label>
                                                                        <textarea class="form-control" rows="3" name="address">{{ $studentfee->address }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ক্লাস:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="class" value="{{ $studentfee->class }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>পিতার নাম:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="fathername"
                                                                            value="{{ $studentfee->fathername }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>জামাত:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="jamat" value="{{ $studentfee->jamat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>জেলা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="district"
                                                                            value="{{ $studentfee->district }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ফর্ম ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="formfee"
                                                                            value="{{ $studentfee->formfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মাসিক বেতন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="masikbeton"
                                                                            value="{{ $studentfee->masikbeton }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>আইডি কার্ড:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="idcardfee"
                                                                            value="{{ $studentfee->idcardfee }}">
                                                                    </div>
                                                                   

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>রেজাল্ট কার্ড:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="resulltcardfee"
                                                                            value="{{ $studentfee->resulltcardfee }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>মাসিক খোরাকী:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="monthlykhoraki"
                                                                            value="{{ $studentfee->monthlykhoraki }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>আবাসিক বেতন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="residentialfee"
                                                                            value="{{ $studentfee->residentialfee }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>অনাবাসিক বেতন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="nonresidentialfee"
                                                                            value="{{ $studentfee->nonresidentialfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বোর্ড নিবন্ধন ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="boardregistrationfee"
                                                                            value="{{ $studentfee->boardregistrationfee }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>পরীক্ষার ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="examfee"
                                                                            value="{{ $studentfee->examfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>সনদ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="sanadfee"
                                                                            value="{{ $studentfee->sanadfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>প্রত্যয়ন পত্র:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="protoyonfee"
                                                                            value="{{ $studentfee->protoyonfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মুওয়াল্লিমা ট্রেনিং ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="moallimafee"
                                                                            value="{{ $studentfee->moallimafee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বিদ্যুৎ বিল:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="currentbill"
                                                                            value="{{ $studentfee->currentbill }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বকেয়া:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="boyeka"
                                                                            value="{{ $studentfee->boyeka }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বিবিধ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="bibidh"
                                                                            value="{{ $studentfee->bibidh }}">
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
