<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>



<body
    style="background-color:#e2e1e0;font-family: Open Sans, sans-serif;font-size:100%;font-weight:400;line-height:1.4;color:#000;">
    <div id="divToPrint">
        @foreach ($studentfee as $studentfee)
            <table
                style="border: 2px solid green;max-width:870px;margin:50px auto 10px;background-color:rgb(246, 255, 238);padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px rgb(0, 72, 24);">
                <thead style="border:1px solid green;">

                    <tr>

                        <th class="p-2" style="text-align:left;">
                            <h5>চকলোকমান মহিলা মাদ্রাসা-(প্রতিষ্ঠা:১৯৮৩)</h5>
                        </th>
                        <th style="text-align:end;"> <button class="btn btn-success m-2" type="button"
                                onclick="PrintDiv();">
                                Print</button>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td style="width:50%;padding:20px;vertical-align:top">
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">তারিখ</span>
                                {{ $studentfee->date }}</p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">মাস</span>
                                {{ $studentfee->month }}</p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">সন</span>
                                {{ $studentfee->year }}</p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">ছাত্রীর নাম</span>
                                {{ $studentfee->studentname }}</p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">মোবাইল নাম্বার</span>
                                {{ $studentfee->mobile }}</p>

                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">ফর্ম
                                    ফি</span>{{ $studentfee->formfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">মাসিক
                                    বেতন</span>{{ $studentfee->masikbeton }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">আইডি
                                    কার্ড</span>{{ $studentfee->idcardfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">রেজাল্ট
                                    কার্ড</span>{{ $studentfee->resulltcardfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">মাসিক
                                    খোরাকী</span>{{ $studentfee->monthlykhoraki }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">আবাসিক
                                    বেতন</span>{{ $studentfee->residentialfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">অনাবাসিক
                                    বেতন</span>{{ $studentfee->nonresidentialfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">বোর্ড নিবন্ধন
                                    ফি</span>{{ $studentfee->boardregistrationfee }} Tk.
                            </p>
                            <p
                                style="font-size:14px;margin:0;padding-top:15px;text-decoration:underline;text-align:center">
                                <span>পরিদর্শকের স্বাক্ষর:</span>
                            </p>


                        </td>
                        <td style="width:50%;padding:20px;vertical-align:top">
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">জেলা</span>{{ $studentfee->district }}
                            </p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">জামাত</span>
                                {{ $studentfee->jamat }}</p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">ঠিকানা</span>{{ $studentfee->address }}
                            </p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">পিতার
                                    নাম</span>{{ $studentfee->fathername }}
                            </p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">ফর্ম
                                    নং</span>{{ $studentfee->formno }}
                            </p>


                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">সনদ</span>{{ $studentfee->sanadfee }}
                                Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">পরীক্ষার
                                    ফি</span>{{ $studentfee->examfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">প্রত্যয়ন
                                    পত্র</span>{{ $studentfee->protoyonfee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">মুওয়াল্লিমা
                                    ট্রেনিং ফি</span>{{ $studentfee->moallimafee }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">বিদ্যুৎ
                                    বিল</span>{{ $studentfee->currentbill }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">বকেয়া</span>{{ $studentfee->boyeka }}
                                Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">বিবিধ</span>{{ $studentfee->bibidh }}
                                Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">সর্বমোট</span>{{ $studentfee->total }}
                                Tk.
                            </p>
                            <p
                                style="font-size:14px;margin:0;padding-top:10px;text-decoration:underline;text-align:center">
                                <span>টাকা প্রদানকারীর স্বাক্ষর:</span>
                            </p>


                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>



    <script type="text/javascript">
        function PrintDiv() {
            var divToPrint = document.getElementById('divToPrint');
            var popupWin = window.open('', '_blank', 'width=300,height=300');
            popupWin.document.open();
            popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
        }
    </script>


</body>

</html>
