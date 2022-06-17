<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}}"></base>;
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="source/assets/css/style.css">
    <link rel="stylesheet" href="source/assets/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/css/huong-style.css">
</head>

<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
    <!-- include js files -->
    @include('script')
</body>

</html>