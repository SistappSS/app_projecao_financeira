<!DOCTYPE html>
<html lang="pt">

<head>
    <!--   Include: HEAD   -->
    @include('common.header.head')
</head>

<body id="app-container" class="menu-default show-spinner">
<!-- Include: NAVBAR -->
@include('common.header.navbar')

<!-- Include: SIDENAV -->
@include('common.header.sidenav')

<main>
    <div class="container-fluid">
        @yield('content')
    </div>
</main>

{{-- <!-- Include: FOOTER --> --}}
@include('common.footer.footer')

<!--   Include: Script APP   -->
@include('common.scripts.app_script')
</body>

</html>
