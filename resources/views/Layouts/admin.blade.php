<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larafile's admin panel</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/admin-custom.css" rel="stylesheet">
</head>
<body>

@include('admin.partials.nav')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <br>
            <br>
            <div class="card">
                <div class="card-header">
                {{ isset($panel_title) ? $panel_title : '' }}
                </div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>

           
        </div>
    </div>
</div>


<script src="/js/jquery-3.6.0.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
