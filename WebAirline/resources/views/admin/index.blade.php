<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> {{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('admin.layout.css')
    @stack('css')
</head>

<body>

<!-- Begin page -->
<div id="wrapper">
@include('admin.layout.header')

@include('admin.layout.aside')
@yield('content')



</div>

@include('admin.layout.footer')

@include('admin.layout.js')
@stack('javascipts')
</body>
</html>
