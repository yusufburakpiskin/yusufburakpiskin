<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kayıt Ol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin-temp') }}/assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/typography.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('admin-temp') }}/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('admin-temp') }}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{route('kayit-et')}}">
                {{ csrf_field() }}
                    <div class="login-form-head">
                        <h4>Kayıt Ol</h4>
                       
                    </div>
                    <div class="login-form-body">


                    <table width="350" >
                    <tr>
                        <td><label>Ad</label></td>
                        <td align="center" ><input style="border: 2px solid #eee;" class="au-input au-input--full" type="text" name="adi" placeholder="Adınız"></td>
                    </tr>
                    <tr>
                        <td><label>E-Posta Adresi</label></td>
                        <td align="center"><input style="border: 2px solid #eee;" class="au-input au-input--full" type="email" name="email" placeholder="E-Posta Adresiniz"></td>
                    </tr>
                    <tr>
                        <td><label>Şifre</label></td>
                        <td align="center"><input style="border: 2px solid #eee;" class="au-input au-input--full" type="password" name="password" placeholder="Şifre"></td>
                    </tr>
                    </table>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Kayıt Et <i class="ti-arrow-right"></i></button>
                          
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Giriş Yap <a href="{{route('login.show')}}">Giriş Yap </a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('admin-temp') }}/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('admin-temp') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="{{ asset('admin-temp') }}/assets/js/plugins.js"></script>
    <script src="{{ asset('admin-temp') }}/assets/js/scripts.js"></script>
</body>

</html>