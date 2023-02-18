<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>চকলোকমান মহিলা মাদ্রাসা</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="admin/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="admin/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="admin/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="admin/css/style.css">

    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body style="background: url('assets/images/420.webp');">

    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox" style="box-shadow: 2px 3px 3px grey;background:darkkhaki;">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <div class="text-center p-1">
                                <span style="text-shadow:1px 2px 1px black;" class="h1 text-dark px-2">চকলোকমান</span> 
                                <span style="text-shadow:1px 2px 1px black;" class="h1 text-dark px-2 ml-n1">মহিলা মাদ্রাসা</span>
                            </div>


                            <form id="login-form" class="form" action="{{ url('/admin.dashboard') }}" method="post">
                                @csrf
                                <div class="form-group">

                                    <input placeholder="Email" type="email"name="email" id="username"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">

                                    <div class="pass-group">
                                        <input placeholder="Password" type="password" name="password" id="password"
                                            class="form-control pass-input" required>
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>

                                <div class="text-center"><button class="btn btn-default" style="background: rgb(255, 251, 228); box-shadow:1px 2px 1px grey;border-radius:20px;" type="submit"
                                    name="submit">Login <i class="fa fa-sign-in"></i></button></div>

                            </form>
                            <p class="alert-danger text-center"> @php
                                $message = Session()->get('message');
                                if ($message) {
                                    echo "$message";
                                    Session()->put('message', null);
                                }
                            @endphp</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="admin/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="admin/js/feather.min.js"></script>

    <!-- Custom JS -->
    <script src="admin/js/script.js"></script>

</body>

</html>
