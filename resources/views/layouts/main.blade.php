<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Apotech</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        @include('partials.navbar')

        @yield('container')

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            let exist = '{{Session::has('errors')}}';
            let msg = '{{Session::get('errors')}}';
            msg = msg.replace(/&quot;/g, '\"');

            if(exist){
                let json = JSON.parse(msg);
                let emailErr = ((typeof (json["email"]) !== 'undefined') ? json["email"] : '');
                let passErr = ((typeof (json["password_confirmation"]) !== 'undefined') ? json["password_confirmation"] : '');
                let alertText = emailErr + "\n" + passErr;
                alert(alertText);
            }
        </script>
    </body>
</html>
