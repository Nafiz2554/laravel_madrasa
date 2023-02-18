@extends('admin.admin_master')
@section('admin_content')
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page-header">
                        <h2 style="color: maroon; font-weight:bold;" class="pageheader-title">ক্লাস 7 এর সকল ভর্তিকৃত ছাত্রী</h2>

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
                                            <th>ছবি</th>
                                            <th>ছাত্রীর নাম</th>
                                            <th>ফর্ম নং</th>  
                                            <th>জামাত</th>
                                            <th>ক্লাস</th>
                                            <th>মোবাইল নাম্বার</th>
                                            <th>পিতার নাম</th>
                                            <th>ঠিকানা</th>
                                               
                                        </tr>
                                    </thead>
                                    @foreach ($admissions as $admission)
                                        <tbody>
                                            <tr>
                                                
                                                <td><img src="{{ asset('/storage/' . $admission->image) }}"
                                                        style="width: 105px; height:105px;"> </td>
                                                <td>{{ $admission->studentname }}</td>
                                                <td>{{ $admission->formno }}</td>
                                                <td>{{ $admission->jamat }}</td>
                                                <td>{{ $admission->class }}</td>
                                                <td>{{ $admission->mobile }}</td> 
                                                <td>{{ $admission->fathername }}</td>
                                                <td>{{ $admission->address }}</td>
                                                
                                              
                                                 
                                            </tr>

                                        </tbody>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $admission->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel{{ $admission->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal{{ $admission->id }}">
                                                            Edit Student Informations</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form action="{{ url('/update-admission/' . $admission->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>ছাত্রীর নাম:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="studentname"
                                                                            value="{{ $admission->studentname }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মোবাইল নাম্বার:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="mobile"
                                                                            value="{{ $admission->mobile }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ঠিকানা:</label>
                                                                        <textarea class="form-control" rows="3" name="address">{{ $admission->address }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ক্লাস:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="class" value="{{ $admission->class }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>পিতার নাম:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="fathername"
                                                                            value="{{ $admission->fathername }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>জামাত:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="jamat" value="{{ $admission->jamat }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>জেলা:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="district"
                                                                            value="{{ $admission->district }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ফর্ম ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="formfee"
                                                                            value="{{ $admission->formfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ভর্তি ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="admissionfee"
                                                                            value="{{ $admission->admissionfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>আইডি কার্ড:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="idcardfee"
                                                                            value="{{ $admission->idcardfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>রেজাল্ট কার্ড:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="resulltcardfee"
                                                                            value="{{ $admission->resulltcardfee }}">
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">

                                                                    <div class="form-group">
                                                                        <label>মাসিক খোরাকী:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="monthlykhoraki"
                                                                            value="{{ $admission->monthlykhoraki }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>আবাসিক বেতন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="residentialfee"
                                                                            value="{{ $admission->residentialfee }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>অনাবাসিক বেতন:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="nonresidentialfee"
                                                                            value="{{ $admission->nonresidentialfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বোর্ড নিবন্ধন ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="boardregistrationfee"
                                                                            value="{{ $admission->boardregistrationfee }}">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>পরীক্ষার ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="examfee"
                                                                            value="{{ $admission->examfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>সনদ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="sanadfee"
                                                                            value="{{ $admission->sanadfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>প্রত্যয়ন পত্র:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="protoyonfee"
                                                                            value="{{ $admission->protoyonfee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>মুওয়াল্লিমা ট্রেনিং ফি:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="moallimafee"
                                                                            value="{{ $admission->moallimafee }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বিদ্যুৎ বিল:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="currentbill"
                                                                            value="{{ $admission->currentbill }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বকেয়া:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="boyeka"
                                                                            value="{{ $admission->boyeka }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>বিবিধ:</label>
                                                                        <input type="text" class="form-control"
                                                                            name="bibidh"
                                                                            value="{{ $admission->bibidh }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>ছবি:</label>
                                                                        <img src="{{ asset('/storage/' . $admission->image) }}"
                                                                            style="width: 105px; height:105px; margin-bottom:10px;">
                                                                        <input type="file" class="form-control"
                                                                            name="image">
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
