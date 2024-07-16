<!DOCTYPE html>
<html lang="pt">

<head>
    <!--   Include: HEAD   -->
    @include('common.header.head')
</head>

<body class="background show-spinner no-footer">
<div class="fixed-background"></div>
<main>
    <div class="container">
        <!-- Include: CONTENT -->
        @yield('content-guest')
    </div>
</main>

<!--   Include: Script APP   -->
@include('common.scripts.app_script')
</body>

</html>
