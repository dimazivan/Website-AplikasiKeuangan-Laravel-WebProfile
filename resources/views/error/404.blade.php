<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>404 Page Not Found!</title>
    <link rel="icon" href="{{ asset('asset/icon/dimaz4.png') }}" type="image/ico" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        body {
            background-color: white;
            /* background-color: #f1f1f1; */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        p {
            color: black
        }

        .vertical-center {
            min-height: 100%;
            min-height: 100vh;

            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="vertical-center">
        <div class="container">
            <div id="notfound" class="text-center ">
                <h1>😮</h1>
                <h2>Oops! Error Code 404</h2>
                <h2>Page Not Be Found</h2>
                <p>Sorry but the page you are looking for does not exist.</p>
                <p>You will redirect to <a href="/">homepage </a>in <span id="counter">10</span> second(s)</p>
            </div>
        </div>
    </div>
    <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript">
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                window.location = "/";
            }
            if (parseInt(i.innerHTML) != 0) {
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
        }
        setInterval(function() {
            countdown();
        }, 1000);
    </script>
</body>

</html>