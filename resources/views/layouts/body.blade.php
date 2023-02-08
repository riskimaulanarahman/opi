@if (Auth::user()->theme == 0)
    <body>
@else
    <body data-layout-mode="dark" data-topbar="dark" data-sidebar="dark">
@endif

<!-- <body data-layout="horizontal"> -->