<!DOCTYPE html>
<html lang="@lang("en")">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include("frontend.layouts.css")
    <script src="https://use.fontawesome.com/e6d24cd67c.js"></script>
    <title>TS3ESPORT - รายชื่อ พ่อค้า,เเม่ค้า น่าไว้ใจ</title>
</head>
<body class="app">
<div class="laravel-app-main">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                @yield('content')
            </div>
        </div>
        <hr>
        @include('frontend.layouts.footer')
    </div>
</div>
@include('frontend.layouts.js')
</body>
</html>