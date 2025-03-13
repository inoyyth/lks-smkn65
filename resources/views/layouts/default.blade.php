<!DOCTYPE html>
<html lang="en">
    @include('includes.header')
    <body class="sb-nav-fixed">
        @include('includes.topbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('includes.sidebar')
            </div>
            <div id="layoutSidenav_content">
                <main>@yield('content')</main>
                @include('includes.footer')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        @stack('scripts')
    </body>
</html>