@yield('css')
<!-- Bootstrap Css -->
<link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{ URL::asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ URL::asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('assets/css/dx.common.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/dx.light.css') }}">

<style>
    .dx-checkbox-container {
        height: unset !important;
    }
</style>