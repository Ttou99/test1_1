<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.backend.head')
</head>
<body >
<div class="main-wrapper">

        <div class="header">
            @include('layouts.backend.main-headerbar')
        </div>

        <div class="sidebar" id="sidebar">
            @include('layouts.backend.main-sidebar')
        </div>

            @yield('content')


        @include('layouts.backend.footer')
    </div>








        @include('layouts.backend.footer-scripts')


</body>
</html>
