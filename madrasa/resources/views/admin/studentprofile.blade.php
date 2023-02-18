<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Page Wrapper -->
    <div class="container">


        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="text-center p-1" style="font-family:Arial, Helvetica, sans-serif;">STUDENT'S DOPOSIT INFORMATION
                    </h4>
                    <div class="d-flex justify-content-center">
                        <a style="text-decoration: none; color:maroon;" href="/admin-dashboard"><i
                                class="fa fa-home"></i>Dashboard</a>
                        <a style="text-decoration: none;color:maroon;padding-left:20px;" href=" "><i
                                class="fa fa-certificate"></i>All Applications</a>
                    </div>
                </div>
                <div class="col-auto">
                    <a type="button" onclick="window.print()" class="btn btn-primary">
                        <i class="fas fa-file-pdf"></i>
                    </a>

                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <p style="background:#e8bcff;" class="text-center">
            <?php
            $message = Session()->get('message');
            if ($message) {
                echo $message;
                Session()->put('message', null);
            }
            ?>
        </p>



        <div class="row">
            @foreach ($studentfee as $studentfee)
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body" style="border-radius: 20px;">
                            <div class="table-responsive">
                                <table style="border: 2px solid maroon;"
                                    class="table table-center table-hover datatable">

                                    <tbody>







                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Month:</b> {{ $studentfee->month }}</p>
                                            </td>
                                            <td>
                                                <p><b style="color: maroon">Name:</b>{{ $studentfee->studentname }}
                                                </p>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Form Fee:</b> {{ $studentfee->formfee }}</p>
                                            </td>
                                            <td>
                                                <p><b style="color: maroon">Monthly
                                                        Fee:</b>{{ $studentfee->masikbeton }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Monthly khoraki:</b>
                                                    {{ $studentfee->monthlykhoraki }}</p>
                                            </td>
                                            <td>
                                                <p><b style="color: maroon">Residential
                                                        Fee:</b>{{ $studentfee->residentialfee }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Non-residential Fee:</b>
                                                    {{ $studentfee->nonresidentialfee }} Taka</p>
                                            </td>
                                            <td>
                                                <p><b style="color: maroon">Board Registration
                                                        Fee:</b>{{ $studentfee->boardregistrationfee }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Current Bill:</b>
                                                    {{ $studentfee->currentbill }} Taka</p>
                                            </td>
                                            <td>
                                                <p><b style="color: maroon">Loan/Bokeya:</b>{{ $studentfee->boyeka }}
                                                </p>
                                            </td>
                                        </tr>





                                        <tr>

                                            <td>
                                                <p><b style="color: maroon">Address:</b> {{ $studentfee->address }}</p>
                                            </td>

                                            <td>
                                                <p><b style="color: maroon">Form No:</b>
                                                    {{ $studentfee->formno }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Id Card Fee:</b>
                                                    {{ $studentfee->idcardfee }}</p>
                                            </td>

                                            <td>
                                                <p><b style="color: maroon">Resullt Card Fee:</b>
                                                    {{ $studentfee->resulltcardfee }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Exam Fee:</b> {{ $studentfee->examfee }}
                                                </p>
                                            </td>

                                            <td>
                                                <p><b style="color: maroon">Certificate Fee:</b>
                                                    {{ $studentfee->sanadfee }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Prottayan Fee:</b>
                                                    {{ $studentfee->protoyonfee }}</p>
                                            </td>

                                            <td>
                                                <p><b style="color: maroon">Moallima Fee:</b>
                                                    {{ $studentfee->moallimafee }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><b style="color: maroon">Others:</b> {{ $studentfee->bibidh }}</p>
                                            </td>

                                            <td>
                                                <p><b style="color: maroon">Total Deposit in
                                                        {{ $studentfee->month }}:</b>
                                                    {{ $studentfee->total }} Taka/-</p>
                                            </td>
                                        </tr>





                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>


</body>

</html>
