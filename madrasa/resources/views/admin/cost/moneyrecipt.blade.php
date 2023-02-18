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
        @foreach ($cost as $cost)
            <table
                style="border: 2px solid green;max-width:870px;margin:50px auto 10px;background-color:rgb(246, 255, 238);padding:50px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);-moz-box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);box-shadow:0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24); border-top: solid 10px rgb(0, 72, 24);">
                <thead style="border:1px solid green;">

                    <tr>

                        <th class="p-2" style="text-align:left;">
                            <h5>চকলোকমান মহিলা মাদ্রাসা-(খরচ)</h5>
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
                            <br><br>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">তারিখ</span>
                                {{ $cost->date }}</p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px">মাস</span>
                                {{ $cost->month }}</p>
                            

                             
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">বোডিং</span>{{ $cost->boarding }}
                                Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">নির্মাণ</span>{{ $cost->nirman }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">বেতন ও ভাতা</span>{{ $cost->beton }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">আসবাব</span>{{ $cost->asbab }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">যোগাযোগ/প্রচার</span>{{ $cost->jogajog }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">ছাপা/প্রিন্টিং</span>{{ $cost->chapa }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">বিদ্যুৎ ও নেটবিল</span>{{ $cost->currentnet }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">পরীক্ষা</span>{{ $cost->exam }} Tk.
                            </p>

                            <p
                                style="font-size:14px;margin:0;padding-top:15px;text-decoration:underline;text-align:center">
                                <span>পরিদর্শকের স্বাক্ষর:</span>
                            </p>


                        </td>
                        <td style="width:50%;padding:20px;vertical-align:top">
                            <br><br>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">সন</span>{{ $cost->year }}
                            </p>
                            <p style="margin:0 0 10px 0;padding:0;font-size:14px;"><span
                                    style="display:block;font-weight:bold;font-size:13px;">ভাউচার নং</span>
                                {{ $cost->vawcharno }}</p>
                              

                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">আপ্যায়ন</span>{{ $cost->guest }}
                                Tk.
                            </p>
                            
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">বিবিধ</span>{{ $cost->bibidh }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">সাধারণ কর্যপরিশোধ</span>{{ $cost->loan }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">খোরাকী/বেতন</span>{{ $cost->khorakhi }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">চিকিৎসা,পোশাক ও বই-পুস্তক</span>{{ $cost->basicneed }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">লিল্লাহ্ কর্জপরিশোধ</span>{{ $cost->lillahkorjo }} Tk.
                            </p>
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span style="display:block;font-size:13px;font-weight:normal;">ভর্তিফি, পরীক্ষাফি</span>{{ $cost->vortiexam }} Tk.
                            </p>
                            
                            <p style="font-size:14px;margin:0;padding:10px;border:solid 1px #ddd;font-weight:bold;">
                                <span
                                    style="display:block;font-size:13px;font-weight:normal;">সর্বমোট</span>{{ $cost->total }}
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
